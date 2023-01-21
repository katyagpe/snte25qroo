<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Principal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Test");
        $this->load->model("Table_model");
        $this->load->helper('url');
    }

    public function index()
    {

    }
    /*
     * Este método sirve para enviar las fotos que toma el SmartPSS
     */
    public function image()
    {
        $month = date('m');
        $day = date('d');
        $directorio = FCPATH . 'assets/img/img/Casa Salas Rodriguez_Entrada_2019' . $month . $day . '@';
        if (is_dir($directorio)) {
            if ($dir = opendir($directorio)) {
                while ($archivo = readdir($dir)) {
                    if ($archivo != '.' && $archivo != '..') {

                        $newArray['name'] = FCPATH . 'assets/img/img/Casa Salas Rodriguez_Entrada_2019' . $month . $day . '@' . $archivo;

                        $consult = $this->Table_model->consultImage();

                        foreach ($newArray as $value1) {

                            $encontrado = false;
                            if ($value1 != '') {
                                foreach ($consult as $value2) {
                                    if ($value1 == $value2['file_id']) {
                                        $encontrado = true;
                                        $break;
                                    }
                                }
                                if ($encontrado == false) {
                                    $insert = $this->Table_model->insertImage($value1);
                                    $data = array(
                                        "chat_id" => '502424034',
                                        "caption" => $archivo,
                                        "photo" => new CURLFile($value1, 'image/jpg', 'test.jpg'),
                                    );

                                    $request = curl_init('https://api.telegram.org/bot' . '612617579:AAGX8gyLRiNyIlqLiEl-lwyjalLycYWqxOg' . '/sendPhoto');

                                    curl_setopt($request, CURLOPT_POST, true);
                                    curl_setopt($request, CURLOPT_POSTFIELDS, $data);
                                    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($request, CURLOPT_HTTPHEADER, array(
                                        "Content-Type:multipart/form-data",
                                    ));

                                    curl_exec($request);
                                    curl_close($request);

                                }
                            }
                        }
                    }
                }
                closedir($dir);
            }
        } else {
            echo 'no es directorio';
        }
    }

    /*
    Para tomar los gastos de la BD de phpmyadmin,
    y saber cuanto queda en total.
     */
    public function expenses()
    {
        $sumExpenses = $this->Table_model->sumExpenses();
        foreach ($sumExpenses as $sumExpense) {
            $sendSum = $sumExpense['total'];
            $subtraction = 4394 - $sendSum;
            $content = array(
                'chat_id' => '502424034',
                'text' => 'Te quedan : $' . $subtraction,
            );
            $this->test->test("envioActividades", $content);
        }
    }

    // Guardar los gastos a la BD
    public function getText()
    {
        // setsebool -P httpd_can_network_connect on { para activar el curl_init }
        $url = "https://api.telegram.org/bot612617579:AAGX8gyLRiNyIlqLiEl-lwyjalLycYWqxOg/getUpdates";
        $c = curl_init();
        curl_setopt($c, CURLOPT_HEADER, 0);
        curl_setopt($c, CURLOPT_VERBOSE, 0);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        $data = curl_exec($c);
        curl_close($c);
        $updates = json_decode($data, true);
        if ($updates['ok'] == '1') {
            foreach ($updates['result'] as $update) {
                //print_r ( $update );
                //foreach ($update as $expense) {
                    //exit;
                    $text = $update['message']['text'];
                    $message = $update['message']['message_id'];
                    $date = $update['message']['date'];
                    $this->insertExpense($text, $message, $date);
                    log_message('info', 'Esto es una prueba');
                //}
            }
        }
    }
    /*
     * Inserta en la BD los gastos que se registran en el chat de telegram
     */
    private function insertExpense($text, $message, $date)
    {

        date_default_timezone_set('America/Merida');

        $find = '*';
        $findLetter = strpos($text, $find);

        if ($findLetter !== false) {
            list($nameExpense, $priceExpense) = preg_split('/[*]/', $text);

            // Convertimos en un array los updates recibidos desde url
            $messageId = array(
                array(
                    "text" => $nameExpense,
                    "date" => $date,
                    "price" => $priceExpense,
                    "message_id" => $message,
                ),
            );

            // Realizamos la consulta de la BD
            $consult = $this->Table_model->consult();

            foreach ($messageId as $value1) {

                $encontrado = false;
                if ($value1['message_id'] != '') {
                    foreach ($consult as $value2) {
                        if ($value1['message_id'] == $value2['message_id']) {
                            $encontrado = true;
                            $break;
                        }
                    }
                    if ($encontrado == false) {
                        $timestamp = $value1['date'];

                        $value1['date'] = date("Y-m-d H:s:i", $timestamp);

                        $data = explode("*", $value1['text']);

                        $urlSinParams = $data[0];

                        echo '==============================================';
                        echo '<br>';
                        echo ' Texto: ' . $urlSinParams . '<br>' . 'MessageID: ' . $value1['message_id'] . '<br>' . 'Fecha: ' . $value1['date'] . '<br>' . 'Precio: ' . $value1['price'];
                        echo '<br>';
                        echo '==============================================';

                        $this->Table_model->insert($urlSinParams, $value1['message_id'], $value1['date'], $value1['price']);
                    }
                }
            }
        }
    }

    /*
     * Envia al chat de telegram los gastos mayores o iguales a 100
     */
    public function higherExpense()
    {
        $getExpense = $this->Table_model->getExpense();

        foreach ($getExpense as $expenses => $expense) {
            $expenseName = $expense['concepto'];
            $expensePrice = $expense['precio'];

            if ($expensePrice >= 100) {

                $expenses = '$' . $expensePrice . ' en ' . $expenseName;

                $content = array(
                    'chat_id' => '502424034',
                    'text' => $expenses,
                );
                $this->test->test("envioActividades", $content);
            }
        }
    }

    public function update()
    {
        $post = $this->input->post();

        $data['id'] = $post['data'];
        $data['name'] = $post['name'];

        $this->Table_model->update($data);
    }
}