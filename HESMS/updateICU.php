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
    <img src="icu.png" alt="icu" class="right">
    <div class="center">
    <p>ENTER UPDATED DATA:<br></P>
    <form method="post">
            HOSPITAL<br><input type="text" name="hos"><br>
            LOCATION<br><input type="text" name="loc"><br>
            COST<br><input type="text" name="cost"><br>
            CONTACT NUMBER<br><input type="text" name="cntct_no"><br>
            <input type="submit" name="submit"><br>
    </form> 
    </div>  
    <br>
    <br>
    <a href="homeAdmin.php">HOME</a>
</body>
</html>
-->

<!doctype html>
<html lang="en">
  <head>
  <script>
        function validateForm() {
            let a = document.forms["myForm"]["hos"].value;
            if (a == "")  {
                alert("Please Enter  hospital Name");
                return false;
            }
            let b = document.forms["myForm"]["loc"].value;
            if (b == "")  {
                alert("Please Insert your Location");
                return false;
            }
            let c = document.forms["myForm"]["cost"].value;
            if (c == "")  {
                alert("Enter total Cost");
                return false;
            }
            let d = document.forms["myForm"]["cntct_no"].value;
            if (d == "")  {
                alert("Enter Contact number");
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
                    <h3>Enter ICU Information:</h3>                   
                    <br>
                    <form name="myForm" method="post" onsubmit="return validateForm()">
                    
                <div class="form-group">
                        <label>Hospital</label><br>
                        <input type="text" class="form-control" placeholder="Hospital name" name="hos">
                    </div> 

                    <div class="form-group">
                        <label>Location</label><br>
                        <input type="text" class="form-control" placeholder="Location" name="loc">
                    </div>


                    <div class="form-group">
                        <label>Cost</label><br>
                        <input type="text" class="form-control" placeholder="Cost" name="cost">
                    </div>
                    
                    <div class="form-group">
                        <label>Contact number</label><br>
                        <input type="text" class="form-control" placeholder="Enter your Contact number" name="cntct_no">
                    </div>

                    <button type="submit" class="btn" name="submit">Submit</button>
                    <br>
                    <div>
                    <?php
    error_reporting(0);
    if(isset($_POST['submit'])){
        $hos=$_POST['hos'];
        $loc=$_POST["loc"];
        $cost=$_POST["cost"];
        $cntct_no=$_POST["cntct_no"];

        if( $hos!=null && $loc !=null && $cost!=null && $cntct_no!=null){
            $servername="localhost";
            $username="root";
            $password="";
            $database="final_db";

            $conn= mysqli_connect($servername,$username,$password,$database);

            if(!$conn){
                die("Error connection :". mysqli_connect_error());
            }

            $sql="INSERT INTO icu_records (hos, loc, cost,cntct_no) VALUES('$hos', '$loc', '$cost','$cntct_no')";
            $result = mysqli_query($conn,$sql);
                
            if($result)
            {   
                echo "UPDATED SUCCESSFULLY";
                echo "<br><br>HOSPITAL NAME:".$hos."<br> LOCATION:".$loc."<br> COST: ".$cost."<br> CONTACT NUMBER : ".$cntct_no."<br>";
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
    ?>
                    </div>
                </form>
                </div>
           </form>
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

