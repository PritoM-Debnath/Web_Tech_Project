<?php
if(session_status()>=0){
    session_start();
    if(isset($_SESSION["uname"])){
        header("refresh: 0.5; url=homeAdmin.php");
    }
}
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE ICU</title>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}
.right  {
  display: block;
  margin-left: auto;
  margin-right: right;
  width:5%;
}
</style>
</head>
<body>
    
    <img src="doc.png" alt="doctorlogo" class="right">
    <div class="center">
    <p>ENTER UPDATED DATA:<br></P>
    <form method="post">
            DOCTOR NAME<br><input type="text" name="dname"><br>
            LOCATION<br><input type="text" name="loc"><br>
            HOSPITAL<br><input type="text" name="hos"><br>
            COST<br><input type="text" name="cost"><br>
            CONTACT NUMBER<br><input type="text" name="cntct_no"><br>
            <input type="submit" name="submit"><br>
    </form>
    </div>

    <br>
    <br>
    <a href="homeAdmin.php">HOME</a>
</body>
</body>
</html>
-->
<!doctype html>
<html lang="en">
  <head>
            <script>
                    function validateForm() {
                        let x = document.forms["myForm"]["dname"].value;
                        if (x == "")  {
                            alert("Enter your Name");
                            return false;
                        }
                        let y = document.forms["myForm"]["loc"].value;
                        if (y == "")  {
                            alert("Enter your Location");
                            return false;
                        }
                        let z = document.forms["myForm"]["hos"].value;
                        if (z == "")  {
                            alert("Enter your hospital Name");
                            return false;
                        }
                        let a = document.forms["myForm"]["cost"].value;
                        if (a == "")  {
                            alert("please Insert your Cost");
                            return false;
                        }
                        let b = document.forms["myForm"]["cntct_no"].value;
                        if (b == "")  {
                            alert("Please Enter your Contect Number");
                            return false;
                        }
                    }
                </script>


    <title>Update data</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="Style/updatedatastyle.css">
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
                    <h3>Enter Doctor's Information:</h3>                   
                    <br>
                    <form name="myForm" method="post" onsubmit="return validateForm()">
                    <div class="form-group">
                    
                        <label>Doctor name:</label><br>
                        <input type="text" class="form-control" placeholder="Enter your name" name="dname">
                    </div>
                    <div class="form-group">
                        <label>Location</label><br>
                        <input type="text" class="form-control" placeholder="Location" name="loc">
                    </div>

                    <div class="form-group">
                        <label>Hospital</label><br>
                        <input type="text" class="form-control" placeholder="Hospital name" name="hos">
                    </div>

                    <div class="form-group">
                        <label>Cost</label><br>
                        <input type="text" class="form-control" placeholder="Cost" name="cost">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact number</label><br>
                        <input type="text" class="form-control" placeholder="Enter your Contact number" name="cntct_no">
                    </div>
                    <button type="submit" class="btn" name="submit">Submit</button>
                 </form>
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
    if(isset($_POST['submit'])){
        $dname=$_POST['dname'];
        $hos=$_POST['hos'];
        $loc=$_POST["loc"];
        $cost=$_POST["cost"];
        $cntct_no=$_POST["cntct_no"];

        if( $dname !=null && $hos !=null && $loc !=null && $cost!=null && $cntct_no !=null){
            $servername="localhost";
            $username="root";
            $password="";
            $database="final_db";
    
            $conn= mysqli_connect($servername,$username,$password,$database);
    
            if(!$conn){
                die("Error connection :". mysqli_connect_error());
            }
    
            $sql="INSERT INTO doc_records (dname, loc, hos, cost, cntct_no) VALUES('$dname', '$loc', '$hos', '$cost', '$cntct_no')";
            $result = mysqli_query($conn,$sql);
                  
            if($result)
            {   
                echo "UPDATED SUCCESSFULLY";
                echo "<br>DOCTOR NAME:".$dname."<br> LOCATION:".$loc."<br> COST: ".$cost."<br> HOSPITAL NAME: ".$hos."<br> CONTACT NUMBER : ".$cntct_no."<br>";
                header("refresh: 3; url=homeAdmin.php");;
            }
            else{
                echo " Not inserted ->".mysqli_error($conn);
            }
        }
        else{
            echo "EVERY FIELD REQUIRED";
        }
              
    }