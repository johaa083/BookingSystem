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

    <a href="#opg1" class="card">
        <div class="cardImg"></div>
        <div class="cardText">
            <h2>Oppdrag 1</h2>
            <p>En mer brukervennlig Kuben nettside for Kuben</p>
        </div>
        <div class="cardcolor"></div>
      </a>

      <div id="opg1">
<!--menybar start-->
<header>
    <div class="wrapper">
        <div class="logo">
            <a href="../index.html">
            <img src="../PICS/WOLF.png" alt="oppdrag1" height="150px"></a>
        </div>
       
  </div>
  </header>  
<!--menybar slutt-->

<iframe class="oppdrag1K" src="../nettsider/index.html" width="90%"></iframe>
<div class="opg1text">
<h3>ussy</h3>
<p>
</p>
</div>
</div>




    <button name="submit_button" type="submit" value="Submit">
        Submit
    </button>

    <button name="reset_button" type="reset" value="Reset">
        Reset
    </button>


    
    <center>
    <h1>Storing Form data in Database</h1>

    <form action="index.php" method="post">
          
          
<p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </p>

<p>
            <label for="Date">Date:</label>
            <input type="date" name="date" id="date">
        </p>

<p>
            <label for="emailAddress">email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>

        <input type="submit" value="Submit">
    </form>
</center>
    <center>
        <?php
  require('database.php');
          
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        $name =  $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO booking (name, date, email)
                VALUES ('$name','$date','$email')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n$date\n$email");
        }
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>
    </center>


</body>

</html>