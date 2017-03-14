<?php
error_reporting(-1);
ini_set('display_errors',1);
session_start();

if(isset($_POST['login_username']))
{
	$_SESSION['username'] = $_POST['login_username'];
	$_SESSION['userpass'] = $_POST['login_password'];
	header('Location: todo.php?action=read');
}
//$_SESSION['default'] = 'read';
//$_SESSION['action'] = 'read';
//if($_GET['a'] != null)
//	$_SESSION['action'] = $_GET['a'];
$data = array();
if(isset($_POST['title']))
{
	//echo "in new create section";
	$data = array(
		'title'=>$_POST['title'],
		'description'=>$_POST['description'],
		'due_date'=>$_POST['due_date'],
		'is_done'=>$_POST['is_done']
		);
	$data= json_encode($data);
	$data = serialize($data);
	//print_r($data);
	header("Location: todo.php?action=create&create={$data}");
}
exit();
?>