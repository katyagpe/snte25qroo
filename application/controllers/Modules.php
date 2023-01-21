<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modules extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("News_model");
    }

    public function index()
    {
        /**
         * Aun no hay nada para agregar
         */
    }

    /**
     * Services page
     */
    public function services() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/services_view.php');
        $this->load->view('templates/footer_view.php');
    }

    /**
     * Library page
     */
    public function library() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function librarynational() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_national_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function librarystate() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_state_view.php');
        $this->load->view('templates/footer_view.php');
    }

    /**
     * News page
     */
    public function news() {
        $data['news'] = $this->News_model->getNews();
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/news_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }

    /**
     * Contact page
     */
    public function contact() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/contact_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function enviar() {

        $from = $this->input->post('email');
        $fromName = "Buzón de atención";
        $to = "buzon@snte25.org";
        $subject = "Buzón de atención";


        /* Componemos el mensaje */
        $fullMessage = "Buen día! Buzón Sección 25" . "\r\n";
        $fullMessage .= $from ." te ha enviado un mensaje:\r\n";
        $fullMessage .= "\r\n";
        $fullMessage .= "Nombre: ". $this->input->post('name') . "\r\n";
        $fullMessage .= "Mensaje: ". $this->input->post('message')  . "\r\n";
        $fullMessage .= "\r\n";
        $fullMessage .= "Saludos!\r\n";

        /* Creamos las cabeceras del Email */
        $headers = "Organization: RPF WEB\r\n";
        $headers.= "From: =?utf-8?b?".base64_encode($fromName)."?= <".$fromName.">\r\n";
        $headers .= "Reply-To: buzon@snte25.org" . "\r\n";
        $headers .= "Return-Path: " . $to . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

        /* Enviamos el Formulario*/
        if (mail($to, $subject, $fullMessage, $headers)) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/confirmation_view.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $this->load->view('templates/header_view.php');
        $this->load->view('templates/error_view.php');
        $this->load->view('templates/footer_view.php');
        }

         

    }
}
?>