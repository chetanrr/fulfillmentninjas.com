<?php
/*
* framework t14
* file : framework
* specification : this file contents the framework
* version : 1.0.0
*/

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'session.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'validate.php';


/*
* base class
*/
class Framework{
	
	function __construct()	{

		return;
		
	}

	protected static $configuration, $request, $response;

	public static function initialize( $request_step ){
		
		self::loadConfig();
		switch ( $request_step ) {
			case 'prospect':
				sessionRequest::startSession();
				sessionRequest::addSession( 'step', 'prospect' );
				return self::$configuration;
				break;

			case 'order':
				sessionRequest::addSession( 'step', 'order' );
				return self::$configuration;
				break;

			case 'confirm':
				return self::$configuration;
				break;
			
			default:
				return false;
				break;
		}

		

	}

	public static function request( $post_data ){
		
		self::loadConfig();
		$sessionStep = sessionRequest::getSession( 'step' );

		if( $sessionStep ) :
			switch( $sessionStep ){

				case 'prospect' :

					sessionRequest::setSession( $post_data );
					sessionRequest::addSession( 'prospect', rand( 10000000, 99999999 ) );
					self::processResponse('prospect');
					break;

				case 'order' :
					
					foreach ( $post_data as $post_key => $post_value) {
						sessionRequest::addSession( $post_key, $post_value );
					}
					self::$response = CreditCardValidate::validateCreditCard( $post_data );
					sessionRequest::addSession( 'order', rand( 100000, 999999 ) );
					self::processResponse('order');
					break;

				case 'confirm' :

					sessionRequest::clearSession();
					break;

				default:

					echo "step has not been set";
					break;

			}

		else :

			echo json_encode( array(
				'response' => false,
				'status' => 500,
				'redirect' => '/'
			) );

		endif;

	}

	public static function processResponse( $step ){

		if( $step == 'prospect' ){

			$setRedirectArr = self::configValue('steps');
			$setRedirect = $setRedirectArr['2'] ? $setRedirectArr['2'] : '';

			echo json_encode( array(
				'response' => true,
				'status' => 100,
				'redirect' => $setRedirect . '?prospect=' . sessionRequest::getSession( 'prospect' )
			) );

		}

		if( $step == 'order' ){

			$setRedirectArr = self::configValue('steps');
			$setRedirect = $setRedirectArr['3'] ? $setRedirectArr['3'] : '';

			if( !empty(self::$response) && array_key_exists( 'valid', self::$response ) && self::$response['valid'] == 1 ){

				echo json_encode( array(
					'response' => true,
					'status' => 100,
					'redirect' => $setRedirect . '?prospect=' . sessionRequest::getSession( 'prospect' ) . '&order=' . sessionRequest::getSession( 'order' )
				) );
			}

			else{

				echo json_encode( array(
					'response' => self::$response['valid'],
					'status' => 400,
					'redirect' => '/',
					'message' => self::$response['message']
				) );

			}

		}




	}

	protected static function loadConfig(){

		$fileConfig = require dirname( dirname(__FILE__) ) . DIRECTORY_SEPARATOR . 'configuration' . DIRECTORY_SEPARATOR . 'configuration.php';
		self::$configuration = $fileConfig;

	}

	
	public static function configValue( $key ){

		self::loadConfig();

		if( array_key_exists( $key, self::$configuration ) ) {

			return self::$configuration[ $key ];

		}
			
		else {

			return false;

		}

	}

}
?>