<?php
class Dashboard_model extends CI_Model
{
	function getChiffreInDay($date)
	{
		
		$formattedDate = (new DateTime($date))->format('Y-m-d');

		
		$sql = "
				 CREATE OR REPLACE VIEW v_chiffre_in_day AS
				 SELECT r.id, r.prix
				 FROM reservation r
				 JOIN paiement p ON r.id = p.id_reservation
				 WHERE DATE(p.date_paiement) = ?
			 ";

		
		$this->db->query($sql, array($formattedDate));

		
		$query = $this->db->query('SELECT SUM(prix) AS total_chiffre FROM v_chiffre_in_day');
		$result = $query->row_array();

		return $result ? $result['total_chiffre'] : 0;
	}

	public function getChiffreNonPayeInDay($date) {
        $formattedDate = (new DateTime($date))->format('Y-m-d');

        $sql = "
            CREATE OR REPLACE VIEW v_chiffre_non_paye_in_day AS
            SELECT r.id, r.prix
            FROM reservation r
            LEFT JOIN paiement p ON r.id = p.id_reservation AND DATE(p.date_paiement) = ?
            WHERE p.id_reservation IS NULL
        ";

        $this->db->query($sql, array($formattedDate));

        $query = $this->db->query('SELECT SUM(prix) AS total_chiffre FROM v_chiffre_non_paye_in_day');
        $result = $query->row_array();

        return $result ? $result['total_chiffre'] : 0;
    }

	public function getTotalPrixByTypePaye($idType) {
        $sql = "
            CREATE OR REPLACE VIEW v_total_prix_by_type_paye AS
            SELECT r.id, r.prix, c.id_type
            FROM reservation r
            JOIN paiement p ON r.id = p.id_reservation
            JOIN client c ON r.id_client = c.id
            WHERE c.id_type = ?
        ";

        $this->db->query($sql, array($idType));

        $query = $this->db->query('SELECT SUM(prix) AS total_prix FROM v_total_prix_by_type_paye');
        $result = $query->row_array();

        return $result ? $result['total_prix'] : 0;
    }
}
