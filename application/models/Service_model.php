<?php 
	class Service_model extends CI_Model {
		function insertService($data) {
			$this->db->insert('garage',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}

		
	}
?>
