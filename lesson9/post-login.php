<?php 
session_start();
// xóa bỏ tài khoản đang đăng nhập
unset($_SESSION['AUTH']);

// lấy email và password từ form login gửi lên
$formEmail = $_POST['email'];
$formPassword = $_POST['password'];

$selectUserQuery = "select * 
					from users 
					where email = '$formEmail'
						and password = '$formPassword'";
$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";

$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);
$stmt = $connect->prepare($selectUserQuery);
$stmt->execute();
$user = $stmt->fetch();
// echo "<pre>";
// var_dump($user);die;

if($user === false){
	header('location: login.php?msg=Sai thông tin tài khoản');	
	die;
}

$_SESSION['AUTH'] = $user;
// điều hướng về trang dashboard
header('location: dashboard.php');


 ?>