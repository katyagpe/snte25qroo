<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    /* public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    } */

    public function index()
    {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/home_view.php');
        $this->load->view('templates/footer_view.php');
    }
}
?>