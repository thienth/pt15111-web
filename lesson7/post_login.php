<?php 
$users = [
	[
		"id" => 1,
		"username" => "admin",
		"full_name" => "Nguyễn Hà Đông",
		"password" => "123456"
	],
	[
		"id" => 2,
		"username" => "sun_lord",
		"full_name" => "Phí Văn Trí",
		"password" => "123123"
	],
	[
		"id" => 3,
		"username" => "zimo",
		"full_name" => "Phan Ngọc Thiện",
		"password" => "1234123"
	]	
];

// lấy dữ liệu từ form gửi lên
// MAGIC variable - biến kỳ diệu $_GET, $_POST, $_SESSION, $_SERVER,...
$formUsername = $_GET['username'];
$formPassword = $_GET['password'];
// var_dump($username, $password);

// -- Kiểm tra xem với tài khoản/mật khẩu đc nhập vào từ form thì có đăng nhập thành công hay không, 
// các tài khoản có trong hệ thống chính là biến $users
// Nếu đăng nhập thành công thì hiển thị "Login Success!"
// Nếu đăng nhập thất bại thì hiển thị "Login fail"
// kiểm tra trong mảng có phần tử nào có username & password trùng với thông tin gửi lên từ form

// chạy qua từng phần tử trong mảng $users - for() - foreach()
/*for($i = 0; $i < count($users); $i++){
	$item = $users[$i];
	echo $item['username'] . "-" . $item['password']. "<br>";

	if($formUsername == $item['username']
		&& $formPassword == $item['password']){
		echo "Login Success!";
		break;
	}
}

if($i == count($users)){
	echo "Login fail";
}*/

$loginSuccess = false;
foreach ($users as $key => $value) {
	if($formUsername == $value['username']
		&& $formPassword == $value['password']){
		$loginSuccess = true;
		echo "Login Success!";
		break;
	}
}
if($loginSuccess == false){
	echo "Login fail";
}











 ?>