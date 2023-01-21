<?php

class Table_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}

	/* Sirve para el método 'mayor' */
	public function getExpense() {
		$query = "
			SELECT
			    idGasto, fecha, concepto, precio
			FROM
			    Gastos
			WHERE
			    status = '0'
			ORDER BY fecha ASC;
		";
		return $this->db->query($query)->result_array();
	}

	/* Sirve para el método 'gastos' */
	public function sumExpenses() {
		$query = "
			SELECT
			    SUM(precio) AS total
			FROM
			    Gastos
			WHERE
			    status = '0';
		";
		return $this->db->query($query)->result_array();
	}

	/* Sirve en el método 'insertActivity' para consultar que actividades ya se registraron */
	public function consult() {
		$query = "
			SELECT
				fecha,
				concepto,
				precio,
				message_id
			FROM
				Gastos
			ORDER BY
				fecha
		";

		return $this->db->query($query)->result_array();
	}

	/* Sirve para el método 'insert' */
	public function insert($valor, $message, $date, $price) {
		$query = "
			INSERT INTO `Gastos`
			VALUES (
				NULL, 
				'{$this->db->escape_str($date)}', 
				'{$this->db->escape_str($valor)}', 
				'{$this->db->escape_str($price)}', 
				'{$this->db->escape_str($message)}', 
				'0');
		";
		$this->db->query($query);
		return $valor;
	}

	##############
	#IMAGENES#####
	##############

	/* Sirve en el método 'image' */
	public function insertImage($valor) {

		$data = array(
			'file_id' => $valor,
		);
		$this->db->insert('images', $data);
	}

	/* Sirve en el método 'consultImage' */
	public function consultImage() {
		$query = $this->db->query("
					SELECT
						file_id
					FROM
						images
				");

		return $query->result_array();
	}

	// Update de los gastos
	public function update($data) {
		$query = "
			UPDATE 
				Gastos 
				SET 
				    concepto = '{$this->db->escape_str($data['name'])}'
				WHERE
				    idGasto = {$this->db->escape_str($data['id'])}
				;
		";
		$this->db->query($query);
	}

}