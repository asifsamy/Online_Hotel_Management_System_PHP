<?php
   include("db.php");
   session_start();

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
              <li><a href="t_book.php">Today's Payments</a></li>
              <li><a href="ad_reservation.php">Reservations</a></li>
              <li><a href="t_checkin.php">Today's Check-in</a></li>
              <li><a href="t_checkout.php">Today's Check-out</a></li>
              <li><a href="#">Rstuarent</a></li>
              <li class="active"><a href="month.php">Monthly Income</a></li>
              <li><a href="#">Search</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin_logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav> 
      
  </div>
</div><br><br><br>
   
   <div class="container">    
        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
          <table class="table tariff">
            <thead>
               <tr>
                 <th>Reservattion ID</th>
                 <th>Name</th>
                 <th>Cell No</th>
                 <th>Check in Date</th>
                 <th>Check out Date</th>
                 <th>Room Type</th>
                 <th>No. of Rooms</th>  
                 <th>No. of Nights</th>               
                 <th>Total Cost</th>
                 
               </tr>
            </thead>
            <tbody>
<?php

  function subDayswithdate($date, $days){
    $date = strtotime("-".$days." days", strtotime($date));
    return  date("Y-m-d", $date);
  }

  $inc = 1; $t_cost = 0;
  while ($inc <= 30) {
  $t_date=date("Y/m/d");
  $y_date = subDayswithdate($t_date, $inc);
  $inc++;

  $rs = mysql_query("SELECT rv.re_id, rm.type, rv.res_room, rn.c_in, rn.c_out, cs.firstName, cs.phone, rm.price, rn.stay FROM reserve rv, reservation rn, rooms rm, book bk, customer cs WHERE rv.re_id=rn.re_id and rv.room_no=rm.room_no and rv.re_id = bk.re_id and bk.cs_id=cs.cs_id and rv.checked='2' and rn.c_out='$y_date'");
    while($rowr=mysql_fetch_array($rs)) { ?>
       <tr>
          <td><?php echo $rowr[0]; ?></td>
          <td><?php echo $rowr[5]; ?></td>   
          <td><?php echo $rowr[6]; ?></td> 
          <td><?php echo $rowr[3]; ?></td>
          <td><?php echo $rowr[4]; ?></td> 
          <td><?php echo $rowr[1]; ?></td>
          <td><?php echo $rowr[2]; ?></td> 
          <td><?php echo $rowr[8]; ?></td>
          <td><?php 
            $r_cost = $rowr[8] * $rowr[7] * $rowr[2];
            echo $r_cost . "Tk."; 
            $t_cost += $r_cost;
          ?></td>           
        </tr>
    <?php
    }

  }
?>
    


     <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>   
        <td>&nbsp;</td> 
        <td>&nbsp;</td>
        <td>&nbsp;</td> 
        <td>&nbsp;</td>
        <td>&nbsp;</td> 
        <td>Total = </td>
        <td><?php echo $t_cost . "Tk."; ?></td>           
      </tr>

    </tbody>
  </table>
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
