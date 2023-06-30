<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>

    <link rel="stylesheet" href="book.css">
  </head>
  <body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $dogname = $_POST['dogname'];
        $email = $_POST['email'];
        $dates = $_POST['dates'];
        $ponenumber = $_POST['ponenumber'];

        $con = mysqli_connect("localhost","root","","registration");

        $query = "INSERT into bookings(dogname,email, dates ,ponenumber) VALUES('$dogname','$email','$dates','$ponenumber')";

        $result = mysqli_query($con,$query);

        if($result){
          echo ("Bookings Successful");
        } else {
          echo ("Fail");
        }
      }
     ?>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Tin Dog</h2>
            </div>

            <div class="menu">
                <ul>
                  <li><a href="home.php">HOME</a></li>
                  <li><a href="about.html">ABOUT</a></li>
                  <li><a href="booking.php">BOOKING</a></li>
                  <li><a href="payment.php">PAYMENT</a></li>
                  <li><a href="feedback.html">FEEDBACK</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div>
        <div class="form">
        <div class="form-text">
          <br><br>
            <h1>Book Now</h1>
            <p>Book your dates now, We ensure your 100% quality service</p>
        </div>
        <div class="main-form">
            <form action="" method="post">
                <div>
                    <span>Your Dog name:</span>
                    <input type="text" name="dogname" id="name" placeholder="Enter Dog Name" required>
                </div>
                <br>
                <div>
                    <span>Your email address:</span>
                    <input type="email" name="email" id="name" placeholder="Enter Your E-mail" required>
                </div>
                <br>
                <div>
                    <span>Select Your Date:</span>
                    <input type="date" name="dates" id="date" placeholder="date" required>
                </div>
                <br>
                <div>
                    <span>Your Contact Number:</span>
                    <input type="number" name="ponenumber" id="number" placeholder="Enter phone number" required>
                </div>
                <br>
                <div id="submit">
                    <button type="submit" class="btn btn-secondary"><a href="payment.php">Submit</a></button>

                </div>
            </form>
        </div>
    </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     </div>

  </body>
</html>
