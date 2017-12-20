<?php
   include("db.php");
   session_start();
   
   $x = $_GET['id'];

   $rs = mysql_query("SELECT rv.re_id, rm.type, rv.res_room, rn.c_in, rn.c_out, cs.firstName, cs.phone, rm.price, rn.stay FROM reserve rv, reservation rn, rooms rm, book bk, customer cs WHERE rv.re_id='$x' and rn.re_id = '$x' and  bk.re_id='$x' and rv.room_no=rm.room_no and bk.cs_id=cs.cs_id"); 

     // and rv.checked='1' and rn.c_out='$t_date'
   
   if ($rs) {
     $rowr=mysql_fetch_array($rs);
     // echo $rowr[0] . "<br>";
     // echo $rowr[5] . "<br>";
     // echo $rowr[6] . "<br>";
     // echo $rowr[3] . "<br>";
     // echo $rowr[4] . "<br>";
     // echo $rowr[1] . "<br>";
     // echo $rowr[2] . "<br>";
     // echo $rowr[8] . "<br>";
     $r_cost = $rowr[8] * $rowr[7] * $rowr[2];
     // echo $r_cost . "Tk."; 

   } else {
     die(mysql_error());
   }
?>


<?php
   require("fpdf/fpdf.php");

   $pdf = new FPDF();

   $pdf->AddPage();

   $pdf->Image("image/ph.png");
   
   $pdf->SetFont("Courier", "", "20");
   $pdf->Cell(0, 10, "Customer's Pay Slip", 1, 1, "C");
   
   $pdf->SetFont("Courier", "", "15");
   $pdf->Cell(0, 7, "Reservation Number: $rowr[0]", 0, 1);
   $pdf->Cell(0, 7, "Customer Name: $rowr[5]", 0, 1);
   $pdf->Cell(0, 7, "Cell-Phone Number: $rowr[6]", 0, 1);
   $pdf->Cell(0, 7, "Check-in Date: $rowr[3]", 0, 1);
   $pdf->Cell(0, 7, "Check-out Date: $rowr[4]", 0, 1);
   $pdf->Cell(0, 7, "Room Type: $rowr[1]", 0, 1);
   $pdf->Cell(0, 7, "Number of Rooms: $rowr[2]", 0, 1);
   $pdf->Cell(0, 7, "Stayed (night): $rowr[8]", 0, 1);
   $pdf->Cell(0, 7, "Total Cost = $r_cost Tk.", 1, 1);

   $pdf->SetFont("Arial", "", "18");
   $pdf->Cell(0, 10, "Thank You.", 0, 1, "C");
   // $pdf->SetFont("Arial", "I", "15");
   // $pdf->Cell(0, 10, "My PDf", 1, 1, "C");

   // $pdf->SetFont("Arial", "I", "15");
   // $pdf->write(5, "jgkkkkkkkkfgagg");
   
   

   $pdf->Output();

?>          