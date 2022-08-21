<?php
include("dbs.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MoviesDA</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0" >
        <link rel="stylesheet" href="css seatbook/bootstrap.css">
        <link rel="stylesheet" href="style-seatbook.css">
        <script src="js seatbook/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <head>
        <body>
        <?php 
        if(!isset($_POST["submit"]) and !isset($_POST["lastStep"]))
        {
          $movie = mysqli_query($con,"select * from `moviedetails` where movie_id=".$_GET['movieid']);
          $column = mysqli_fetch_assoc($movie);
        }
        if(isset($_POST["submit"]))
        {
          $movie = mysqli_query($con,"select * from `moviedetails` where movie_id=".$_POST['movieid']);
          $column = mysqli_fetch_assoc($movie);
            if(!$con)
            {
                echo "not connected";
            }
            $moviedet = $column["movie_name"];
            $theator = $_POST["theator"];
            $time = $_POST["time"];
            $result = mysqli_query($con,"select seat from `seatbooking` where movie='$moviedet' and theators='$theator' and time='$time'");
          // $row = mysqli_fetch_assoc($result);
           // $seat = array();
          // $seat = explode(',',$row["seat"]);
           STATIC $seat = array();
            //$seat = explode(',',$row["seat"]);
            while($row  = mysqli_fetch_assoc($result))
            {
              $temp = explode(',',$row["seat"]);
              $seat=array_merge($seat,$temp);
            }
            
        }
        else
        {
            $seat = array();
        }
        
            

        if(isset($_POST["lastStep"]))
        {
                //$user = mysqli_query($con,"select * from `userdetail` where user_no=".$_POST['userid']);
                //$userdet = mysqli_fetch_assoc($user);
                $movie = mysqli_query($con,"select * from `moviedetails` where movie_id=".$_POST['movieid']);
                $moviedet = mysqli_fetch_assoc($movie);
                $movie = mysqli_query($con,"select * from `moviedetails` where movie_id=".$_POST['movieid']);
                $column = mysqli_fetch_assoc($movie);
            if(!$con)
            {
                echo "Not connect";
            }
            //$price = $_POST["price"];
            $time = $_POST["time"];
            $theator = $_POST["theator"];
            //$user=$userdet["fullName"];
            $movie=$moviedet["movie_name"];
            $seat2=  " ";

            if(isset($_POST['seat']))
            {
                $seat2 = implode(',',$_POST['seat']);
                $seat3 = $seat2;
                //$subject=implode(',',$_POST['subject']);
            
            //$seat = implode(',',$_POST['seat']);
            $result = mysqli_query($con,"INSERT INTO `seatbooking`(`movie`,`theators`,`time`,`seat`) VALUES('$movie','$theator','$time','$seat2')");
            if(!$result)
            {
                echo "not connected";
            }
          }
            

        }  
        ?>
      <section class="container-fluid header">
                <nav>
                    <a href="#"><img src="logo.png" class="float-end">
                        <div class="menues ">
                            <!--<i class="fa fa-times" onclick="hideMenu()" ></i>-->
                            <ul class="nav nav-pills " role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="movie-page.php">MOVIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#">Time & Booking</a>
                                  </li>
                            </ul>
                        </div>
                        <div class="mx-auto d-block text-box">
                            <!--<h1 class="display-1"><strong>Welcome to Ticket Booking </strong></h1>-->
                        </div>
                       <!----<i class="fa fa-bars" onclick="showMenu()"></i>---->
                </nav>
            </section>
      <section style="background-color:#050A30"> 
          <!--<?php $user_no="userName=".$_GET['userName']."&movieid=".$_GET['movieid'];?>-->  
          <form action="seatBooking.php" method="post">
            <section class="movieinfo">
                <h1 id="#demo"><?php echo $column["movie_name"]?></h1>
                <div class="row">
                    <div class="moviesimg-col">
                        <img src="<?php echo $column["movie_url"] ?>" style="height:450px; width:300px;">
                    </div>
                    <div class="movies-col">
                        <h1>THEATERS</h1>
                        <p>We are providing all theater facility in jaffna city</p>
                        <div class="dropdown" style="margin:20px">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" >
                              Select the Theater
                            </button>
                            <select class="dropdown-menu" name="theator">
                              <option value="Rigal" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["theator"]=="Rigal" ? 'selected':'';} ?>><a class="dropdown-item" href="#">Rigal</a></option>
                              <option  value="Raanil" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["theator"]=="Raanil" ? 'selected':'';} ?>><a class="dropdown-item" href="#">Raanil</a></option>
                              <option  value="Selva" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["theator"]=="Selva" ? 'selected':'';} ?>><a class="dropdown-item" href="#">Selva</a></option>
                              <option  value="BigShow" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["theator"]=="BigShow" ? 'selected':'';} ?>><a class="dropdown-item" href="#">BigShow</a></option>
                            </select>
                        </div>
                        <?php 
                           if(!isset($_POST["submit"]) and !isset($_POST["lastStep"]))
                           {
                              //echo "<input type='hidden' name='userid' value=".$_GET['userName'].">";
                              echo "<input type='hidden' name='movieid' value=".$_GET['movieid'].">";
                           }
                           else if(isset($_POST["submit"]) or isset($_POST["lastStep"])){
                              //echo "<input type='hidden' name='userid' value=".$_POST['userid'].">";
                              echo "<input type='hidden' name='movieid' value=".$_POST['movieid'].">";
                           }
                            ?>
                        <h1>THEATERS</h1>
                        <p>We are providing all theater facility in jaffna city</p>
                        <div class="dropdown" >
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                              Pick you Time
                            </button>
                            <select class="dropdown-menu" name="time">
                              <option  value="8.00" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["time"]=="8.00" ? 'selected':'';} ?>><a class="dropdown-item" href="#">8.00AM</a></option>
                              <option value="12.00" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["time"]=="12.00" ? 'selected':'';} ?>><a class="dropdown-item" href="#">12.00PM</a></option>
                              <option  value="3.00" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["time"]=="3.00" ? 'selected':'';} ?>><a class="dropdown-item" href="#">3.00PM</a></option>
                              <option  value="7.00" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["time"]=="7.00" ? 'selected':'';} ?>><a class="dropdown-item" href="#">7.00PM</a></option>
                              <option  value="10.00" <?php if(isset($_POST["submit"]) or isset($_POST["lastStep"])){echo $_POST["time"]=="10.00" ? 'selected':'';} ?>><a class="dropdown-item" href="#">10.00PM</a></option>
                            </select>
                            <input type="submit" name="submit" value="check the available Seats" class="btn btn-outline-danger"><!--seatChecking()-->
                        </div>
                    </div> 
                  </div>
              </div>
            </section>
            
            <section class="seatBooking">
              <h1 >Book Your Seat</h1>
              <div class="movie-container">
                
              </div>
               <ul class="showcase">
                  <li>
                    <div class="seat"></div>
                    <small>N/A</small>
                  </li>
            
                  <li>
                    <div class="seat selected"></div>
                    <small>Selected</small>
                  </li>
            
                  <li>
                    <div class="seat occupied"></div>
                    <small>Occupied</small>
                  </li>
                </ul>
        
                <div class="container" >
                  <div class="screen"></div>
                  <div class="rowscreen">
                    <div class="seat_num"></div>
                    <div class="seat_num">01</div>
                    <div class="seat_num">02</div>
                    <div class="seat_num">03</div>
                    <div class="seat_num">04</div>
                    <div class="seat_num">05</div>
                    <div class="seat_num">06</div>
                    <div class="seat_num">07</div>
                    <div class="seat_num">08</div>
                  </div>
                  <div class="rowscreen">
                    <div class="seat_num">A1</div>
                    <input type="checkbox" class="seat" name="seat[]" value="01" <?php echo in_array('01',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="02" <?php echo in_array('02',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="03" <?php echo in_array('03',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="04" <?php echo in_array('04',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="05" <?php echo in_array('05',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="06" <?php echo in_array('06',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="07" <?php echo in_array('07',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="08" <?php echo in_array('08',$seat) ? 'disabled readonly':''; ?>>
                  </div>
                  <div class="rowscreen">
                    <div class="seat_num">A2</div>
                    <input type="checkbox" class="seat" name="seat[]" value="09" <?php echo in_array('09',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="10" <?php echo in_array('10',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="11" <?php echo in_array('11',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="12" <?php echo in_array('12',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="13" <?php echo in_array('13',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="14" <?php echo in_array('14',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="15" <?php echo in_array('15',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="16" <?php echo in_array('16',$seat) ? 'disabled readonly':''; ?>>
                  </div>
            
                  <div class="rowscreen">
                    <div class="seat_num">A3</div>
                    <input type="checkbox" class="seat" name="seat[]" value="17" <?php echo in_array('17',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="18" <?php echo in_array('18',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="19" <?php echo in_array('19',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="20" <?php echo in_array('20',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="21" <?php echo in_array('21',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="22" <?php echo in_array('22',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="23" <?php echo in_array('23',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="24" <?php echo in_array('24',$seat) ? 'disabled readonly':''; ?>>
                  </div>
            
                  <div class="rowscreen">
                    <div class="seat_num">A4</div>
                    <input type="checkbox" class="seat" name="seat[]" value="25" <?php echo in_array('25',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="26" <?php echo in_array('26',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="27" <?php echo in_array('27',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="28" <?php echo in_array('28',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="29" <?php echo in_array('29',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="30" <?php echo in_array('30',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="31" <?php echo in_array('31',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="32" <?php echo in_array('32',$seat) ? 'disabled readonly':''; ?>>
                  </div>
            
                  <div class="rowscreen">
                    <div class="seat_num">A5</div>
                    <input type="checkbox" class="seat" name="seat[]" value="33" <?php echo in_array('33',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="34" <?php echo in_array('34',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="35" <?php echo in_array('35',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="36" <?php echo in_array('36',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="37" <?php echo in_array('37',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="38" <?php echo in_array('38',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="39" <?php echo in_array('39',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="40" <?php echo in_array('40',$seat) ? 'disabled readonly':''; ?>>
                  </div>
            
                  <div class="rowscreen">
                    <div class="seat_num">A6</div>
                    <input type="checkbox" class="seat" name="seat[]" value="41" <?php echo in_array('41',$seat) ? 'disabled readonly':''; ?>> 
                    <input type="checkbox" class="seat" name="seat[]" value="42" <?php echo in_array('42',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="43" <?php echo in_array('43',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="44" <?php echo in_array('44',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="45" <?php echo in_array('45',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="46" <?php echo in_array('46',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="47" <?php echo in_array('47',$seat) ? 'disabled readonly':''; ?>>
                    <input type="checkbox" class="seat" name="seat[]" value="48" <?php echo in_array('48',$seat) ? 'disabled readonly':''; ?>>
                  </div>
                </div>
        
            
               
                <script src="style.js"></script>

            </section>
            <center>
            <input type="submit" name="lastStep" value="CONFIRM" class="btn btn-primary"  href="#detail" role="button"><br><br>
            <!--button to open the modal-->
            <a class="btn btn-primary" data-bs-toggle="modal" href="#detail" role="button">book the ticket</a>
            </center>
            
          </form>  <br><br>

          <footer class="footer">
            <div class="container">
                <div class="row">
                    <center>
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </center>

                </div>
            </div>
         </footer>



<!--modal 01 details-->
<div class="modal fade" id="detail" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailLabel">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--selected film-->
                <span>Film : <?php echo  $movie?></span><br>
                <!--selected city-->
                <span>City : Jaffna</span><br>
                <!--selected theator-->
                <span>Theator :<?php echo  $theator?></span><br>
                <!--selected date and time-->
                <span>Time : <?php echo  $time?></span><br>
                <!--seleceted seats-->
                <span>Seats :<?php echo  $seat2;?></span></span><br>
                <hr>
                <!--calculated payment for the seats-->
                <h3 class="text-center"><span>(price)</span></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary rounded-pill" data-bs-target="#success" data-bs-toggle="modal" data-bs-dismiss="modal">Book Now</button>
            </div>
        </div>
    </div>
</div>


<!--modal 02 success-->
<div class="modal fade" id="success" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" ">
    <div class="modal-dialog modal-dialog-centered modal-backdrop-success text-white ">
        <div class="modal-content modal-success border border-5 border-success " style="background-color: #30a33b; border-color: #00c900; ">
            <!--
                header - word success in the header
            <div class="modal-header ">
                <h5 class="modal-title " id="successLabel ">Success</h5>
                <button type="button " class="btn-close " data-bs-dismiss="modal " aria-label="Close "></button>
            </div>-->
            <div class="modal-body ">
                <h3 class="modal-title " id="successLabel ">Success</h3>

                <span>Order No  :<?php echo(rand(10,1000))?></span><br>
                <span>Details   :<?php echo  $movie.",".$theator.",".$time?></span><br>
                <!--qr is here-->
                <div class="text-center ">
                    <img src="QR.png" alt="produced QR " style="width:200px ; ">
                </div>
                <hr>
                <h2 class="text-center ">Thank you !</h2>
                <a class="btn btn-primary rounded-pill float-end " href="index.php " data-bs-toggle="modal " data-bs-dismiss="modal ">home</a>

            </div>
            <!--
            footer - the button home
            </div>
            <div class="modal-footer ">
                <button class="btn btn-primary rounded-pill " data-bs-target="#detail " data-bs-toggle="modal " data-bs-dismiss="modal ">home</button>
            </div>-->
     </div>
    </div>
</div>


    </section>
        </body>
</html>