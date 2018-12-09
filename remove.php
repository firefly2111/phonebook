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
				<a href="index.php"><button title="Remove Contact">SEARCH</button></a>
				<?php
					require "include/connect.php";
					$query = "SELECT * FROM contacts";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							?>
								<div id="result">
									<p>Name: <?php echo $row['firstname'] . " " . $row['lastname'];?></p>
									<p>Tel: <?php echo $row['telephone'];?></p>
									<a href="include/removeContact.php?id=<?php echo $row['id']?>"><button>REMOVE</button></a>
								</div><br/>
							<?php
						}
					}else{
						echo "No contacts";
					}
				?>
			</div>
			
		</div>
	</body>
</html>