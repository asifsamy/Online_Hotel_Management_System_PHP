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
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner" role="listbox">
            <div class="item peopleCarouselImg active">
              
                <img class="peopleCarouselImg" src="image/reg.jpg" alt="First Slide">
            </div>
            <div class="item peopleCarouselImg" style="background-image:image/del.jpg">
              
                <img class="peopleCarouselImg" src="image/del.jpg" alt="Second Slide">
            </div>
            <div class="item peopleCarouselImg">
                
          
                <img class="peopleCarouselImg" src="image/suit.jpg" alt="Third Slide">
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
              <li class="active"><a href="rooms.php">Rooms & Suites</a></li>
              <li><a href="#">Rstuarent</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="user.php">User</a></li>
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


<div class="container text-center">
  <div class="row">
     <div class="col-sm-12">
       <!-- <font style="color: #0000cc; font-size: 30px;">Make a resrvation</font> -->
        <form class="form-inline" name="res2" action="reservation.php" method="post">      
          <div class="form-group">           
            <input type="text" id="chkin" name="chkin" class="datepicker" value="" placeholder="Check In" data-date-format="yyyy-mm-dd" required />         
          </div>  

          <div class="form-group">           
            <input type="text" id="chkout" name="chkout" class="datepicker" value="" placeholder="Check Out" data-date-format="yyyy-mm-dd" required />          
          </div>
          
          <div class="form-group">          
            <select id="room_t" name="room_t" class="form-control" style="padding-left:3px;" required />
              <option>Room Type</option>
              <option value="Regular">Regular</option>
              <option value="Deluxe">Deluxe</option>
              <option value="Suite">Suite</option>        
            </select>         
          </div> 

          <div class="form-group">          
            <select id="room_n" name="room_n" class="form-control" style="padding-left:3px;" required />
              <option>No. of Room</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>         
            </select>         
          </div>
                    
          <div class="form-group">            
            <select id="guest_n" name="guest_n" class="form-control" required />
              <option>Guest</option>  
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="10+">10+</option>      
            </select>         
          </div>
                  
          <button class="btn btn-info" type="submit">CHECK AVAILABILITY <font style="color: #0000cc; font-size: 15px"></font></button>
        </form> 

     </div>    
  </div> 
</div>


<div class="container">    
  <div class="row">
    
    <div class="col-sm-12">
      <h1 style="font-family: Courier New, Courier, monospace">Rooms &amp; Suites</h1>
      <hr style="color: #000000; border-width: 3px;">
    </div>

    <div class="col-sm-12">
       <p style="font-size: 17px;font-family: Arial, Helvetica, sans-serif">Come and experience what our guests talk wildly about – splendid feelings of staying very close to sea! Our rooms and suites are designed to ensure both sea and hill side of beautiful Cox’s bazar. Whatever your expectation, we can match it with rooms and suites ranging from deluxe to presidential suite.<br><br>
       We have both hill side and sea side rooms and suites to meet the needs of all type of guest.</p><p>&nbsp;</p><p>&nbsp;</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <h1 style="font-family: Courier New, Courier, monospace">Tariff</h1>
      <hr style="color: #000000; border-width: 3px;">
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
      <table class="table tariff">
        <thead>
          <tr>
            <th colspan="2">Room/Suite Type</th><th colspan="2" style="text-align:center;">Single</th><th colspan="2" style="text-align:center;">Double</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td>BDT</td>
            <td>USD</td>
            <td>BDT</td>
            <td>USD</td>
          </tr>
          <tr>
            <td rowspan="2">Regular</td>
            <td>Sea Side</td>
            <td>5,059</td>
            <td>$66</td>
            <td>5,059</td>
            <td>$66</td>
          </tr>
          <tr>
            <td>Hill Side</td>
            <td>4,743</td>
            <td>$62</td>
            <td>4,743</td>
            <td>$62</td>
          </tr>
          <tr>
            <td rowspan="2">Deluxe</td>
            <td>Sea Side</td>
            <td>6,166</td>
            <td>$80</td>
            <td>6,166</td>
            <td>$80</td>
          </tr>
          <tr>
            <td>Hill Side</td>
            <td>5,850</td>
            <td>$76</td>
            <td>5,850</td>
            <td>$76</td>
          </tr>
          <tr style="border-bottom: 1px solid #dddddd;">
            <td colspan="2">Suite</td>
            <td>12,648</td>
            <td>$164</td>
            <td>12,648</td>
            <td>$164</td>
          </tr>
        </tbody>
      </table>
      <br> 
      <ul>
        <li><p>Maximum 2 adutls and 1 child per room</p></li>
        <li><p>Room tariffs are subject to 10% service charge and 15% VAT</p></li>
        <li><p>Check-In time is at 02:00 PM and check-out time is at 12:00 PM</p></li>
        <li><p>Rates are subject to change without prior notice</p></li>
      </ul>
    </div>

  </div><br><br>

  <div class="row">
    <div class="col-sm-12">
    <h1 style="font-family: Courier New, Courier, monospace">Amenities</h1>
    <hr style="color: #000000; border-width: 3px;">
  </div>
    <div class="col-sm-4">
      <h4>On Premises</h4> 
      <ul>
        <li><p>Bar</p></li>
        <li><p>Car Rental</p></li>
        <li><p>Wi-Fi Internet Connection in all public areas</p></li>
        <li><p>Complimentary newspaper</p></li>
        <li><p>Currency Exchange</p></li>
        <li><p>Business Centre</p></li>
        <li><p>Locker facility</p></li>
        <li><p>24 hours room services</p></li>
        <li><p>Conference and Banquet facility</p></li>
        <li><p>Airport transfer</p></li>
      </ul>
    </div>

    <div class="col-sm-4">
      <h4>In Rooms</h4>
      <ul>
        <li><p>Central air conditioning</p></li>
        <li><p>Hot & cold water</p></li>
        <li><p>Comfortable working desk with table lamp</p></li>
        <li><p>High Speed Internet access</p></li>
        <li><p>In room safe (suite only)</p></li>
        <li><p>Shopping Arcade</p></li>
        <li><p>Doctor on call</p></li>
        <li><p>Mini bar</p></li>
        <li><p>IDD Telephone</p></li>                                 
      </ul>
    </div>

    <div class="col-sm-4">
      <h4>Inside Hotel</h4>
      <ul>
        <li><p>Hairdresser</p></li>
        <li><p>Fitness centre</p></li>
        <li><p>Shopping Arcade</p></li>
        <li><p>Hot Spa & Massage</p></li>
        <li><p>Swimming pool</p></li>
        <li><p>Cyber Cafe</p></li>                                
      </ul>
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