<?php
$ping = $_REQUEST["ping"];
$status = $_REQUEST["status"];
$mac = $_REQUEST["mac"];
$today= date("Y-m-d");
$datetime = new DateTime( "now", new DateTimeZone( "+08:00" ) );

	$myfile = fopen("ping/".$mac.".txt", "w") or die("Unable to open file!");
	fwrite($myfile,$ping."\n");
	fwrite($myfile,$status."\n");
	fwrite($myfile,$today."YY".$datetime->format('H:i'));
	fclose($myfile);

?>