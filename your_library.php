<!--First Query-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>TJessil</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	require("nav.php")
	?>
	<div id="queryheader">
		<h1>Cypher to Room</h1> 
	</div>
<!--PHP STARTS HERE-->
	<?php
        require_once("connect.php");
    ?>
	<div class = "song_list">
		<!--PHP STARTS HERE-->
		<div class = "music_header">
			Cypher
		</div>
		<div class = "music_header">
			Surname
		</div>
		<div class = "music_header">
			Christian
		</div>
		<div class = "music_header">
			Form
		</div>
		<div class = "music_header">
			Mentor
		</div>
		<div class = "music_header">
			Role_id
		</div>
		<?php
		//creates a variable to store the sql query
		$query = ("SELECT *
				FROM teacher");
		
		//Runs and stores the query using variables $con and $query
		$result = mysqli_query($con,$query);
		while($output=mysqli_fetch_array($result))
		{ 
		?>
			<div class = "music_list">
				<?php echo $output["cypher"];?> 
			</div>
			<div class = "music_list">
				<?php echo $output["surname"];?> 
			</div>			
			<div class = "music_list">
				<?php echo $output["christian"];?> 
			</div>			
			<div class = "music_list">
				<?php echo $output["form"];?> 
			</div>			
			<div class = "music_list">
				<?php echo $output["mentor"];?> 
			</div>			
			<div class = "music_list">
				<?php echo $output["role_id"];?> 
			</div>
		<?php
		}
		?> 
	</div>    
</body>
</html>

