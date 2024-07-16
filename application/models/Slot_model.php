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

	// function checkSlotLibre($dateDebut, $idService)
	// {

	// 	$slots = $this->getSlots();

	// 	foreach ($slots  as $slot) {
	// 		$query = $this->db->query($this->dynamicQuery($slot['id'], $dateDebut, $idService));
	// 		if ($query->num_rows() == 1) {
	// 			return $query->result_array();
	// 		}
	// 	}
	// 	return null;
	// }

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


	function queryDynamic($date_heure ,$idService) {
		$to_check = (new DateTime($date_heure))->format('Y-m-d');
		$fin = $this->searchDateFin($date_heure, $idService)->format('Y-m-d H:i:s');
		$query = $this->db->query('select * from reservation');
			if ($query->num_rows() == 0) {
				return 1;
			}
		$sql = 'CREATE OR REPLACE VIEW v_slot_indispo AS
		SELECT id_slot, MAX(date_heure_fin) AS fin
		FROM reservation
		WHERE (date_heure_debut <=\''. $to_check . '\' AND date_heure_fin >= \'' . $to_check . '\' )
		OR (date_heure_debut <=\''. $fin . '\' AND date_heure_fin >= \''. $fin . '\')
		GROUP BY id_slot
		ORDER BY fin ASC';
		$this->db->query($sql);
		$query = $this->db->query('SELECT id FROM slot LEFT JOIN v_slot_indispo si on slot.id = si.id_slot WHERE si.fin is NULL LIMIT 1');
		$result = $query->row_array();
		if ($result == null) {
			return -1;
		
		}

		return $result['id'];
	}
}
