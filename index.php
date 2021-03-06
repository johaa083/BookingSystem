<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BOOKING</title>
</head>

<body>
<section id="sec-1">
        <dov class="container">
            <center>
            <h1>Welcome to Kuben Booking. <br>
        Down below you can see an overview of which areas you can book.</h1>
        </center>
</form>
      
            <a href="#sec-2">
            <div class="scroll-down"></div>
            </a>
        </dov>



    </section>

    <section id="sec-2">
        <div class="container">
        </div>
        <center>

        <div class="boxs3t1">
  <div class="cardMenu">

    <a href="#popup-1" class="card">
        <div class="cardImg"></div>
        <div class="cardText">
            <h4>Gaming chairs</h4>
            <p>Click here to book</p>
        </div>
        <div class="cardcolor"></div>
      </a>

    <a href="#popup-1" class="card">
        <div class="cardImg2"></div>
        <div class="cardText">
            <h4>2IMA's group room</h4>
            <p>Click here to book</p>
        </div>
        <div class="cardcolor"></div>
      </a>

</div>


<div class="boxs3t2">
  <div class="cardMenu">
  <a href="#popup-1" class="card">
    <div class="cardImg3"></div>
    <div class="cardText">
        <h4>2IMC's group room</h4>
        <p>Click here to book</p>
    </div>
    <div class="cardcolor"></div>
  </a>


  <a href="#popup-1" class="card">
    <div class="cardImg4"></div>
    <div class="cardText">
        <h4>Studio room</h4>
        <p>Click here to book</p>
    </div>
    <div class="cardcolor"></div>
  </a>
</div>
</div>

<div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h1>Booking</h1>
            <form action="https://formsubmit.co/b2335d7ca3183311ae8767e11bd514a4" method="POST">


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
        </div>
    </div>

    <button onclick="togglePopup()">Show popup</button>
      

    <center>
        <?php
        require('database.php');

        if ($con) {
            echo 'connected';
          } else {
            echo 'not connected';
          }

        // Check connection
        if (isset($_POST['name'])) {
            $name =  stripslashes($_REQUEST['name']);
            $email = stripslashes($_REQUEST['email']);
            $date = stripslashes($_REQUEST['date']);
            $stime = stripslashes($_REQUEST['stime']);
            $etime = stripslashes($_REQUEST['etime']);

            $query2   = "SELECT * FROM `booking` WHERE name='$name' OR email='$email' OR stime='$stime' OR etime='$etime'";
            $result = mysqli_query($con, $query2) or die;





            $rows = mysqli_num_rows($result);

            if ($rows === 0) {
                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO booking (name, email, date, stime, etime)
                    VALUES ('$name','$email', '$date','$stime',$etime,)";

                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo "<h3>Reservation sent</h3>";

                    print_r($_POST);
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

    <script src="java.js"></script>
</body>

</html>