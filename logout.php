<?php
session_start();

// Đặt biến logged_in về false
$_SESSION['logged_in'] = false;

// Chuyển hướng về trang index.html
header("Location: index.html");
exit();
?>