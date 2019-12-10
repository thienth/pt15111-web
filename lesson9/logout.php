<?php 
session_start();
unset($_SESSION['AUTH']);
header('location: index.php');

 ?>