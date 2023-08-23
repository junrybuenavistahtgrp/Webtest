

<html>
<?php
		

		
		$servername = "0.tcp.ap.ngrok.io:12347";
		$username = "root";
		$password = "";
		$dbname = "bodaping";
		$today= date("Y-m-d");
		$users=array();
		$conn = new mysqli($servername, $username, $password, $dbname);
		echo "done connect";
		

		function getAll() {
			global $conn;
			$values = array();	
			$sql = "SELECT * FROM `ping`";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {
					array_push($values,array($row["name"],$row["myping"]));		
				}
				
			return json_encode($values);
			 
		}
		
		
		
		function pingJunry(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Junry' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingMelca(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Melca' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingTestComp(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Test Computer' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingMai(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Mai' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingJunessa(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Junessa' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingBeth(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Beth' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingMaj(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Maj' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingDaisy(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Daisy' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingAnn(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Ann' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingRica(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Rica' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingAnin(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Anin' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		function pingChain(){
			global $conn;
			global $today;
			$values = array();
			$sql = "SELECT * FROM `ping` where name = 'Chaine' AND updated='".$today."'";
			$result = $conn->query($sql);	
				while($row = $result->fetch_assoc()) {													
					array_push($values,array($row["status"],$row["myping"]));	
				}
			return json_encode($values);
		}
		
		
		//echo getPing("Junry");
?>	

<head>
	

	<style>
		* {
		  box-sizing: border-box;
		}

		/* Create three equal columns that floats next to each other */
		.column {
		  float: left;
		  width: 33.33%;
		  padding: 10px;
		  height: 300px; /* Should be removed. Only for demonstration */
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
	</style>
	
	<div>
		<center><h1>Mangoi Latency Monitoring</h1></center>
	</div>

	<div class="row" id="div1">
		
	</div>
	<script  type="text/javascript">
		function httpGet(theUrl) {
			let xmlHttpReq = new XMLHttpRequest();
			xmlHttpReq.open("GET", theUrl, false);
			xmlHttpReq.send(null);
			return xmlHttpReq.responseText;
      }
		
		function getPing(target,field) {
			
			
			if(target==="Junry"){
				 user = <?php echo pingJunry();?>;
			}
			else if(target==="Test Computer"){
				 user = <?php echo pingTestComp();?>;
			}
			else if(target==="Melca"){
				 user = <?php echo pingMelca();?>;
			}
			else if(target==="Mai"){
				 user = <?php echo pingMai();?>;
			}
			else if(target==="Junessa"){
				user = <?php echo pingJunessa();?>;
			}
			else if(target==="Beth"){
				 user = <?php echo pingBeth();?>;
			}
			else if(target==="Maj"){
				 user = <?php echo pingMaj();?>;
			}
			else if(target==="Daisy"){
				 user = <?php echo pingDaisy();?>;
			}
			else if(target==="Ann"){
				 user = <?php echo pingAnn();?>;
			}
			else if(target==="Rica"){
				user = <?php echo pingRica();?>;
			}
			else if(target==="Anin"){
				 user = <?php echo pingAnin();?>;
			}
			else if(target==="Chaine"){
				user = <?php echo pingChain();?>;
			}
			
			console.log(user);
			$status = user[0][0];
			$myping = user[0][1];
			document.getElementById(field).innerHTML = $myping;
				if($status==1){
					document.getElementById(field).setAttribute("style", "color:green;");
				}else{
					document.getElementById(field).setAttribute("style", "color:red;");
				}		
		}
		
		
		
		
		function buildArea(){
			const users = <?php echo getAll();?>;		
		for (let i = 0; i < users.length; i++) {
				const newDiv = document.createElement("div"); 
	
				newDiv.setAttribute("class","column");
				
				const para2 = document.createElement("h3");
				const node2 = document.createTextNode(users[i][0]);
				
				const para = document.createElement("textarea");
				const node = document.createTextNode("Loading.");
				para.setAttribute("id", users[i][0]);
				//para.setAttribute("style", "color:red;");
				para.setAttribute("rows", "16");
				para.setAttribute("cols", "60");
				para.setAttribute("style", "resize:none;");
			
				
				
				para.appendChild(node);
				para2.appendChild(node2);
					
				const element = document.getElementById("div1");
		
				const child = document.getElementById("p1");
				
				newDiv.appendChild(para2);
				newDiv.appendChild(para);
				
				const currentDiv = document.getElementById("div1");
				document.body.insertBefore(newDiv, currentDiv);
				
				
				setInterval(function() { getPing(users[i][0],users[i][0])}, 6000);
				
			}
			
			//const delay = ms => new Promise(res => setTimeout(res, ms));
			//const yourFunction = async () => {
				//await delay(100);
				//getPing("specific",users[i][0],users[i][0]);
				//};
			//yourFunction();
		}
	
		buildArea();
		
		

	</script>
	
	
</head>
<body>



</body>
</html>