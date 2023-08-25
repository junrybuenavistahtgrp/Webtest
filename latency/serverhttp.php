<?php
$ping = $_REQUEST["ping"];
$status = $_REQUEST["status"];
$mac = $_REQUEST["mac"];
$today= date("Y-m-d");

	$myfile = fopen("ping/".$mac.".txt", "w") or die("Unable to open file!");
	fwrite($myfile,$ping."\n");
	fwrite($myfile,$status."\n");
	fwrite($myfile,$today."\n");
	fwrite($myfile,date("h:i"));
	fclose($myfile);

?>