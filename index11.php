<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 <?php
 session_start();
 ?>
 </head>
 <?php
 
 if(isset($_POST["login"]))
 {
	 if(isset($_POST["nf"]))
	 {
	 if($_SESSION["mail"]==$_POST["nf"])
	 {
		 echo "login successfull";
	 }
     else
		 echo "invalid user please login first";
 }
     else
		 echo "please enter e-mail field";
 }
 ?>
 </body>
</html>
