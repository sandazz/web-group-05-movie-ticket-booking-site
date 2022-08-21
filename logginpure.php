<?php
    include("dbs.php");
?>
<html>
    <head>
        <title>The Login page of the My Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    </head>
    <body>
        <?php 
        $msg='';
        if(isset($_POST["name1"]))
        {
           
                //$con =mysqli_connect('localhost','root','','detail');
                if(!$con)
                {
                    echo "not connect";
                }
                //$fname = $_POST["name01"];
                //$phone = $_POST["name02"];
                $userName = $_POST["name1"];
                $password = $_POST["name2"];
                $movie=$_POST["movieid"];
                //$compassword = $_POST["name05"];
                $myone = mysqli_query($con,"select * from `userdetail` where useremail='$userName' and newpassword='$password'");
                //$row  = mysqli_fetch_assoc($myone);
              
                   // while($row  = mysqli_fetch_assoc($myone))
                   // {
                        //if($row['useremail']==$userName and $row['newpassword']==$password)
                       // {
                        // $quryString = "firstName=$firstName&amp;age=$age";
                        
                          //  $user_no="userName=".$row['user_no']."&movieid=".$_POST['movieid'];
                          //  header("Location:seatBooking.php".$user_no);
                          //  break;
                       // }
                        // else{
                        //echo "<script> alert('jhsdcvjhsdfv');</script>";
                       // echo  "<script> alert('Please Enter The Correct password or User Nme ')</script>";
                        //document.getElementById('p1').innerHTML="Hello ,I have Updated:";
                       // }
                       
                  // }
                if($myone){ ?>
              
                <?php 
                  //header('Location:https://moviesdagrp05.000webhostapp.com/seatBooking.php',true);
                  echo "<script> window.location.href='seatBooking.php?movieid=".$movie."'</script>";
                    $msg='inside';
                }else{
                    $msg='incorect password';
                }
               

            
           
        }
        
    ?>
                <form action = ""  method = "post">
                    <section class = "header">
                        <div class = "logo">
                            <img src= "logo.png">
                        </div>
                        <div class="banner">
                            <div class = "middle">
                                <h3>Sign In</h3>
                                <br>
                                <input type="hidden" name="movieid" value="<?php echo $_GET["movieid"]?>">
                                Email or Username  :<br>
                             
                                <input type="hidden" name="userName" >
                                <input type = "text" name = "name1"  required><br><br>
                                Password :<br>
                                <input type = "password" name = "name2">
                                <p id="demo" style="display:none">Hi</p>
                                <br>
                                
                            </div>
                            <div class = "button">
                                <?php  echo $msg; ?>
                                <input type="submit" class ="hero-btn" name="sub" value="submit">LOGIN</button>
                            </div>
                            <div class="singup">
                                Don't have an accountssss? <a href="">Sign up</a>
                            </div>
                        </div>
                    </section>
                </form>
       
           
<scritp>
    
</scritp>
    </body>
</html>