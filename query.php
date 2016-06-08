<?php
$servername="localhost";
$username="root";
$password="";
$dbname="b7_18237466_mananqueryinfo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$msg=$_POST['msg'];
 if(isset($firstname) && isset($email) && isset($msg) )
    {
    	$queryInsert = "INSERT INTO querytable VALUES('','$firstname','$email','$msg')";
		$queryInsertResult = $conn->query($queryInsert);
    }

header('Location:index.html');
?>

