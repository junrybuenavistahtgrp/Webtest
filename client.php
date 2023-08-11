<?php
	$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "bodaping";
							
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
							}
								
										
											$sql = "SELECT * FROM `ping` ";
											$result = $conn->query($sql);	
											while($row = $result->fetch_assoc()) {
														
														echo $row["name"];
														echo "<br>";
														echo $row["myping"];
												}
												
								
					
		
        $num = 1;
        echo $num;
        echo "<input type='button' value='Click' onclick='readmore()' />";
   		echo "<script> function readmore() { document.write('";
        $num = 2;
        echo $num;
        echo "'); } </script>";
		
		$global_variable = "Hello, world!";

function modify_global_variable() {
    global $global_variable;
    $global_variable = "Goodbye, world!";
}

echo $global_variable . "<br>"; 

modify_global_variable();

echo $global_variable; 
?>
