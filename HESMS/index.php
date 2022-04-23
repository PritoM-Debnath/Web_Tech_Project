<?php
session_start();

error_reporting(0);
if (isset($_POST['submit'])) {
    $selection = $_POST['selection'];
    $user = "user";
    $admin = "admin";
    if (empty($selection)) {
        echo "Select any.";
    } elseif ($selection == $admin) {
        header("refresh: 0.1; url=AdminSignIn.php");
    } elseif ($selection == $user) {
        header("refresh: 0.1; url=UserSignIn.php");
    }
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Hospital Occupancy</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 10%;
        }

        .right {
            display: block;
            margin-left: auto;
            margin-right: right;
            width: 10%;
        }
    </style>
</head>

<body>
    <img src="sources/img/" alt="Paris" class="center">
    <p>Hospital Occupancy is a system which focused on giving services to the patients. The website is trying to provides three main usages- ICU Booking, Request for Ambulance and Booking doctors appointment. People would get to know the availability and details of ICU, Ambulance and Oxygen. The main purpose of this system is to help the patients in time and give an easy way to get their needed services so that they don't have to run hospital to hospital. The project has patients as the audience and also it has a target market in which hospitals and ambulance service provider are involved. Additionally, the use of this system is uncomplicated and sequential.
    </p>
    <div class="right">
        <h3>SIGN IN AS</h3>
        <form method="post">
            <input type="radio" name="selection" value="admin">ADMIN<br>
            <input type="radio" name="selection" value="user">USER<br>
            <br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>


</body>

</html> -->
<!doctype html>
<html lang="en">
  <head>
    <title>H&H</title>
    <link rel="stylesheet" href="style/indexstyle.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="grid-container">
    <div class="grid-child b">
        <img src="sources/img/large.png" class="logo">
    </div>
    <div class="grid-child a">
        <h1 class="nametext">Heal&Health.Com</h1>
    </div>
    </div>
    <div class="grid-container">
        <div class="grid-child a"><p class="txt">Hospital Occupancy is a system which focused on giving services to the patients. The website is trying to provides three main usages- ICU Booking, Request for Ambulance and Booking doctors appointment. People would get to know the availability and details of ICU, Ambulance and Oxygen. The main purpose of this system is to help the patients in time and give an easy way to get their needed services so that they don't have to run hospital to hospital. The project has patients as the audience and also it has a target market in which hospitals and ambulance service provider are involved. Additionally, the use of this system is uncomplicated and sequential.
    </p></div>
    
    <div class="grid-child a">
        <h3>SIGN IN AS</h3>
        <form method="post">
            <input type="radio" name="selection" value="admin">ADMIN<br>
            <input type="radio"  name="selection" value="user">USER<br>
            <br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>