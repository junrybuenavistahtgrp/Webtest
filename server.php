<?php
$req = $_REQUEST["req"];
$target = $_REQUEST["target"];

		//$servername = "0.tcp.ap.ngrok.io:12873";
		//$username = "root";
		//$password = "";
		//$dbname = "bodaping";

		$today= date("Y-m-d");
		
		require_once('db_connect.php');
	
		//$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		if($req=="all"){
			$values = array();	
			$sql = "SELECT * FROM `ping`";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
				array_push($values,array($row["name"],$row["myping"]));		
			}
			//print_r($values);
			echo json_encode($values);
		}
		if($req=="specific"){
			
			$sql = "SELECT * FROM `ping` where name = '".$target."' AND updated='".$today."'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {													
				echo $row["myping"];	
			}
		}
		
		if($req=="count"){
			
			$sql = "SELECT COUNT(name) AS countname FROM ping";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {													
				echo $row["countname"];	
			}
		}
		
		if($req=="status"){
			
			$sql = "SELECT * FROM `ping` where name = '".$target."' AND updated='".$today."'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {													
				echo $row["status"];	
			}
		}
		
		
		
		
	
?>