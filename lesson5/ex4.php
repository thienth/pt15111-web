<?php 
$name = $_GET['name'];

echo strlen($name); // lấy số lượng các ký tự của chuỗi
echo "<br>";
for ($i=0; $i < strlen($name); $i++) { 
	echo $name[$i]. "<br>";
}


 ?>