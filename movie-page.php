<?php
include("dbs.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <title>movie page</title>

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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        img {
            height: 280px;
        }
        
        body {
            background: hsl(0, 0, 94%);
        }
    </style>
</head>

<body style="background-color: #050A30; ">

<?php 
       if(!$con)
       {
           echo "not connected";
       }
       //$row  =  mysqli_fetch_assoc($myone);
    ?>

    <section class="container-fluid header">
        <nav>
            <a href="#"><img src="logo.png" class="float-end">
                <div class="menues ">
                    <!--<i class="fa fa-times" onclick="hideMenu()" ></i>-->
                    <ul class="nav nav-pills " role="tablist">
                        <li class="nav-item">
                            <a class="nav-link "  href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#">MOVIES</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="mx-auto d-block text-box">
                </div>
                <!----<i class="fa fa-bars" onclick="showMenu()"></i>---->
        </nav>
    </section>

    <!--movies-->
    <div class="container-fluid my-5">
        <h1 class="text-center fw-bold display-1 mb-5"> <span class="text-danger">MOVIESDA</span></h1>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=01"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="01"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=02"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="02"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=03"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="03"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=04"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="04"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=05"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="05"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=06"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="06"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=07"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="07"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=08"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="08"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=09"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="09"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=10"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="10"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=11"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="11"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=12"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="12"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=13"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="13"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=14"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="14"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=15"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="15"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=16"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="16"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=17"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="17"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=18"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="18"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=19"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="19"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=20"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="20"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=21"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="21"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=22"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="22"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=23"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="23"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=24"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="24"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=25"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="25"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=26"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="26"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=27"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="27"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=28"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="28"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=29"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="29"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=30"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="30"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top"style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href=<?php $movieid="movieid=31"; echo "movieContent.php?$movieid";?> target="_blank" ><img src="<?php $result = mysqli_query($con,'select movie_id,movie_url,movie_name from`moviedetails` where movie_id="31"');
                            $row  =  mysqli_fetch_assoc($result);
                            echo $row['movie_url'];?>" alt="" class="card-img-top" style="height:450px"></a>                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4><?php echo $row['movie_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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




    <!--linked scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>