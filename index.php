<!DOCTYPE html>
<html>
<head>
	<title>SimpleTODO</title>
</head>
<body>
	<a href="index.php">SimpleTODO</a>
	<form method="POST" action="login.php">

		<label for="login_username">Username:</label>
		<input type="text" id="login_username" name="login_username" value='nikko'/>

		<label for="login_password">Password:</label>
		<input type="password" id="login_password" name="login_password" value='test1234'/>
		<input type= "radio" name="action" value="read">Read</input>
		<input type= "radio" name="action" value="create">Create</input>
		<input type = "radio" name = "action" value = "update">Update</input>
		<input type = "radio" name = "action" value = "delete">Delete</input>

		<button type="submit" name="login_submit">Login or Register</button>

	</form>
</div>
</body>
</html>