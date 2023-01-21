<?php

class Agreement_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}

	/* Get categories from agreement state table */
	public function getCategoryState() {
		$query = "
			SELECT
			    `id`,
                `name_category`
			FROM
                `agreement_state`
			WHERE
			    `status` = '0'
			ORDER BY `name_category` ASC;
		";
		return $this->db->query($query)->result_array();
	}
    /** Total de convenios */
    public function total() {
        $query = "
            SELECT
                COUNT(name_category) as 'total'
            FROM 
                `agreement_state_filter`
            WHERE status = 0
        ";
        return $this->db->query($query)->result_array();
    }
    public function getDescriptionState($id) {
        if ($id == 'all') {
            $query = "
                SELECT
                    `id`,
                    `name_category`,
                    `percentaje`,
                    `sede`,
                    `address`
                FROM
                    `agreement_state_filter`
                WHERE
                    `status` = '0'
                ORDER BY `name_category` ASC;
            ";
            return $this->db->query($query)->result_array();
        } else {
            $query = "
                SELECT
                    `id`,
                    `name_category`,
                    `percentaje`,
                    `sede`,
                    `address`
                FROM
                    `agreement_state_filter`
                WHERE
                    `status` = '0'
                AND
                    `id_agreement_state` = '{$this->db->escape_str($id)}' 
                ORDER BY `name_category` ASC;
            ";
            return $this->db->query($query)->result_array();
        }
	}
}