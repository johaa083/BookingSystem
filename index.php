<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>BOOKING</title>
</head>

<body>
    <section id="sec-1">
        <dov class="container">
            <h1>CUMS</h1>


            <div class="boxs3t1">
  <div class="cardMenu">

    <a href="#opg1" class="card">
        <div class="cardImg"></div>
        <div class="cardText">
            <h2>Oppdrag 1</h2>
            <p>En mer brukervennlig Kuben nettside for Kuben</p>
        </div>
        <div class="cardcolor"></div>
      </a>

    <a href="#opg2" class="card">
        <div class="cardImg2"></div>
        <div class="cardText">
            <h2>Oppdrag 2</h2>
            <p>A Design Manual for Snurr danseskole AS</p>
        </div>
        <div class="cardcolor"></div>
      </a>

    <a href="#opg3" class="card">
        <div class="cardImg3"></div>
        <div class="cardText">
            <h2>Oppdrag 3</h2>
            <p>En virtuell PC med Windows</p>
        </div>
        <div class="cardcolor"></div>
      </a>


</div>
</div>



            <a href="#sec-2">
            <div class="scroll-down"></div>
            </a>
        </dov>



    </section>

    <section id="sec-2">
        <div class="container">
        </div>
        <center>
        <h1>Storing Form data in Database</h1>

        <form action="index.php" method="post">


            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </p>

            <p>
                <label for="time">Date:</label>
                <input type="date" name="date" id="date" min="" required>
            </p>

            <p>
                <label for="time">Start Time:</label>
                <input type="time" name="stime" id="stime" min="" required>
            </p>

            <p>
                <label for="time">End Time:</label>
                <input type="time" name="etime" id="etime" min="" required>
            </p>

            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="email" name="email" id="emailAddress" required>
            </p>


            <input type="submit" value="Submit">
        </form>
    </center>

    </section>
   
    <center>
        <?php
        require('database.php');

        // Check connection
        if (isset($_REQUEST['name'])) {
            $name =  $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $date = $_REQUEST['date'];
            $stime = $_REQUEST['stime'];
            $etime = $_REQUEST['etime'];

            $query2   = "SELECT * FROM `booking` WHERE name='$name' OR email='" . ($email) . "' OR stime='$stime' OR etime='$etime'";
            $result = mysqli_query($con, $query2) or die;





            $rows = mysqli_num_rows($result);

            if ($rows === 0) {
                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO booking (name, email, date, stime, etime)
                    VALUES ('$name','$email', '$date','$stime',$etime,)";

                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo "<h3>data stored in a database successfully."
                        . " Please browse your localhost php my admin"
                        . " to view the updated data</h3>";

                    echo nl2br("\n$name\n$email\n$date\n$stime\n$etime");
                }
            } else {
                echo "Sorry, there is already a reservation on that time. "
                    . mysqli_error($con);
            }
        }
        // Close connection
        mysqli_close($con);
        ?>

    </center>

    <script src="JavaScript.js"></script>
</body>

</html>