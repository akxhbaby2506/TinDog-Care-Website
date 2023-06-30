<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
  <?php
  if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $con = mysqli_connect("localhost","root","","registration");

        if(mysqli_connect_errno()){
          echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        $query = "SELECT * FROM signup WHERE email='$email' and password='password'";
        $result = mysqli_query($con,$query);

        if($result){
          if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['email'] = $name;
            header("Location: about.html");
          } else{
            echo("Invalid Credentials");
          }
        }
          else {
            echo ("Invalid Credentials");
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
        <div class="content">
            <h1>Pet<br><span>Boarding</span> <br>Agency</h1><br>
            <p class="par">Meet new and interesting pets nearby. We are here to take care of your Pets.<br>
            Where your pets feel at home since they are! Love and concern for your pets while you are away.<br>
            Come. Stay. Play!</p>

                <button class="cn"><a href="#">JOIN US</a></button>
                <div class="form">

                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn"><a href="about.html">Login</a></button>

                    <p class="link">Don't have an account?<br>
                    <a href="register.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.google.com/"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="https://www.skype.com/en/"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
