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
    <div class="homeBackground"></div>

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

    </div>


    <center>
        <h1>Storing Form data in Database</h1>

        <form action="index.php" method="post">


            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </p>

            <p>
                <label for="Date">Date:</label>
                <input type="date" name="date" id="date" required>
            </p>

            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress" required>
            </p>
            <p>
                <label for="time">Time:</label>
                <input type="datetime-local" name="time" id="time" required>
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>
    <center>
        <?php
        require('database.php');

        // Check connection
        if ($con === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name =  $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $email = $_REQUEST['email'];
        $time = $_REQUEST['time'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO booking (name, date, email, time)
                VALUES ('$name','$date','$email', '$time')";

        if (mysqli_query($con, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name\n$date\n$email\n$time");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }

        // Close connection
        mysqli_close($con);
        ?>
    </center>


</body>

</html>