<?php
error_reporting(E_All);
ini_set('display_errors',1);

session_start();

$_SESSION['username'] = $_POST['login_username'];
$_SESSION['userpass'] = $_POST['login_password'];
$_SESSION['action'] = $_POST['action'];

header('Location: todo.php');
exit();
?>