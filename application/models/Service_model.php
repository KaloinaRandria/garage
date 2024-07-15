<?php 
	class Service_model extends CI_Model {
		function insertService($data) {
			$this->db->insert('service',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}
		
		function getServices() {
			$query = $this->db->get('service');
			return $query->result_array();
		}

		function getServiceById($id) {
			$this->db->where('id',$id);
			$query = $this->db->get('service');
			return $query->row();
		}

		function updateService ($data, $id) {
			$this->db->where('id',$id);
			$this->db->update('service',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}

		function deleteService($id) {
			$this->db->where('id',$id);
			$this->db->delete('service');
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>
