<?php
	
	function getArray($search){
	include 'plug.php';	
	$data = array();
	$query = "SELECT origin FROM tag WHERE slug LIKE '%".$search."%'";
	$resultado = $plug->query($query);
	while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
		$data[] = $row;
	}		
	$plug->close();
		
	return $data;
}

?>