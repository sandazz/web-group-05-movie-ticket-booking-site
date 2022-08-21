<?php
include("dbs.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Signin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        

</head>
<body>
    <?php 
        if(isset($_POST["step"]))
         {
             $fname = $_POST["name01"];
             $phone = $_POST["name02"];
             $userName = $_POST["name03"];
             $password = $_POST["name04"];
             $compassword = $_POST["name05"];
             $movie=$_POST["moveid"];
             $result = mysqli_query($con,"INSERT INTO `userdetail`(`fullName`,`phone`,`useremail`,`newpassword`,`newcomfirmpassword`) VALUES('$fname','$phone','$userName','$password','$compassword')");
            // if($result)
            // {
                // header("location:logginpure.php");
            //}
             if($result){ ?>
              
                <?php 
                  //header('Location:https://moviesdagrp05.000webhostapp.com/seatBooking.php',true);
                  echo "<script> window.location.href='loginpure.php?movieid=".$movie."'</script>";
                    $msg='inside';
                }else{
                    $msg='incorect password';
                }
             //  <?php $movieid="movieid=".$_GET["movieid"]; echo "signin.php?$movieid";?>
         }
         else
         {
              display2();
         }
    function display2(){?>
    <form action = "signin.php" method = "post">
        <section class = "header">
            <div class = "logo">
                <img src= "logo.png">
            </div>
            <div class="banner">
                <div class = "middle">
                    <h3>Sing up</h3>
                    <input type="hidden" name="step" value="2" >
                    <br>
                    Full Name  :<br>
                    
                    <input type = "text" name = "name01" required ><br><br>
                    Phone No  :<br>
                    <input type = "text" name = "name02" required><br><br>
                    Email or Username  :<br>
                    <input type = "text" name = "name03" required><br><br>
                    Password :<br>
                    <input type = "password" name = "name04" required><br><br>
                    Comfirm Password  :<br>
                    <input type = "password" name = "name05" required>
                    <br>
                    
                </div>
                <div class = "button">
                    <button class ="hero-btn">Register</button>
                </div><br>
            </div>
        </section>
    </form>
    <?php } ?>
</body>
</html>