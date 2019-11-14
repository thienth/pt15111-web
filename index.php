<form  method="get"  >
	Tên: <input type="text" name="ten">
	<br>
	Tuổi: <input type="number" name="tuoi">
	<br>
	Địa chỉ: <input type="text" name="address">
	<br>
	Quê quán: <input type="text" name="hometown">
	<br>
	Tình trạng hôn nhân: <select name="married" >
							<option value="1">Độc thân</option>
							<option value="2">Đã kết hôn</option>
							<option value="3">Đã bỏ vợ</option>
						</select>
	<br>
	Giới tính: 
		<input type="radio" name="gender" value="1"> Nam <br>
		<input type="radio" name="gender" value="2"> Nữ <br>
		<input type="radio" name="gender" value="3"> Khác
	<br>
	Ngày sinh: <input type="date" name="birthdate">
	<br>
	<button type="submit">Show</button>
</form>
<?php

	// Magic variable (biến)
	$name = $_GET['ten']; 
	$age = $_GET['tuoi']; 
	$address = $_GET['address']; 
	$hometown = $_GET['hometown']; 
	$married = $_GET['married']; 
	$gender = $_GET['gender']; 
	$birthdate = $_GET['birthdate']; 


	var_dump($name, $age, $address, $hometown, $married, $gender, $birthdate);

 ?>