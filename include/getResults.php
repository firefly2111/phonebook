<?php
	require 'connect.php';
	
	if(isset($_GET['criteria'])){
		if(!empty($_GET['criteria'])){
			$criteria = trim($_GET['criteria']);
			$criteria = mysqli_real_escape_string($connect, $criteria);
			$query = "SELECT * FROM contacts WHERE firstname LIKE '%{$criteria}%' OR lastname LIKE '%{$criteria}%'";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					?>
					<div id="result">
						<p>Name: <?php echo $row['firstname'] . " " . $row['lastname'];?></p>
						<p>Tel: <?php echo $row['telephone'];?></p>
					<div>
				<?php
				}
				echo "Number of results: " . mysqli_num_rows($result);
			}else{
				echo "No results.";
			}
		}else{
			echo "Criteria is empty";
		}
	}
?>