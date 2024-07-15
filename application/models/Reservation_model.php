<?php
class Reservation_model extends CI_Model {
	function getReservations() {
		$query = $this->db->get('reservation');
		return $query->result(); // Ensure it returns objects
	}

	function getReservationBySlots($idSlots) {
		$this->db->where('id_slot', $idSlots);
		$query = $this->db->get('reservation');
		return $query->result(); // Ensure it returns an array of objects
	}
}
?>
