
crypt() // mã hóa chuỗi
<br>
<?php 
	$pass = "123456";
	echo crypt($pass);

 ?>
 <br>
 md5() // mã hóa chuỗi
<br>
<?php 
	$pass = "123456";
	echo md5($pass);

 ?>
<br>
echo() // hiển thị giá trị của biến/biểu thức/kq trả về của 1 hàm
<br>
explode() // chuyển 1 chuỗi thành 1 mảng, theo điều kiện (ký tự)
<pre>
<?php 
	$str = "happy,new,year,2020!";
	$arr = explode(",", $str);
	var_dump($arr);
	
 ?>
<br>
implode() // chuyển 1 mảng về 1 chuỗi
<?php 
	$arr = ['happy', 'new', 'year', '2020!'];
	// => happy-new-year-2020!
	$str2 = implode("-", $arr);
	echo $str2;
 ?>
 <br>
 str_replace() // tìm kiếm và thay thế 1 ký tự bằng 1 ký tự khác
 <?php 
 	$str = "hello Hung, song o Phu My Hung";
 	echo $str . "<br>";
 	// => hello Poly, dep zai
 	$str2 = str_replace("Hung", "Poly", $str);
 	echo $str2;

  ?>
 <br>
 str_repeat() // lặp lại chuỗi truyền vào
 <?php 
 	$str = "hello Hung, song o Phu My Hung";
 	$str2 = str_repeat($str, 3);
 	echo $str2;

  ?>
 <br>
 ltrim()|rtrim()|trim()	<br>
ltrim() // xóa ký tự ở bên trái chuỗi;
<?php 
	$str = ",,,,,,,,,,,,fpt poly,,,,,,,,,";
	// => fpt poly,,,,,,,,,
	$str2 = ltrim($str, ",");
	echo $str2;

 ?>
 <br>
 rtrim() // xóa ký tự ở bên phải chuỗi
<?php 
	$str = ",,,,,,,,,,,,fpt poly,,,,,,,,,";
	// => fpt poly,,,,,,,,,
	$str2 = rtrim($str, ",");
	echo $str2;

 ?>
 <br>
 trim()// xóa các ký tự không mong muốn ở 2 bên chuỗi
 <?php 
	$str = ",,,,,,,,,,,,fpt poly,,,,,,,,,";
	// => fpt poly,,,,,,,,,
	$str2 = trim($str, ",");
	echo $str2;

 ?>
 <br>
htmlentities()		htmlspecialchars()		

join()			

number_format()		str_repeat()		

str_split()		strcasecmp()		strcmp()

stripos()		strlen()		strpos()

strtolower()		strtoupper()		substr()

ucfirst()		ucwords()		wordwrap()