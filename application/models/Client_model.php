<?php
class Client_model extends CI_Model
{

	function checkLogin($numero, $type)
	{
		$this->db->where('numero', $numero);
		$query = $this->db->get('client');
		if ($query->num_rows() == 1) {
			$client = $query->row();
			if ($client->id_type == $type) {
				return true;
			} else {
				// $this->session->set_flashdata('error', 'Type de Voiture non conforme au numero d immatriculation');
				return false;
			}
		} else {
			$this->insertClient($numero, $type);
			return true;
		}
	}

	function insertClient($numero, $type)
	{
		$data = array(
			'numero' => $numero,
			'id_type' => $type,
		);
		$this->db->insert('client', $data);
		if ($this->db->affected_rows() >= 0) {
			return true;
		} else {
			return false;
		}
	}

	function getClients()
	{
		$query = $this->db->get('client');
		return $query->result_array();
	}
}
