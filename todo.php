<?php

ini_set('display_errors',1);
error_reporting(-1);

session_start();

//print_r($_SESSION);
include_once ('Apicaller.php');
$apicaller = new ApiCaller('APPOO1', '1234','http://localhost/simpletodo_api/');
//$todo_items='';
$common_info = array(
	'controller'=>'todo',
	'action'=>$_SESSION['action'],
	'username'=>$_SESSION['username'],
	'userpass'=>$_SESSION['userpass']
	);
if($_SESSION['action'] == "create")
{
	$create_info = array(
		'todo_id'=>'',
		'title'=>'second',
		'description'=>'second in second',
		'due_date'=>'2018',
		'is_done'=>false);

	$common_info = array_merge($common_info,$create_info);
}
//echo "from client side\n</br>";
//print_r($common_info);
echo "</br></br>";
$todo_items = $apicaller->sendRequest($common_info);
//var_dump($todo_items);
?>