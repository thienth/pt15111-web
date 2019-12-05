<?php 
// kiểm tra request người dùng đang truy cập là loại nào
// $_SERVER['REQUEST_METHOD']
if($_SERVER['REQUEST_METHOD'] != "POST"){
	echo "Bạn đang thực hiện truy cập trái phép!!!";
	die;
}

$email = $_POST['email'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$insertUserQuery = "insert into users 
						(email, 
						password, 
						full_name, 

						avatar, 
						gender, 
						address)
					values 
						('$email', 
						'$password', 
						'$full_name', 

						null, 
						$gender, 
						'$address');";

// var_dump($insertUserQuery);die;

// tạo kết nối csdl
$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);
// Nạp câu sql vào kết nối
$stmt = $conn->prepare($insertUserQuery);
// thực thi câu sql với csdl
$stmt->execute();

echo "Thêm tài khoản thành công!";





 ?>