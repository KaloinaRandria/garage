<?php 
	class Type_model extends CI_Model {
		function insertType($data) {
			$this->db->insert('type',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}

		function getTypes() {
			$query = $this->db->get('type');
			return $query->result_array();
		}
	}

?>
