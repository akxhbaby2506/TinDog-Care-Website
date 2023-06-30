<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
        </script>

        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
        <?php
        $name = $userid = $phonenumber = $password = "" ;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST['name'];
            $userid = $_POST['userid'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $ponenumber = $_POST['ponenumber'];

            $con = mysqli_connect("localhost","root","","registration");

            $query = "INSERT into signup(name,userid,email,password,ponenumber) VALUES('$name','$userid','$email','$password','$ponenumber')";

            $result = mysqli_query($con,$query);

            if($result){
              echo ("Registration Successful");
            } else {
              echo ("Fail");
            }
          }
          ?>

        <form  action="" method="post" >
          <div class="main">
            <div class="center">
            <strong><h1 class="head"> Registration </h1>
            <label>name</label><br><input type="text" name="name"><br>
            <label>userid</label><br><input type="text" name="userid"><br>
            <label>email</label><br><input type="text" name="email"><br>
            <label>password</label><br><input type="password" name="password"><br>
            <label>phone Number</label><br><input type="text" name="ponenumber"><br><br>
            <a href="home.php"><button type="submit" class="btn btn-primary">Register</button></a></strong>
            </div>
          </div>
        </form>

        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    </body>
</html>
