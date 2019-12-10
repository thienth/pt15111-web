<?php 
session_start();
// xóa bỏ tài khoản đang đăng nhập
unset($_SESSION['AUTH']);

// lấy email và password từ form login gửi lên
$formEmail = $_POST['email'];
$formPassword = $_POST['password'];

// thực hiện validate dữ liệu
$emailErr = "";
$pwdErr = "";

// kiểm tra rỗng
if(strlen($formEmail) == 0){
	$emailErr = "Vui lòng nhập email";
}

// số lượng ký tự phải >= 6
if($emailErr == "" && strlen($formEmail) < 6){
	$emailErr = "Không đúng định dạng email";
}

// chỉ cho phép có 1 ký tự @
$countSpecialChar = 0;
for($i = 0; $i < strlen($formEmail); $i++){
	if($formEmail[$i] == "@"){
		$countSpecialChar ++;
	}
}

if($emailErr == "" && $countSpecialChar != 1){
	$emailErr = "Không đúng định dạng email (chỉ có 1 ký tự @)";
}


if(strlen($formPassword) == 0){
	$pwdErr = "Vui lòng nhập mật khẩu";
}

if($emailErr != "" || $pwdErr != ""){
	header("location: login.php?emailErr=$emailErr&pwdErr=$pwdErr");
	die;
}

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

if($user === false){
	header('location: login.php?msg=Sai thông tin tài khoản/mật khẩu');	
	die;
}

$_SESSION['AUTH'] = $user;
// điều hướng về trang dashboard
header('location: dashboard.php');


 ?>