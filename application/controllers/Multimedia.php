<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Multimedia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/multimedia_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function video()
    {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/multimedia_video_view.php');
        $this->load->view('templates/footer_view.php');
    }
}
?>