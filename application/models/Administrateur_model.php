<?php
	class Administrateur_model extends CI_Model {

		function getAdministrateur() {
			$query = $this->db->get('administrateur');
			return $query->result_array();
		}

		function getAdminById($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('administrateur');
			return $query->row_array();
		}

		function checkLogAdmin($mail , $password) {
			$query = $this->db->get('administrateur');
			if ($query->num_rows() == 1) {
				$admin = $query->row();
				if ($admin->mail == $mail) {
					if($admin->passord == $password) {
						return true;
					}
				} else {
					return false;
				}
			}
		}
	}
?>
