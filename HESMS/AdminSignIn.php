<?php
if (session_status() >= 0) {
    session_start();
    if (isset($_SESSION["uname"])) {
        header("refresh: 0.5; url=homeAdmin.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["uname"].value;
            if (x == "")  {
                alert("Incorrect Email");
                return false;
            }
            let y = document.forms["myForm"]["pass"].value;
            if (y == "")  {
                alert("Incorrect Password");
                return false;
            }
        }
    </script>
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="Style/adminSigninstyle.css">
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
                <h3> Admin Sign In</h3>
                <br>
                <div class="form-group">
                    <form name="myForm" method="post" onsubmit="return validateForm()">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="uname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <br>
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                        <button type="submit" class="btn" name="submit">Submit</button>
                        <br>
                        <div class="rtext">
                            <?php
                            error_reporting(0);
                            if (isset($_POST['submit'])) {
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
                                $sql = "SELECT *FROM admin_records where aname='$uname'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $check1 = $row['pass'];


                                if ($pass == $check1 && $pass != null) {
                                    echo "<br><br>SUCCESSFULLY LOGGED IN";
                                    header("refresh: 3; url=homeAdmin.php");
                                } else {
                                    echo "<br><br>VERDICT WRONG !!";
                                    header("refresh: 3; url=index.php");
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <a href="homeUser.php">HOME</a> -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>