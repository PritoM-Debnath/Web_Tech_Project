<?php 
    if(session_status()>=0){
        session_start();
        if(isset($_SESSION["uname"])){
            header("refresh: 0.5; url=homeUser.php");
        }
    }   
?>




<!doctype html>
<html lang="en">

<head>
    <title>USER SIGNING IN</title>
    <link rel="stylesheet" href="Style/showDOCstyle.css">
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
            <img src="sources/img/contacts.jpg" class="img1">
        </div>

        <div class="grid-child a">

            <div class="form">
                <h3>Show Doctor list</h3>



                <?php 
                //connect database
                $servername="localhost";
                $username="root";
                $password="";
                $database="final_db";
            
                $conn= mysqli_connect($servername,$username,$password,$database);
            
                if(!$conn){
                    die("CONNECTION ERROR :". mysqli_connect_error());
                }
            
                    $sql="SELECT *FROM doc_records";
                    $result=mysqli_query($conn,$sql);
            
                    while($row = mysqli_fetch_assoc($result)){
                        echo " <br>DOCTOR CODE :".$row['id']; 
                        echo " <br>NAME :". $row['dname'];
                        echo " <br>LOCATION: ". $row['loc'];
                        echo " <br>HOSPITAL: ". $row['hos'];
                        echo " <br>COST: ". $row['cost'];
                        echo "<br>";
                        echo "<br>";
                    }    
                ?>
            
            <form method="post">
                    ENTER DOCTOR CODE FOR BOOKING INFORMATION :
                    <input type="text" name="bookingid">
                    <input type="submit" name="submit" value="GO"><br>
                </form>
            
                <?php 
                    if(isset($_POST['submit'])){
                        $bkid=$_POST["bookingid"];
                        if($bkid != null){
                            $sql1="SELECT cntct_no FROM doc_records WHERE id=$bkid";
                            $result1=mysqli_query($conn,$sql1);
                            $row = mysqli_fetch_assoc($result1);
            
                            if($row){ 
                                echo "PLEASE CONTACT HERE: ".$row['cntct_no'];
                            }
                            else {
                                echo "UNABLE TO FIND";
                            }
                        }
                        else{
                            echo "PLEASE FILL UP THE FIELDS";
                        }
                    }   
                ?>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

