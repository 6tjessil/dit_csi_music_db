				
<?php
    require_once("connect.php");
    
    $username = $_POST['UserName']; 
    $password = $_POST['Password'];
    
    $checkquery = "SELECT * FROM user WHERE username = '$username'"; //Checks if username exsits
    $insertquery = "INSERT INTO user(`username`, `password`) VALUES ('$username','$password')"; //Inserts new user data
                
    $result_check = mysqli_query($con, $checkquery); //Running $insertquery
    $count = mysqli_num_rows($result_check); //Counts number of rows

    if ($count > 0){ //Checks if number of rows is greater than 0
        $output_message = "Name already taken";
        echo $output_message;
    } else{
        $result_query = mysqli_query($con,$insertquery); 
        $output_message = "Registration Successful";

        echo $output_message;
    $insertquery = "INSERT INTO useraccount(`username`, `password`) VALUES ('{$username}','{$password}');";
    
    if (mysqli_query($con,$insertquery))
    {
    header('nav.php');
    header("location: index.php");
    echo "<h3>Record inserted</h3>";
    }
    else
    {
    echo "<h3>Error inserting record:</h3> ";
    }
?>



