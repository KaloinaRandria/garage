<?php
	class Slot_model extends CI_Model {

		function insertSlot($data) {
			$this->db->insert('slot',$data);
			if ($this->db->affected_rows() >= 0) {
				return true;
			} else {
				return false;
			}
		}

		function getSlots() {
			$query = $this->db->get('slot');
			return $query->result_array();
		}

		function getSlotById($id) {
			$this->db->where('id',$id);
			$query = $this->db->get('slot');
			return $query->row();
		}
	}

?>
