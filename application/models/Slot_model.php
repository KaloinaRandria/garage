<?php
class Slot_model extends CI_Model
{

	function insertSlot($data)
	{
		$this->db->insert('slot', $data);
		if ($this->db->affected_rows() >= 0) {
			return true;
		} else {
			return false;
		}
	}

	function getSlots()
	{
		$query = $this->db->get('slot');
		return $query->result_array();
	}

	function getSlotById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('slot');
		return $query->row();
	}

	function checkSlotLibre($dateDebut, $idService)
	{

		$slots = $this->getSlots();

		foreach ($slots  as $slot) {
			$query = $this->db->query($this->dynamicQuery($slot['id'], $dateDebut, $idService));
			if ($query->num_rows() == 1) {
				return $query->result_array();
			}
		}
		return null;
	}

	function searchDateFin($dateDebut, $idService)
	{
		$this->load->model('service_model'); // Ensure Service_model is loaded
		$service = $this->service_model->getServiceById($idService);

		$date = new DateTime($dateDebut);
		
		// Assume $service->duree is in format "H:i"
		list($hours, $minutes) = explode(':', $service->duree);
		$interval = new DateInterval('PT' . $hours . 'H' . $minutes . 'M');

		$dateFin = $date->add($interval);

		$temp = $date->format('H:i:s');
		$evening_start = new DateTime('18:00:00');
		$night_end = new DateTime('23:59:59');
		$morning_start = new DateTime('00:00:00');
		$morning_end = new DateTime('08:00:00');

		if (($temp > $evening_start->format('H:i:s') && $temp < $night_end->format('H:i:s')) ||
			($temp > $morning_start->format('H:i:s') && $temp < $morning_end->format('H:i:s'))
		) {
			$dateFin = $dateFin->add(new DateInterval('PT14H'));
		}

		return $dateFin;
	}

	function dynamicQuery($idSlots, $dateDebut, $idService)
    {
        $this->load->model('reservation_model');
        $sql = "SELECT id_slot FROM reservation WHERE 1=1 AND DATE(date_heure_debut) = '".$dateDebut->format('y-m-d')."'";
        $reservations = $this->reservation_model->getReservationBySlots($idSlots);
        $dateFin = $this->searchDateFin($dateDebut, $idService);
        
        foreach ($reservations as $reservation) {
            $sql .= " AND ('" . $dateDebut . "' NOT BETWEEN '" . $reservation->date_heure_debut . "' AND '" . $reservation->date_heure_fin . "')";
            $sql .= " AND ('" . $dateFin->format('Y-m-d H:i:s') . "' NOT BETWEEN '" . $reservation->date_heure_debut . "' AND '" . $reservation->date_heure_fin . "')";
			$sql .= " AND ('" . $reservation->date_heure_debut . "' NOT BETWEEN '" . $dateDebut . "' AND '" . $dateFin->format('Y-m-d H:i:s') . "')";
			$sql .= " AND ('" . $reservation->date_heure_fin . "' NOT BETWEEN '" . $dateDebut . "' AND '" . $dateFin->format('Y-m-d H:i:s') . "')";

        }
        
        $sql .= " LIMIT 1";
        return $sql;
    }
}
