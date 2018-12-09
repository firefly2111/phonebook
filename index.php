<html>
	<head>
		<title>Phonebook</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="search">
				<h1>My Phonebook</h1>
				<a href="insert.php"><button title="Add Contact">ADD</button></a>
				<a href="remove.php"><button title="Remove Contact">REMOVE</button></a>
				<form action="#" method="GET">
					<input type="text" name="criteria" placeholder="Search...">
					<input type="submit" value="Search">
				</form>
			</div>
			<?php
				include 'include/getResults.php';
			?>
		</div>
	</body>
</html>