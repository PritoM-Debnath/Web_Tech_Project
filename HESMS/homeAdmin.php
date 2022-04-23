<?php 
        if(session_status()>=0){
            session_start();
            if(isset($_SESSION["uname"])){
                header("refresh: 0.5; url=homeAdmin.php");
            }
        }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Admin home page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/homeAdminstyle.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">
    <header>
           <nav id="navbar">
               <ul id="navbar ul">
                <section>
                   <li id="navbar li">
                       <a id="navbar a" href="#">Home</a>
                       <a id="navbar a" href="a.html">Contact</a>
                       <a id="navbar a" href="signout.php">Sign Out</a>                 
                   </li> 
               </section>            
               </ul>
            </nav>
    </header>
</div>


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
                <img src="sources/img/admin home page.png" class="img1">
            </div>
    
            <div class="grid-child a">
                <dev class="list-update">
                    <dev class="icu-img">


                        <a href="updateDOC.php">
                            <img alt="updateDOC" src="sources/img/updatedoctorlist.jpg" class="doctor-img1"
                            >
                         </a>

                         <a href="updateICU.php">
                            <img alt="updateICU" src="sources/img/ICU update.jpg" class="doctor-img1"
                            >
                            </a>

                         <a href="delete_doc.php">
                            <img alt="delete_doc" src="sources/img/deletedoctorlist.jpg" class="doctor-img1"
                            >
                         </a>

                         <a href="delete_icu.php">
                            <img alt="delete_icu" src="sources/img/deleteICUlist.jpg" class="doctor-img1"
                            >
                         </a>


                </dev>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<!--
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME</title> 
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
  width:10%;
}
</style>
</head>
<body>    
    <img src="home.png" alt="home" class="right">

<div class="center">
    <h3>OPERATION</h3>

    
    <li><a href="updateICU.php">UPDATE ICU INFORMATION</a></li>
    <li><a href="updateDOC.php">UPDATE DOCTOR INFORMATION</a></li>
    <li><a href="delete_icu.php">DELETE ICU INFORMATION</a></li>
    <li><a href="delete_doc.php">DELETE DOCTOR INFORMATION</a></li>
</div>

<br><br><a href="signout.php">SIGN_OUT</a>
    
</div>


</body>
</html>