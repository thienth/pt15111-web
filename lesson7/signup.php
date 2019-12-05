<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="post_signup.php" method="post" >
		<div>
			Email: <input type="email" name="email"/>
		</div>
		<div>
			Password: <input type="password" name="password"/>
		</div>
		<div>
			Full name: <input type="text" name="full_name"/>
		</div>
		<div>
			Avatar: <input type="file" name="avatar"/>
		</div>
		<div>
			Gender: 
			<select name="gender">
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
		</div>
		<div>
			Address: <input type="text" name="address"/>
		</div>
		<div>
			<button type="submit">Save</button>
		</div>
	</form>

</body>
</html>