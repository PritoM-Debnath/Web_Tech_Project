<?php
if (session_status() >= 0) {
    session_start();
    if (isset($_SESSION["uname"])) {
        header("refresh: 0.5; url=homeUser.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
<script>
        function validateForm() {
            let x = document.forms["myForm"]["name"].value;
            if (x == "")  {
                alert("Enter your Name");
                return false;
            }
            let y = document.forms["myForm"]["email"].value;
            if (y == "")  {
                alert("Please Insert your Email");
                return false;
            }
            let z = document.forms["myForm"]["pass"].value;
            if (z == "")  {
                alert("Please Insert your Password");
                return false;
            }
            let a = document.forms["myForm"]["cpass"].value;
            if (a == "")  {
                alert("Please repert your password");
                return false;
            }
        }
    </script>


    <title>USER SIGNING UP</title>
    <link rel="stylesheet" href="Style/signupstyle.css">
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
            <img src="sources/img/registration-hospital.png" class="img">
        </div>

        <div class="grid-child a">

            <div class="form">
                <h3>Regestration Form</h3>
                <!-- <form method="post" >
            NAME<br><input type="text" name="name"><br>
            USERNAME or EMAIL<br><input type="text" name="uname"><br>
            PASSWORD<br><input type="password" name="pass"><br>
            CONFIRM PASSWORD<br><input type="password" name="cpass"><br><br>
            <div class="btn"><input type="submit" name="submit"><br></div>
            
        </form> -->
       

                <div class="form-group">
                <form name="myForm" method="post" onsubmit="return validateForm()">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Full Name" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpass">
                </div>
                <button type="submit" class="btn" name="submit">Submit</button>
                </form>
                <a href="UserSignIn.php"><button type="submit" class="btn">Already Have an Account</button></a>
            </div>

            <dev class="rtext">

            <?php
            error_reporting(0);
            if (isset($_POST['submit'])) {
              if ($_POST["pass"] == $_POST["cpass"] && $_POST["pass"] != null) {

        if ($_POST["uname"] == null && empty($_POST["name"])) {
            echo "**required";
            header("refresh: 1; url=signup.php");
        } else {
            $email = test_input($_POST["uname"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format";
                header("refresh: 1; url=signup.php");
            } else {
                $val0 = $_POST["name"];
                $val1 = $_POST["uname"];
                $pass = $_POST['pass'];
                $val2 = password_hash($pass, PASSWORD_BCRYPT);

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "final_db";

                $conn = mysqli_connect($servername, $username, $password, $database);

                if (!$conn) {
                    die("CONNECTION ERROR :" . mysqli_connect_error());
                }

                $sql = "INSERT INTO user_records (name,email,pass) VALUES('$val0','$val1', '$val2')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo " DATA INSERTED";
                    header("refresh: 1; url=UserSignIn.php");
                } else {
                    echo " Not inserted->" . mysqli_error($conn);
                }
            }
        }
    } else {
        echo "Invalid ";
        header("refresh: 1; url=index.php");
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
</dev>


       

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
