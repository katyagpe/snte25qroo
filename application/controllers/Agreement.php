<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agreement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Agreement_model");
    }

    public function index()
    {
        $data['total'] = $this->Agreement_model->total();
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/agreement_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
    public function national() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/national_agreement_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function state($id) {
        $data['categories'] = $this->Agreement_model->getCategoryState();
        $data['description'] = $this->Agreement_model->getDescriptionState($id);
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/state_agreement_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}
?>