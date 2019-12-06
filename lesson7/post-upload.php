<?php 
$file = $_FILES['avatar'];
$filename = 'uploads/' . uniqid() . "-" . $file['name'];
move_uploaded_file($file['tmp_name'], $filename);

 ?>

 <img src="http://localhost/pt15111-web/lesson7/<?php echo $filename ?>" width="250">