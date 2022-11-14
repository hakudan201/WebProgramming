<html>

<head>
	<title>Lab5</title>
</head>

<body>
	<form action="CreatePage.php" method="post">
		<lable>Tiêu đề: </lable><br>
		<input type="text" name="title" cols="50" required>
		<br>
		<lable>Nội dung: </lable><br>
		<textarea type="text" name="content" rows="4" cols="50" required></textarea>
		<br>
		<label>Năm: </label><br>
		<input type="number" name="year" min="1989" max="2022" required>
		<br>
		<label>Tác giả: </label><br>
		<input type="text" name="author" cols="50" required>
		<br><br>
		<input type="submit" name="submit" required>
	</form>
</body>

</html>
