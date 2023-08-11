<?php
$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bodaping";
	
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	
			$sql = "SELECT COUNT(name) AS countname FROM ping";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
														
				echo $row["countname"];
				
				
			}
?>