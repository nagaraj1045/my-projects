<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <?php
session_start();

?>  
 </head>
 <body>
  <?php

 if(isset($_POST["submitvalue"])) 
  {
$d=$_POST['E-mail_id'];$a=$_POST['start'];$b=$_POST['First_name'];$c=$_POST['Last_name'];$e=$_POST['Phone_number'];$f=$_POST['Car_Model'];$g=$_POST['Car_number'];
$sd="INSERT INTO user_reg(title,firstname,lastname,email,phone,car_model,car_number)VALUES('$a','$b','$c','$d','$e','$f','$g')";
include("link.php");
mysqli_select_db($link,"car_parking");
$dr=mysqli_query($link,$sd);
  if(!$dr)
  die("could not enter data in the database".mysqli_error($link));
  else
  echo "data entry successfull";
$_SESSION["mail"]=$d;
  }
  ?>
 </body>
</html>
