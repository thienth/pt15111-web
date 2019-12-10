<?php 
session_start();
// chỉ những ai có tài khoản và đã đăng nhập thì mới vào đc trang này
if(!isset($_SESSION['AUTH']) || count($_SESSION['AUTH']) == 0){
	header('location: login.php');
	die;
}

// var_dump($_SESSION['AUTH']);

 ?>
<h2>
	Hello, <?php echo $_SESSION['AUTH']['full_name'] ?>, 
	<a href="logout.php" title="">Đăng xuất</a>
</h2>
 <h2>Đăng nhập thành công!!!</h2>