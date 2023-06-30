<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style>
      .form{
        visibility: inherit;
        color: #fff;
        margin: 2rem;
        width: 250px;
        height: 300px;
        background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
        position: absolute;
        top: 20px;
        left: 870px;
        transform: translate(0%,-5%);
        border-radius: 10px;
        padding: 25px;
      }
      .icons{
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="form">
                    <input type="email" name="email" placeholder="Enter Email Here"><br>
                    <input type="password" name="password" placeholder="Enter Password Here"><br>
                    <button class="btnn" type="submit"><a href="home.ejs">Login</a></button>

                    <div class="icons">
                        <a href="https://www.facebook.com/"><ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon></a>
                        <a href="https://www.instagram.com/"><ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon></a>
                        <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon></a>
                        <a href="https://www.google.com/"><ion-icon name="logo-google" role="img" class="md hydrated" aria-label="logo google"></ion-icon></a>
                        <a href="https://www.skype.com/en/"><ion-icon name="logo-skype" role="img" class="md hydrated" aria-label="logo skype"></ion-icon></a>
                    </div>

                </div>
  </body>
</html>
