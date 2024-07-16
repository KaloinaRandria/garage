<?php
class Reservation_model extends CI_Model
{
	function getReservations()
	{
		$query = $this->db->get('reservation');
		return $query->result(); // Ensure it returns objects
	}

	function getReservationBySlots($idSlots)
	{
		$this->db->where('id_slot', $idSlots);
		$query = $this->db->get('reservation');
		return $query->result(); // Ensure it returns an array of objects
	}

	function getWhereReservation($condition)
	{
		$query = $this->db->get_where('reservation', $condition);
		return $query->result();
	}

	function addReservation($data)
	{
		$this->db->insert('reservation', $data);
		return $this->db->insert_id();
	}

	function getPaiementByIdResa($idReservation) {
		$this->db->where('id_reservation', $idReservation);
		$query = $this->db->get('paiement');
		return $query->row(); 
	}
	
}
