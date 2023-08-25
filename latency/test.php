<?php
$datetime = new DateTime( "now", new DateTimeZone( "+08:00" ) );

    echo $datetime->format('H:i');
	
?>