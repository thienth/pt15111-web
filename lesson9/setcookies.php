<?php 
// khi trả về trình duyệt thì sẽ tạo ra 1 cookie ở trình duyệt theo giá trị đc truyền vào trong các tham số
// 1. Tên cookie (key)
// 2. Giá trị của cookie (value)
// 3. Thời gian cookie tồn tại
// 4. path (đường dẫn đc sử dụng để khai thác cookie)
$key = "your_name";
$value = "thienth";
$time = time() + 60*60;
$path = "/";
setcookie($key, $value, $time, $path);

echo "set cookies thành công!";
 ?>
 <a href="getcookie.php" title="">Lấy giá trị của cookie ra ngoài</a>