<?php
	class Client_model extends CI_Model {
		function __construct()
		{
			parent::__construct();
		}

		function checkLogin($numero, $type) {
			$this->db->where('numero',$numero);
			$this->db->where('type',$type);
			$query = $this->db->get('client');

			if ($query->num_rows() == 1) {
				return true;
			} else {
				$this->insertClient($numero, $type);
				return true;
			}
		}

		function insertClient($numero,$type) {
			$data = array(
				'numero' => $numero,
				'type' => $type,
			);
			$this->db->insert('client',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>
