
<!DOCTYPE html>
<html>
<body>

<?php
$date=date("Y/m/d");
echo $date;
?>

</body>
</html>



<?php
$x = 1;
while ($x <= 30) {
	$t_date=date("Y/m/d");
	$y = subDayswithdate($t_date, $x);
	echo "<br>" . $y;
	$x++;
}

function subDayswithdate($date,$days){

    $date = strtotime("-".$days." days", strtotime($date));
    return  date("Y-m-d", $date);

}
?>

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