<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wajid Pedi</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<style>

	
	
	
	</style>
</head>
<body>
	<div class="container">
	<header>
    <div class="primary_header">
      <a href="ayan.html"><h1 class="title"> Wajid Pedi Account</h1></a>
    </div>
    <nav class="secondary_header" id="menu">
      <div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Master 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		 <i class="fa fa-caret-down"></i>
      <a href="dukaandar.html">Add Dukandar</a>
      <a href="#">Add Bepari</a>
      <a href="#">Add Gawal</a>
    </div>
	  
  </div> 
	<a href="balance.php">Balance</a>
  <a href="#news">Reports</a>
<a href="search.php">Search</a>
  <a href="#amount">Amount</a>
</div>
		
    </nav>
  </header>
	<table>
		<tr>
			<th>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Firstname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Lastname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		</tr>
		<?php
		$conn = new mysqli('localhost','root','','ayan');
		if($conn->connect_error){
			die('Connection failed : '.$conn->connec_error);
		}
		
		$sql = "SELECT id, firstname, lastname, phone, balance from register";
		$result = $conn-> query($sql);
		if ($result-> num_rows > 0){
			while($row= $result-> fetch_assoc()){
				echo "<tr><td>". $row["id"] ."</td><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["phone"] ."</td><td>". $row["balance"] ."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
			$conn->close();
		
		?>
		</div>
</body>
</html>