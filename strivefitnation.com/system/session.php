<?php
/*
* framework t14
* file : session
* specification : this file manages all session work
* version : 1.0.0
*/


/*
* session class
*/
class sessionRequest {

	function __construct()
	{
		return;
	}

	public static function startSession(){

		session_set_cookie_params(0, '');
        if ( session_id() ) {
            session_unset();
            $_SESSION['unique_id'] = session_id();
        }

        else{

        	session_start();
        	$_SESSION['unique_id'] = session_id();

        }
		
	}

	public static function initSession(){

		self::startSession();
		
	}

	

	public static function setSession( $sessionArray ){

		$_SESSION = $sessionArray;

	}

	public static function addSession( $sessionKey, $sessionValue ){

		$_SESSION[ $sessionKey ] = $sessionValue;

	}

	public static function getSession( $getKey ){

		if( isset( $_SESSION[ $getKey ] ) ){

			return $_SESSION[ $getKey ];

		}
		else{

			return false;

		}

	}

	public static function getSessionAll(){

		if( !empty( $_SESSION ) ){

			return $_SESSION;

		}
		else{

			return false;

		}

	}

	public static function viewSession(){

		echo "<pre>";
		print_r( $_SESSION );

	}


	public static function clearSession(){

		unset( $_SESSION );
		session_destroy();

	}

}

sessionRequest::initSession();


?>