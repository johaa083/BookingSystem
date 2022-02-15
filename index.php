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
        <nav>
          <a href="../HTML/About Me.html">About</a> 
                <a href="../HTML/Nettverk.html">Nettverk</a>
                <a class="active" href="../HTML/Porte.html">Portfolio</a> 
                <a href="../HTML/Tags.html">Html Tags</a> 
                <a href="../HTML/design.html">Design manual</a>
                <a href="../HTML/Valgfri.html">Content</a>
        </nav>
  </div>
  </header>  
<!--menybar slutt-->

<iframe class="oppdrag1K" src="../nettsider/index.html" width="90%"></iframe>
<div class="opg1text">
<h3>Oppdrag 1</h3>
<p>Det første oppdraget som jeg hadde her på Kuben var å lage en mer brukervennlig Kuben nettside.
    jeg prøvde å lage en veldig lett nettside som er enkel å navigere seg rundt på.
    jeg føler jeg klarte dette oppdraget ganske godt ved hjelp av en venn av meg som går i 10. trinn.
    Men jeg løste oppgaven med å tenke på hvordan nettsiden kunne være enklest å titte på, fordi jeg og noen andre synes det var vannskelig.
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
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>

        <input type="submit" value="Submit">
    </form>
</center>
    <center>
        <?php
  require('database.php');
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO bookingsystem 
                VALUES ('$name','$date','$email')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n$date\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>


</body>

</html>