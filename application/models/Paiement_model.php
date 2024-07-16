<?php
	class Paiement_model extends CI_Model {
		function insertPaiement($data) {
			$this->db->insert('paiement', $data);
			if ($this->db->affected_rows() >= 0) {
                return true;
            } else {
                return false;
            }
		}

		function getPaiements() {
			$query = $this->db->get();
			return $query->result_array();
		}

		function isPayer($idReservation) {
			$this->db->where('id_reservation', $idReservation);
			$query = $this->db->get('reservation');
			if($query->num_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>
