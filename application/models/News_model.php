<?php

class News_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}

	/* Get categories from agreement state table */
	public function getNews() {
		$query = "
			SELECT
			    *
			FROM
                `news`
			WHERE
			    `status` = '0'
			ORDER BY `date` ASC;
		";
		return $this->db->query($query)->result_array();
	}
}