<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announcementrelease extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/announcementandrelease_view.php');
        $this->load->view('templates/footer_view.php');
    }
}
?>