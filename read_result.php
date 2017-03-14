<!DOCTYPE html>
<html>
<head>
	<title>SimpleTODO</title>
</head>
<body>
	<?php 
	echo '<a href= "create_form.php">create</a>';
	$data = json_decode($_GET['data']);
	//print_r($data)."</br></br>";
	foreach($data as $key=>$value)
	{
		 $d = unserialize($value);
		 foreach($d as $k=>$v)
		 {
		 	echo"$k : $v </br>";
		 	if($k == "todo_id")
		 	{
		 		echo '<a href="todo.php?action=update&a='.$v.'">update</a>|<a href = "">delete</a></br>';
		 	}
		 }
	} 
	?>
</body>
</html>
