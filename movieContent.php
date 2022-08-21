<?php
include("dbs.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <title>Movie Content</title>

    <!--link for the icons-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>


</head>

<body style="background-color: #050A30; ">
    <?php 
       if(!$con)
       {
           echo "not connected";
       }
       $result = mysqli_query($con,'select * from`moviedetails` where movie_id='.$_GET["movieid"]);
       $row  =  mysqli_fetch_assoc($result);
       //$row  =  mysqli_fetch_assoc($myone);
      setcookie("movieid",$_GET["movieid"],time()+365*24*60*60,"","",false,true);
    ?>

    <section class="container-fluid header">
        <nav>
            <a href="#"><img src="logo.png" class="float-end">
                <div class="menues ">
                    <!--<i class="fa fa-times" onclick="hideMenu()" ></i>-->
                    <ul class="nav nav-pills " role="tablist">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="movie-page.php">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"  href="#">Content</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="mx-auto d-block text-box">
                   
                </div>
                <!----<i class="fa fa-bars" onclick="showMenu()"></i>---->
        </nav>
    </section>

    <div style="color: white; ">
        <div class="container mt-5">

            <div class="row justify-content-start">
                <!--image part-->
                <div class= "col-4">
                    <img src="<?php echo  $row['movie_url'];?>" class="rounded" style="height:450px ; width: 300px;">
                </div>
                <div class="col-8" >
                    <div>
                        <!--name-->
                        <h1><strong><?php echo $row["movie_name"];?></strong></h1>
                    </div>
                    <div>
                        <!--director-->
                        <h3><span>By <?php echo $row["directer"];?></span></h3>
                    </div>
                    <div>
                        <!--director-->
                        <span>Rating :<?php echo $row["IMBD_rating"];?></span>
                    </div>
                    <div>
                        <!--details-->
                        <br>
                        <p><?php echo $row["description"]?>
                    </div>
                    <div>
                        <!--director-->
                        <span>Stars :<?php echo $row["stars"];?></span>
                    </div>
                </div>

            </div>

            <div>
                <!--buttom-->
                <br><br>
                <!--<?php $movieid="movieid=".$_GET["movieid"]; echo "logginpure.php?$movieid";?>-->
               <center><a href=<?php $movieid="movieid=".$_GET["movieid"]; echo "logginpure.php?$movieid";?> class="btn btn-primary rounded-pill" >Book</a></center>

            </div>
        </div>
    </div>
     <!--footer-->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <center>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/sandazz.gimhana" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/s_a_n_d_a_zz/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/sandazz-gimhana-47b5351b9/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                </center>

            </div>
        </div>
    </footer>


</body>

</html>