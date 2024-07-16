<?php
	function readData($name) {
		$filename = $name;
		$tabData = array();
		$handle = fopen($filename, "r");
		if ($handle) {
			while (($line = fgets($handle))!== false) {
                $tabData[] = explode(',', $line);
            }
            fclose($handle);
		} else {
			echo "Error opening file: $filename";
		}
		return $tabData;
	}

	function convertDate($date) {
		$date = trim($date);
		if(empty($date) || $date == null) {
			return 'null';
		}
		$data = explode('/',$date);
		return "'". $data[2] . '-' . $data[1]. '-'.$data[0]."'";
	}

	function insertTravaux($name , $connexion) {
		
	}
	
?>
