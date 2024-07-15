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
		
		function getServices() {
			$query = $this->db->get('garage');
			return $query->result_array();
		}

		function getServiceById($id) {
			$this->db->where('id',$id);
			$query = $this->db->get('garage');
			return $query->row();
		}

		function updateService ($data, $id) {
			$this->db->where('id',$id);
			$this->db->update('garage',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}

		function deleteService($id) {
			
		}
	}
?>
