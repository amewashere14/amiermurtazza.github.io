<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	$purpose = $_POST['purpose'];

$conn = new mysqli('localhost','root','','contact_database');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into form_feedback(Name,Email,Message,purpose) values( ?, ?, ?, ?)");
	$stmt ->bind_param("ssss", $Name, $Email, $Message, $purpose);
	$stmt ->execute();
	echo "registration successfully...";
	$stmt ->close();
	$conn ->close();
}
?>