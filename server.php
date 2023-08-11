<?php
$req = $_REQUEST["req"];
$target = $_REQUEST["target"];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bodaping";
	
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		if($req=="all"){
			$values = array();	
			$sql = "SELECT * FROM `ping`";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
				array_push($values,$row["myping"]);		
			}
			//print_r($values);
			echo json_encode($values);
		}
		if($req=="specific"){
			
			$sql = "SELECT * FROM `ping` where name = '".$target."'";
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
		
	$conn->close();	
?>