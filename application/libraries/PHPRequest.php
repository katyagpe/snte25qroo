<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  

require_once APPPATH."/third_party/Requests.php";
class PHPRequests extends Requests{
    public function __construct() {
       PHPRequests::register_autoloader();
    }
}