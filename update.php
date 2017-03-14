<!DOCTYPE html>
<html>
<head>
	<title>SimpleTODO</title>
</head>
<body>
	<?php 

	$data = json_decode($_GET['data']);
	$data = unserialize($data);
	//print_r($data);
	echo "Todo task id: ".$data['todo_id']."</br>";
	<!-- echo '<form method="POST" action="login.php">'
	?> -->
</body>
</html>
