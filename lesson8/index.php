<?php 
// Lấy ra danh sách users từ csdl
$getUserListQuery = "select * from users";

$host = "127.0.0.1";
$dbname = "pt15111";
$dbUsername = "root";
$dbPass = "123456";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);
// Nạp câu sql vào kết nối
$stmt = $conn->prepare($getUserListQuery);
// thực thi câu sql với csdl
$stmt->execute();

// Lấy dữ liệu từ csdl và gán cho 1 biến
$userList = $stmt->fetchAll();
// echo "<pre>";
// var_dump($userList);die;

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<table>
		<tbody>
			<?php foreach ($userList as $user): ?>
			<tr>
				<td><?php echo $user['id'] ?></td>
				<td><?php echo $user['full_name'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td>
					<img src="<?php echo $user['avatar'] ?>" width="150">
				</td>
				<td><?php echo $user['gender'] ?></td>
				<td><?php echo $user['address'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $user['id'] ?>" title="">Edit</a>
					<a href="remove.php?id=<?php echo $user['id'] ?>" title="">Remove</a>
				</td>
			</tr>
			<?php endforeach ?>
			
		</tbody>
		<thead>
			<tr>
				<th>ID</th>
				<th>Full name</th>
				<th>Email</th>
				<th>Avatar</th>
				<th>Gender</th>
				<th>Address</th>
				<th>
					<a href="signup.php" title="">Add Account</a>
				</th>
			</tr>
		</thead>
	</table>



</body>
</html>