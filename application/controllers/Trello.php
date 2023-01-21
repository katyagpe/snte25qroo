<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class Trello extends CI_Controller {

	public function __construct() {
		parent::__construct ( );
		$this->load->library ( "Test" );

		$this->user = 'katyarodriguez1';
		$this->key = '0f3924296b4e4a96c67666fe3ac4612f';
		$this->token = '1ce81657d3ca812817f79738ee3d52e21cc49f3555b003975f6cd5a08e123989';
		$this->list = '5b0f66a68abc827214040d7e';
		$this->member = '5b0f66728170f9a5345da66a';

		date_default_timezone_set('America/Merida');
	}
	
	public function index() {
		
	}

	public function list() {

		$url = "https://api.trello.com/1/members/{$this->user}/cards?filter=visible&key={$this->key}&token={$this->token}";
		$c = curl_init ( );
		curl_setopt ( $c, CURLOPT_HEADER, 0 );
		curl_setopt ( $c, CURLOPT_VERBOSE, 0 );
		curl_setopt ( $c, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $c, CURLOPT_URL, $url );
		$data = curl_exec ( $c );
		curl_close ( $c );
		$updates = json_decode( $data, true );
		
		foreach ($updates as $key => $list) {
			$nameActivity = $list['name'];
			$dateActivity = $list['due'];

			$dateFormat = date('d-m-Y', strtotime($dateActivity));
			$dateToday  = date('d-m-Y');
			$hourToday  = date('H:i');

			if ($dateFormat == $dateToday) {
				/*echo 'es igual => '.$nameActivity;
				echo '<br>';*/
				$hourFormat = date('H:i', strtotime($dateActivity));
				if ($hourToday == $hourFormat) {
					echo 'es igual => '.$nameActivity;
					$content = array(
						'chat_id' => '502424034',
						'text' => $nameActivity
					);
					$this->test->test ( "envioActividades", $content );
					log_message("INFO", $content);
				} else {
					//echo 'no es igual => '.$nameActivity;
				}
			} else {
				//echo 'no es igual => ' .$nameActivity;
				//echo '<br>';
			}
		}
	}

	public function put() {
		/*
		* Leer datos del Telegram
		*/
		$url = "https://api.telegram.org/bot612617579:AAGX8gyLRiNyIlqLiEl-lwyjalLycYWqxOg/getUpdates";
		$c = curl_init ( );
		curl_setopt ( $c, CURLOPT_HEADER, 0 );
		curl_setopt ( $c, CURLOPT_VERBOSE, 0 );
		curl_setopt ( $c, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $c, CURLOPT_URL, $url );
		$data = curl_exec ( $c );
		curl_close ( $c );
		$updates = json_decode( $data, true );

		if ( $updates['ok'] == '1' ) {
			foreach ($updates['result'] as $index => $item) {
				foreach ($item as $key => $value) {
					$text = $value['text'];
					$this->insertActivity ( $text );
				}
			}
		}

		/*
		* Inserta la actividad en Trello
		* @activity
		* @date
		*/
		

		/*$url = "https://api.trello.com/1/cards?name=Activity&due=2019-06-24T14%3A00%3A00.000Z&idList={$this->list}&idMembers={$this->member}&keepFromSource=all&key={$this->key}&token={$this->token}";
		
		$c = curl_init();
		curl_setopt ( $c, CURLOPT_URL, $url );
		curl_setopt($c,CURLOPT_POST, 1);
		$data = curl_exec ( $c );
		
		curl_close ( $c );
		$updates = json_decode( $data, true );*/
	}
	private function insertActivity( $text ) {
		
	}
}