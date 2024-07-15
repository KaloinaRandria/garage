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

		function checkSlotLibre($dateDebut , $dateFin) {
			
		}

		function searchDateFin($dateDebut ,$idService) {
			$this->load->model('Service_model');
			$service = $this->service_model->getServiceById($idService);
			$date = new DateTime($dateDebut);
			$interval = new DateInterval('PT'.$service->duree);
			$dateFin = $date->add($interval);
			
			$temp = $date->format('H:i:s');
			if (($temp > new DateTime('18:00:00') && $temp < new DateTime('23:59:00')) ||
				($temp > new DateTime('00:00:00') && $temp < new DateTime('08:00:00'))) {
				$dateFin = $dateFin->add(new DateInterval('14:00:00')); 
			}

			return $dateFin;
		}
	}

?>
