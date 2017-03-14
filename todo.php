<?php

ini_set('display_errors',1);
error_reporting(-1);

session_start();
include_once ('Apicaller.php');
$apicaller = new ApiCaller('APPOO1', '1234','http://localhost/simpletodo_api/');

$common_info = array(
	'controller'=>'todo',
	'action'=>$_GET['action'],
	'username'=>$_SESSION['username'],
	'userpass'=>$_SESSION['userpass']
	//'default'=>'read'
	);
//print_r($common_info);
if($_GET['action'] == "create")
{
	//echo "in create section";
	$data = unserialize($_GET['create']);
	$data = json_decode($data);
	//print_r($data);
	$create_info = array(
		'todo_id'=>'',
		'title'=>$data->title,
		'description'=>$data->description,
		'due_date'=>$data->due_date,
		'is_done'=>$data->is_done);
	$common_info = array_merge($common_info,$create_info);
}
if(isset($_GET['a']))
{
	$common_info['id'] = $_GET['a'];
	//echo $common_info['action'];
}
echo "</br></br>";
$todo_items = $apicaller->sendRequest($common_info);
var_dump($todo_items);
?>