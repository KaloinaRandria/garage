<?php
	class Reservation_model extends CI_Model {
		function getReservations() {
			$query = $this->db->get('reservation');
			return $query->result_array();
		}

		function getReservationBySlots ($idSlots) {
			$this->db->where('id_slot' , $idSlots);
			$query = $this->db->get('reservation');
			return $query->row();
		}
	}
?>
