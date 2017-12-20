<?php
   include("db.php");
   session_start();
   
   $rm_t = $_POST['room_t'];
   $ck_in = $_POST['chkin'];
   $ck_out = $_POST['chkout'];
   $no_of_room = $_POST['room_n'];
   $no_of_adults = $_POST['guest_n'];
   
   $d1 = date_create("$ck_in");
   $d2 = date_create("$ck_out");
   $diff = date_diff($d1,$d2);;

   $_SESSION['rm_t'] = $rm_t;
   $_SESSION['ck_in'] = $ck_in;
   $_SESSION['ck_out'] = $ck_out;
   $_SESSION['no_of_room'] = $no_of_room;
   $_SESSION['no_of_adults'] = $no_of_adults;

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
              <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="rooms.php">Rooms & Suites</a></li>
              <li><a href="#">Rstuarent</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="user.php">User</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Contact</a></li>
            </ul>
          </div>
        </div>
      </nav> 
      
  </div>
</div>

<?php
   $rm = mysql_query("SELECT room_no, qty, price FROM rooms WHERE type='$rm_t'");
   $rowm = mysql_fetch_array($rm);
   
   $night = $diff->format("%a");
   $_SESSION['night'] = $night;

   $x = $rowm[0]; $_SESSION['rm_no'] = $rowm[0];
   $pr = $no_of_room * $rowm[2] * $night;
   $_SESSION['pr'] = $pr;

   $rs = mysql_query("SELECT rv.res_room FROM reserve rv, reservation rn WHERE c_in<='$ck_in' and c_out>='$ck_out' and rv.room_no='$x' and rv.re_id=rn.re_id"); 

   $r_qt = 0;
   while($rowr=mysql_fetch_array($rs)){
     $r_qt += $rowr[0];
   }  
   
   if($r_qt >= $x){  ?>
     <div class="container">    
       <div class="row">
         <div class="col-sm-12">
           <h1 style="font-family: Courier New, Courier, monospace">Sorry! No <?php echo $rm_t; ?> room is available </h1>
           <hr style="color: #000000; border-width: 3px;">
         </div>
       </div>
     </div>    
   <?php
   } else {  ?>
      
      <div class="container">    
        <div class="row">
        <div class="col-sm-4">
  &nbsp;
</div>
        <div class="col-xs-4 col-sm-4 col-md-4">
          <table class="table tariff">
            <thead>
               <tr>
                 <th>Room/Suite Type:</th>
                 <td><?php echo $rm_t; ?></td>
               </tr>
            </thead>
            <tbody>
              <tr>
                <th>Check in Date: </th>
                <td><?php echo $ck_in; ?></td>                
              </tr>
              <tr>
                <th>Check out Date: </th>
                <td><?php echo $ck_out; ?></td>
              </tr> 
              <tr>
                <th>No. of Rooms: </th>
                <td><?php echo $no_of_room; ?></td>
              </tr> 
              <tr>
                <th>No. of Guests: </th>
                <td><?php echo $no_of_adults; ?></td>
              </tr>   
              <tr>
                <th>No. of Nights: </th>
                <td><?php echo $night; ?></td>
              </tr>    
              <tr>
                <th>Price: </th>
                <td><?php echo "(BDT) " . $pr . "Tk."; ?></td>
              </tr>
        </tbody><br><br>
            <tr>
              <td>&nbsp;</td>
              <td>
              <form action="user2.php" method="post">
                <button class="btn btn-primary" name="login" type="submit">RESERVE</button>
              </form></td>
            </tr>  
      </table>

   <?php
   }
?>
</div>
<div class="col-sm-4">
  &nbsp;
</div>
</div>
</div><br><br>

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