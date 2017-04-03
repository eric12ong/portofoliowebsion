
<?php
	function getHari($var){
		if($var == 'Sun'){return 'Minggu';}
		if($var == 'Mon'){return 'Senin';}
		if($var == 'Tue'){return 'Selasa';}
		if($var == 'Wed'){return 'Rabu';}
		if($var == 'Thu'){return 'Kamis';}
		if($var == 'Fri'){return 'Jumat';}
		if($var == 'Sat'){return 'Sabtu';}
	}
	function getBulan($var){
		if($var == '01'){return 'Januari';}
		if($var == '02'){return 'Februari';}
		if($var == '03'){return 'Maret';}
		if($var == '04'){return 'April';}
		if($var == '05'){return 'Mei';}
		if($var == '06'){return 'Juni';}
		if($var == '07'){return 'Juli';}
		if($var == '08'){return 'Agustus';}
		if($var == '09'){return 'September';}
		if($var == '10'){return 'Oktober';}
		if($var == '11'){return 'Nopember';}
		if($var == '12'){return 'Desember';}
	}
	function getArrayofMenu($data){
		$row = array(array());
		$i = 0;
		foreach($data as $datax){
			if($datax->menu_parent == 0){ //menu parent
				$row[$i][0] = $datax;
				$i++;
			}else{
				if(searchMenuParent($datax->menu_parent,$row) != -1){ //parent dari sub menu ketemu
					$row[searchMenuParent($datax->menu_parent,$row)][sizeof($row[searchMenuParent($datax->menu_parent,$row)])] = $datax;
				}
			}
		}
		return $row;
	}
	function searchMenuParent($value, $array){
		for($i=0;$i<sizeof($array);$i++){
			if($value == $array[$i][0]->menu_rank){
				return $i;
			}
		}
		return -1;
	}
	
?>