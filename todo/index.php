<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do</title>

		<link href="https://fonts.googleapis.com/css?family=Raleway:400i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
		<link rel="stylesheet" href="main.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="list">
			<h1 class="header">Welcome to your To Do List.</h1>

			<a href="">Click me</a>

			<ul>
				<li><span class="item">Get food</span></li>
				<li><span class="item done">Wake up at 6am</span></li>
			</ul>

			<form class="item-add" action="add.php" method="post">

				<input type="text" name="name" placeholder="Type here." class="input" autocomplete="off" required>
				<input type="submit" value="Add" class="submit">

			</form>

		</div>
	</body>
</html>
