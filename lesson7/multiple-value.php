<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="multiple-value_submit.php" method="get" >
	<input type="checkbox" name="favorite[]" value="1"> Bóng đá <br>
	<input type="checkbox" name="favorite[]" value="2"> Bóng rổ <br>
	<input type="checkbox" name="favorite[]" value="3"> Bóng chuyền <br>
	<input type="checkbox" name="favorite[]" value="4"> Bóng bàn <br>
	<input type="checkbox" name="favorite[]" value="5"> Bóng râm <br>
	<select name="city[]" multiple>
		<option value="hn">Hà Nội</option>
		<option value="nd">Nam Định</option>}
		<option value="nb">Ninh Bình</option>}
		<option value="hd">Hải Dương</option>}
		<option value="ct">Cần Thơ</option>}
	</select>
	<button type="submit">Submit</button>
</form>
</body>
</html>