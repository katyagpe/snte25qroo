<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Table_model");
    }

    public function index()
    {
        $data['data'] = $this->Table_model->getExpense();
        $data['suma'] = $this->Table_model->sumExpenses();

        $this->load->view('expenses_view.php', $data);
    }
}