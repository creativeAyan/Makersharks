<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$balance = $_POST['balance'];

	$conn = new mysqli('localhost','root','','ayan');
	if($conn->connect_error){
		die('Connection failed : '.$conn->connec_error);
	}
	else{
		$stmt = $conn->prepare("insert into register(firstname, lastname, phone, balance)values(?,?,?,?)");
		$stmt->bind_param("ssii",$firstname,$lastname,$phone,$balance);
		$stmt->execute();
		echo"registration Succesfull...";
		$stmt->close();
		$conn->close();
	}
?>