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
-<div class="homeBackground"></div>

<button class="button" name="simple_button" type="button">
CUMSS
</button>

<button name="submit_button" type="submit" value="Submit">
    Submit
</button>

<button name="reset_button" type="reset" value="Reset">
    Reset
</button>


<?php 
//Get access to the database
require('database.php');

//Insert values into database
if (isset($_REQUEST['name'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $gmail = $_POST['gmail'];

    //add to database
    $sql = "INSERT INTO bookingsystem (name, date, gmail) 
            VALUES ('$name', '$date', $gmail)";


    //database addition confirmation
    if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    }   
    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


// Close connection
$conn->close();

//}


?>
<h2>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Username" required />
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>
</h2>
<?php
}
?>


</body>
</html>