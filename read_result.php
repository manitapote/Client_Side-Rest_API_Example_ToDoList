<!DOCTYPE html>
<html>
<head>
	<title>SimpleTODO</title>
</head>
<body>
	<?php 

	$data = json_decode($_GET['data']);
	//print_r($data)."</br></br>";
	foreach($data as $key=>$value)
	{
		 $d = unserialize($value);
		 foreach($d as $k=>$v)
		 {
		 	echo"$k : $v </br>";
		 }
	} 
	?>
</body>
</html>
