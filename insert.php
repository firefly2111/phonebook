<html>
	<head>
		<title>Phonebook</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="search">
				<h1>My Phonebook</h1>
				<a href="index.php"><button title="Search">SEARCH</button></a>
				<a href="remove.php"><button title="Remove Contact">REMOVE</button></a>
				<form action="#" method="POST">
					<label> First name: <br/>
					<input type="text" name="firstname"></input></label><br/>
					<label> Last name: <br/>
					<input type="text" name="lastname"></input></label><br/>
					<label> Tel number: <br/>
					<input type="text" name="telephone"></input></label><br/>
					<input type="submit" name="insert" value="Insert"></input><br/>
				</form>
			</div>
			<div id="message">
				<?php
					if(isset($_POST['insert'])){
						if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['telephone'])){
							if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['telephone'])){
								$firstname = trim($_POST['firstname']);
								$lastname = trim($_POST['lastname']);
								$telephone = trim($_POST['telephone']);
								require "include/connect.php";
								
								$firstname = mysqli_real_escape_string($connect, $firstname);
								$lastname = mysqli_real_escape_string($connect, $lastname);
								$telephone = mysqli_real_escape_string($connect, $telephone);
								
								$query = "INSERT INTO contacts (firstname, lastname, telephone) VALUES ('{$firstname}','${lastname}','${telephone}')";
								if(mysqli_query($connect, $query) === TRUE){
									echo "New record successfully added";
								}else{
									echo "Error!!!";
								}
							}else{
								echo "All fields must bee filled!!!";
							}
						}else{
							echo "All paremeters must be filled!!!";
						}
					}
				?>
			</div>
		</div>
	</body>
</html>