<?php 
if($_SERVER['REQUEST_METHOD'] != "GET"){
	header('location: index.php');
	die;
}

$id = $_GET['id'];
$deleteUserQuery = "delete from users where id = $id";

$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);

$stmt = $conn->prepare($deleteUserQuery);

$stmt->execute();
header('location: index.php');
die;
 ?>