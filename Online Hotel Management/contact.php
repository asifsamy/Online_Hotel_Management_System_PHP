<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Hotel Management System</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
    $(function(){
      $('.datepicker').datepicker();
    });
  </script>
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
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner" role="listbox">
            <div class="item peopleCarouselImg active">
              
                <img class="peopleCarouselImg" src="image/front5.jpg" alt="First Slide">
            </div>
            <div class="item peopleCarouselImg" style="background-image:image/nfront2.jpg">
              
                <img class="peopleCarouselImg" src="image/nfront2.jpg" alt="Second Slide">
            </div>
            <div class="item peopleCarouselImg">
                
          
                <img class="peopleCarouselImg" src="image/nfront.jpg" alt="Third Slide">
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
              <li><a href="user.php">User</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
              <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-map-marker"></span> Contact</a></li>
            </ul>
          </div>
        </div>
      </nav> 
      
  </div>
</div>

<div class="container">    

  <div class="row">
        
        <div class="col-sm-12">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.460884430251!2d-0.13301252240929382!3d51.50651527467666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2snp!4v1414314152341" width="100%" height="300" frameborder="0"></iframe> 
        </div>


    <div class="col-sm-6 col-sm-offset-3">
      <div class="spacer">      

          <h4>Write to us</h4>
      <form role="form">
      <div class="form-group">  
      <input type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
      <input type="phone" class="form-control" id="phone" placeholder="Phone">
      </div>
      <div class="form-group">
      <textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
      </div>
          
      <button type="submit" class="btn btn-default">Send</button>
      </form>
      </div>


        </div>





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
    <script src="js/bootstrap-datepicker.js"></script>
  </body>
</html>