<?php
//B4-2E-99-07-4E-47
	error_reporting(0);
	$macs = json_decode($_REQUEST["mac"]);
	$values = array();
	//print_r($macs);
	
	foreach($macs as $mac){
		$lines = file('ping/'.$mac[1].'.txt');
			
		if($lines!=false){
			array_push($lines,$mac[0]);
			array_push($values,$lines);
		}
	}
	echo json_encode($values);
?>