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

    <h1>Welcome</h1>
    <div class="homeBackground"></div>

    <section id="sec-1">
    <dov class="container">
    <h1>CUMS</h1>
    <div class="scroll-down"></div>
    </dov>
   


   </section>

   <section class="sec-2">
<div class="container">
    <h1>this is sec 2</h1>
</div>

   </section>
 <center>
        <h1>Storing Form data in Database</h1>

        <form action="index.php" method="post">


            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </p>

            <p>
                <label for="time">Date and Time:</label>
                <input type="datetime-local" name="time" id="time" min="" required>
            </p>

            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress" required>
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
        $time = $_REQUEST['time'];
        $email = $_REQUEST['email'];

        $rows = mysqli_num_rows($result);

        if ($rows === 0) {
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO booking (name, time, email)
                    VALUES ('$name','$time','$email')";

            $insert = mysqli_query($con, $sql);
            if ($insert)
            {
                    echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";

                echo nl2br("\n$name\n$time\n$email");
        } 
    }
        else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }


        // Close connection
        mysqli_close($con);
        ?>
    </center>

    <script src="JavaScript.js"></script>
</body>

</html>