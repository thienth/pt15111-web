<?php 
if($_SERVER['REQUEST_METHOD'] != "GET"){
	header('location: index.php');die;
}
$id = $_GET['id'];
$getUserByIdQuery = "select * from users where id = $id";

$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);

$stmt = $conn->prepare($getUserByIdQuery);

$stmt->execute();
$user = $stmt->fetch();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="post_edit.php?id=<?php echo $user['id'] ?>" method="post" enctype="multipart/form-data">
		<div>
			Email: <input type="email" value="<?= $user['email'] ?>" name="email"/>
		</div>
		<div>
			Full name: <input type="text" value="<?= $user['full_name'] ?>" name="full_name"/>
		</div>
		<div>
			<img src="<?php echo $user['avatar'] ?>" width="100">
		</div>
		<div>
			Avatar: <input type="file" name="avatar"/>
		</div>
		<div>
			Gender: 
			<select name="gender" >
				<option <?php if($user['gender']== 1) echo "selected" ?> value="1">Male</option>
				<option <?php if($user['gender']== 2) echo "selected" ?> value="2">Female</option>
				<option <?php if($user['gender']== 3) echo "selected" ?> value="3">Other</option>
			</select>
		</div>
		<div>
			Address: <input type="text" value="<?php echo $user['address'] ?>" name="address"/>
		</div>
		<div>
			<button type="submit">Save</button>
		</div>
	</form>

</body>
</html>