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

  <script>
    var email = document.registration.mail.value;
    var pass1 = document.registration.password1.value;
    var pass2 = document.registration.password2.value;
    var fname = document.registration.fname.value;
    var lname = document.registration.lname.value;
    var phone = document.registration.cell.value;

    var emailPattern = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
    var letters = /^[A-Za-z]+$/; 
    var numbers = /^[0-9]+$/;

    if(!fname.match(letters)){  
      alert('First Name contain only letters');
      return false; 
    }

    if(!lname.match(letters)){  
      alert('Last Name contain only letters');
      return false; 
    }

    if(!emailPattern.test(email))
    {
      msg = "Email is not valid";
      document.getElementById("err").innerHTML = msg;
      return false;
    }

    if (pass1 != pass2) {
      alert('Password have to be same');
      return false;
    }

    if(!phone.match(numbers))  
    {  
      alert('Phone Number contain only numbers');
      return false; 
    }

  </script>

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
      <h1 style="font-family: Courier New, Courier, monospace">User Registration</h1>
      <hr style="color: #000000; border-width: 3px;">
    </div><br><br>
    <div class="col-sm-4">
      &nbsp;
    </div>
    <div class="col-sm-4">

      <form action="register2.php" name="registration" method="post" onsubmit="return validation()";>

        <div class="input-group">
          <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" required minlength="2" />
        </div><br>

        <div class="input-group">
          <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required minlength="2" />
        </div><br>

        <div class="input-group">
          <input id="mail" type="text" class="form-control" name="mail" placeholder="Email" required minlength="8" />
        </div><br>

        <div class="input-group">
          <input id="password1" type="password" class="form-control" name="password1" placeholder="Password" required minlength="5" />
        </div><br>

        <div class="input-group">
          <input id="password2" type="password" class="form-control" name="password2" placeholder="Re-type Password" required minlength="5" />
        </div><br>

        <div class="input-group">
          <input id="cell" type="text" class="form-control" name="cell" placeholder="Phone Number" required minlength="11" />
        </div><br>

        <button class="btn btn-primary" name="login2" type="submit">Register</button>
      </form><br>
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