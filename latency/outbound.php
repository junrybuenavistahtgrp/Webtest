<?php

$mac = $_REQUEST["mac"];
	$values = array();
	$lines = file('ping/'.$mac.'.txt');
	$count = 0;
	foreach($lines as $line) {
		array_push($values,$line);
	}
	echo json_encode($values);
?>