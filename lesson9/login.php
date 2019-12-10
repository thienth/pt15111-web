<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="post-login.php" method="post">
		<?php if (isset($_GET['msg'])): ?>
			<h4 style="color: red"><?php echo $_GET['msg'] ?></h4>
		<?php endif ?>
		<div>
			Email: <input type="text" name="email" value="" placeholder="">
			<?php if (isset($_GET['emailErr'])): ?>
				<span style="color: red"><?php echo $_GET['emailErr'] ?></span>
			<?php endif ?>
		</div>
		<div>
			Password: <input type="password" name="password" value="" placeholder="">
			<?php if (isset($_GET['pwdErr'])): ?>
				<span style="color: red"><?php echo $_GET['pwdErr'] ?></span>
			<?php endif ?>
		</div>
		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</html>