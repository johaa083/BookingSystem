<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>BOOKING</title>
</head>
<body class="bodys1">
<h1>Welcome</h1>
<div class="homeBackground">
<div class="cardMenu">
<a href="#opg1" class="card">
        <div class="cardImg"></div>
        <div class="cardText">

            <p>Book here</p>
        </div>
        <div class="cardcolor"></div>
      </a>
</div>

<?php 
//Get access to the database
require('database.php');

//Insert values into database
if (isset($_REQUEST['name'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $name);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $create_datetime = date("Y-m-d H:i:s");
    $query2   = "SELECT * FROM `booking` WHERE name='$name' OR email='" . ($email) . "' OR date=(Y-m-d H:i:s)";
    $result = mysqli_query($con, $query2) or die;
    function mysql_num_rows(){
    }  
    $rows = mysqli_num_rows($result);
    
    if ($rows == 0)
    {
        $query   = "INSERT into `users` (username, password, email, create_datetime)
                    VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $insert = mysqli_query($con, $query);
        if($insert) 
        {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
        }
        
    }
 
    
}


?>


</body>
</html> 