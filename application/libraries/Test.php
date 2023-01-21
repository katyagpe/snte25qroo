<?php
if ( ! defined ( 'BASEPATH' ) )
exit ( 'No direct script access allowed' );
class Test{

	function __construct() {
	}

	function test( $type, $post_fields, $debug = false ) {

		$status = "";
		switch ( $type ) {
			case "message" :
				$type = "sendMessage";
				$status = "typing";
				$this->status ( $post_fields ['chat_id'], $status );
			break;
			case "envioActividades" :
				$type = "sendMessage";
				$status = "typing";
				$this->status ( $post_fields ["chat_id"], $status );
			break;
			case "insertCommand" :
				$type = "sendMessage";
				$status = "typing";
				$this->status( $post_fields["chat_id"], $status );
		}

	$ch = curl_init ( 'https://api.telegram.org/bot' . '612617579:AAGX8gyLRiNyIlqLiEl-lwyjalLycYWqxOg' . "/$type" );
	curl_setopt ( $ch, CURLOPT_POST, true );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, ($post_fields) );

	$output = curl_exec ( $ch );
	log_message ( "info", "Telegram Dice: " . print_r ( $output, 1 ) );
		if ( $debug ) {
			echo $output;
		}
	}

	private function status( $chat_id, $status, $debug = false ) {
		switch ( $status ) {
			case "record_video" :
			case "record_audio" :
			case "upload_photo" :
			case "upload_video" :
			case "upload_audio" :
			case "upload_document" :
			case "typing" :
				$status = $status;
			break;
			default :
			case "typing" :
			break;
		}
		$post_fields = array(
			"chat_id" => $chat_id,
			"action" => $status
		);

		$ch = curl_init ( 'https://api.telegram.org/bot' . '612617579:AAGX8gyLRiNyIlqLiEl-lwyjalLycYWqxOg' . '/sendChatAction' );

		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_fields );
		$output = curl_exec ( $ch );
		if ( $debug ) {
			echo $output;
		}
	}
}