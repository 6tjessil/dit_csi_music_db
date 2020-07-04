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
		<?php
		//creates a variable to store the sql query
		$query = ("SELECT *
				FROM teacher");
		
		//Runs and stores the query using variables $con and $query
		$result = mysqli_query($con,$query);
		while($output=mysqli_fetch_array($result))
		{ 
		?>
			<div id = "music_list">
				<?php echo $output["cypher"],$output["surname"];?> 
			</div>
		<?php
		}
		?>    
	</div>    
</body>
</html>

<!--<table>
      <tr>
        <th>Cypher</th>
        <th>Room</th>
      </tr>
      ?php
      require_once("connect.php");
      $query = "SELECT t.cypher, r.room
                    FROM teacher AS t
                    JOIN teacher_to_room tr ON t.cypher = tr.cypher
                    JOIN room r ON r.room_id = tr.room_id ";
      $rs = mysqli_query($con, $query);
      if ($rs) {
        while ($row = mysqli_fetch_array($rs)) {
          echo "<tr><td>" . $row['cypher'] . "</td><td>" . $row['room'] . "</td></tr>";
        }
      }
      ?>
    </table>





    <div class="songs_list">
    ?php
        //creates a variable to store the sql query
        $query = ("SELECT t.cypher, r.room
                    FROM teacher AS t
                    JOIN teacher_to_room tr ON t.cypher = tr.cypher
                    JOIN room r ON r.room_id = tr.room_id ");
        //Runs and stores the query using variables $con and $query
        $result = mysqli_query($con,$query);
        while($output=mysqli_fetch_array($result))
        { 
        ?>
        <div id = "music_list">
            ?php echo $output["cypher"],"$",
            $output["surname"]," ",$output["christian"]," ",
            $output["form"]," ",$output["mentor"]," 
            ",$output["role_id"];?> 
        </div>
        ?php
        }
        ?>        
		</div>
    </div>
-->
