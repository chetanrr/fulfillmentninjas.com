<?php
/*
* framework t14
* file : validate
* specification : this file validate credit cards
* version : 1.0.0
*/

include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Class' . DIRECTORY_SEPARATOR . 'CreditCard.php';

/*
* validate class
*/
class CreditCardValidate{
	
	function __construct()
	{
		return;
	}

	public static function validateCreditCard( $post_data ){

		//print_r($post_data);

		$response_cc_ct = self::validateCreditCardNumber( $post_data['cc_number'], $post_data['cc_type'] );
		$response_cc_cvv = self::validateCreditCardCvvNumber( $post_data['cc_cvv'], $post_data['cc_type'] );
		$response_mm_yy = self::validateCreditCardDateMonth( '20' . $post_data['fields_expyear'], $post_data['fields_expmonth'] );

		if( $response_cc_ct['valid'] && $response_cc_cvv && $response_mm_yy ){

			return $response_cc_ct;

		}

		else{

			if( empty( $response_cc_ct['valid'] ) || $response_cc_ct['valid'] == 0 ){

				return array(
					'valid' 	=> false,
				    'number' 	=> $post_data['cc_number'],
				    'message' 	=> 'The credit card number you entered is invalid, please try again',
				    'hints_msg' => 'Please provide your valid credit card number.'
				);

			}

			if( !$response_cc_cvv ){

				return array(
					'valid' 	=> false,
				    'number' 	=> $post_data['cc_number'],
				    'message' 	=> 'You have entered a wrong CVV !',
				    'hints_msg' => 'Please provide your valid cvv number.'
				);

			}

			if( !$response_mm_yy ){

				return array(
					'valid' 	=> false,
				    'number' 	=> $post_data['cc_number'],
				    'message' 	=> 'You have entered a wrong Month / Year combination!',
				    'hints_msg'	=> ''
				);

			}

		}

	}

	public static function validateCreditCardNumber( $credit_card_number, $credit_card_type ){

		return CreditCard::validCreditCard( $credit_card_number, $credit_card_type );

	}

	public static function validateCreditCardCvvNumber( $credit_card_number, $credit_card_cvv_number ){

		return CreditCard::validCvc( $credit_card_number, $credit_card_cvv_number );

	}

	public static function validateCreditCardDateMonth( $credit_card_year, $credit_card_month ){

		return CreditCard::validDate( $credit_card_year, $credit_card_month );

	}

}

?>