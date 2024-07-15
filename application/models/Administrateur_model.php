<?php
	class Administrateur_model extends CI_Model {

		function getAdministrateur() {
			$query = $this->db->get('administrateur');
			return $query->result_array();
		}

		function getAdminById($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('administrateur');
			return $query->row();
		}
	}
?>
