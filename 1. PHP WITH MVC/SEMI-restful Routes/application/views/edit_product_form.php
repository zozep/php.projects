<html>
<head>
	<title>edit product</title>
</head>
<body>
	<form method="post" action="<?= base_url("products/update")?>" <br>
		<label>Name:</label> <input name="name"><br>
		<label> Description:</label> <input name="description"><br>
		<label> Price:</label> <input name="price"><br>
		<br>
	</form>
		<input type="submit" value="Update">
	<a href="/products">Go back</a>
</body>
</html>