<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
	<form method="POST" action="login.php">
		<label>Title</label>		
		<input type = "text" name = "title" value = "Title" /></br>
		<label>Description</label>
		<textarea name = "description" value = "Description"></textarea></br>
		<label>Due_Date</label>
		<input type="date" name="due_date">
		<input type= "radio" name = "is_done" value ="1">Is Done</input></br>
		<input type = "radio" name = "is_done" value = "0">Isnot Done</input></br>

		<button type="submit" name="create">create</button>
	</form>
</body>
</html>
