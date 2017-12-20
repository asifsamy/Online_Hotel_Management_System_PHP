<?php
   include("db.php");
   session_start();
   extract($_POST);

   if (isset($_POST['login2'])) {

      $res2 = mysql_query("select * from customer where email = '$email' and password = '$password'");
    
      if(mysql_num_rows($res2) < 1){
      ?>
        <script>
        alert('Wrong Email or Password !..');
        window.location='user2.php'
        </script>
        <?php
      } else {
        $_SESSION['email_u'] = $email;
        ?>
        <script>
        window.location='user4.php'
        </script>
        <?php
      }
  }

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
              <li><a href="events.php">Events</a></li>
              <li class="active"><a href="user.php">User</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
              <li><a href="contact.php"><span class="glyphicon glyphicon-map-marker"></span> Contact</a></li>
            </ul>
          </div>
        </div>
      </nav> 
      
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 style="font-family: Courier New, Courier, monospace">User Login</h1>
      <hr style="color: #000000; border-width: 3px;">
    </div><br><br>
    <div class="col-sm-4">
      &nbsp;
    </div>
    <div class="col-sm-4">

      <form action="" method="post">

        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="email" type="text" class="form-control" name="email" placeholder="Email" required />
        </div><br>

        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required />
        </div><br>

        <button class="btn btn-primary" name="login2" type="submit">LOGIN</button>
      </form><br>
      <p>Not Yet Regiterred? <a href="register.php">CLICK HERE</a></p>
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