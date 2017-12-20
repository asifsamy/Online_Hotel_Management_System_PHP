<?php
   include("db.php");
   session_start();
   extract($_POST);
   $rs_id = $res_id;

   //$e = $_SESSION['email_u'];
   $res2 = mysql_query("select * from customer where email = '$_SESSION[email_u]'");
   $row1 = mysql_fetch_array($res2);

   $cus_id = $row1[0];  

   $sql2 = mysql_query("select * from reservation where re_id = '$rs_id'");
   $row2 = mysql_fetch_array($sql2);  

   $dx = date("Y/m/d");
   $d1 = date_create("$dx");
   $d2 = date_create("$row2[1]");
   $diff = date_diff($d1, $d2);
   $ds = $diff->format("%a");  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rooms and Suites</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 10px;
      padding-bottom: 0px;
      background-color: #e6f5ff
    }
   
    /* Add a background color and some padding to the footer */
    footer {
      background-color: #b3e0ff;
      padding: 25px;
    }
    .peopleCarouselImg img {
      width: 1180px;
      height: 400px;
      max-height: 400px;
   }
   p{
    font-size: 17px;font-family: Arial, Helvetica, sans-serif;
   }
   td, th{
    font-size: 17px;font-family: Arial, Helvetica, sans-serif;
   }
  </style>
</head>
<body>

<div class="container text-center">
     <h1 style="color: #0000cc">Online Hotel Mangement System</h1>
</div>

<div class="jumbotron">
  <div class="container text-center">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner" role="listbox">
            <div class="item peopleCarouselImg active">
              
                <img class="peopleCarouselImg" src="image/front2.jpg" alt="First Slide">
            </div>
            <div class="item peopleCarouselImg" style="background-image:image/del.jpg">
              
                <img class="peopleCarouselImg" src="image/front3.jpg" alt="Second Slide">
            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse" style="width: 1140px; margin-left: 0px">
      <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
           </button>
          </div>
         <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="user.php">User Details</a></li>
              <li class="active"><a href="c_reservation.php">Cancel Reservation</a></li>
              <li><a href="#">Resrervation Info</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"> Logout</a></li>
            </ul>
          </div>
        </div>
      </nav> 
      
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 style="font-family: Courier New, Courier, monospace">Hello <?php echo $row1[1] . " " . $row1[2]; ?></h1>
      <hr style="color: #000000; border-width: 3px;">
    </div><br><br>
    <div class="col-sm-12">
      <?php
        if ($ds >= 2) {

         $sql3 = mysql_query("DELETE FROM book WHERE cs_id = '$cus_id' AND re_id = '$rs_id'"); 
         
         if ($sql3) {
         
           $sql4 = mysql_query("DELETE FROM reserve WHERE re_id = '$rs_id'");

           $sql5 = mysql_query("DELETE FROM reservation WHERE re_id = '$rs_id'");

           if ($sql4 && $sql5) {  ?>
             <p>Reservation is cancelled Successfully!</p>
             <p>Thank You</p>

      <?php   
           } else {
             die(mysql_error());  ?>
             <p>Please Logout & Try again. Thank You</p>
    <?php  }
        } else {
            die(mysql_error());  ?>
            <p>Please Logout & Try again. Thank You</p> 
        <?php   
        }
      } else { ?>
         <p>Sorry!</p>
         <p>Your Reservation Cancellation Time is UP</p>
      <?php  
      }  ?>
     
    </div>
  </div>
  
</div><br><br><br>

<footer class="container-fluid text-center">
  <p>Online Management Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>