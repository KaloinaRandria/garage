<?php

	class SuppData_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		function deleteData($table_name) {
			if($this->db->table_exists($table_name)) {
				$this->db->truncate($table_name);

				return true;
			} else {
				return false;
			}
		}

		function deleteAll() {
			$tables = $this->db->list_tables();

            foreach ($tables as $table_name) {
				if($table_name != 'administrateur' && $table_name != 'slot' && $table_name != 'v_slot_indispo') {
					$this->deleteData($table_name);
				}
            }
	
		}
		
	}
?>
