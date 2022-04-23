<?php
if (session_status() >= 0) {
    session_start();
    if (isset($_SESSION["uname"])) {
        header("refresh: 0.5; url=homeUser.php");
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>USER SIGNING IN</title>
</head>
<body>
    <img src="sources/img/login.PNG" alt="user" class="right">
    <div class="center">
    <p>FILL UP BELLOW FIELDS</P>
    <form method="post">
            ID<br><input type="text" name="id"><br>
            USERNAME<br><input type="text" name="uname"><br>
            PASSWORD<br><input type="password" name="pass"><br>
            <input type="submit" name="submit"><br>
    </form>
    </div>
    <br>
    <a href="signup.php">DO SIGNUP</a><br>
    <a href="index.php">HOME</a>
</body>
</html> -->


<!doctype html>
<html lang="en">

<head>

    <script>
        function validateForm() {
            let x = document.forms["myForm"]["email"].value;
            if (x == "")  {
                alert("Please Insert your valid Email");
                return false;
            }
            let y = document.forms["myForm"]["pass"].value;
            if (y == "")  {
                alert("Please Insert your Password");
                return false;
            }
        }
    </script>

    <title>USER SIGNING IN</title>
    <link rel="stylesheet" href="Style/signinstyle.css">
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

        <div class="grid-child b">
            <img src="sources/img/login.png" class="img1">
        </div>

        <div class="grid-child a">

            <div class="form">
                <h3>Sign In</h3>


                <div class="form-group">
                <form name="myForm" method="post" onsubmit="return validateForm()">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                        </div>
                         <button type="submit" class="btn" name="submit">Submit</button>
              </form>
                      <a href="signup.php"><button type="submit" class="btn">Regestration Now</button></a>
            </div>
        </div>
        <!-- <a href="homeUser.php">HOME</a> -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $uname = $_POST["uname"];

    //connect database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "final_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("CONNECTION ERROR :" . mysqli_connect_error());
    }
    //FETCH
    $sql = "SELECT *FROM user_records where email='$uname'AND id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $hash = $row['pass'];

    $verify = password_verify($pass, $hash);

    if ($verify) {
        echo "<br><br>SUCCESSFULLY LOGGED IN";
        header("refresh: 3; url=homeUser.php");
    } else {
        echo "<br><br>VERDICT WRONG !! (:";
        header("refresh: 3; url=UserSignIn.php");
    }
}
?>