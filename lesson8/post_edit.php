<?php 
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header('location: index.php');
	die;
}

$id = $_GET['id'];
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$file = $_FILES['avatar'];

$updateUserQuery = "update users
					set 
						email = '$email',
						full_name = '$full_name',
						gender = $gender,

						address = '$address'";
if($file['size'] > 0){
	$filename = "uploads/" . uniqid() . "-" . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
	$updateUserQuery .= ", avatar = '$filename'";
}

$updateUserQuery .= " where id = $id";

$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);

$stmt = $conn->prepare($updateUserQuery);

$stmt->execute();
header('location: index.php');

 ?>