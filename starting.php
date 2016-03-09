<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 <?php
 if(isset($_POST["event"]))
 {
	 header("Location:create.html");
 }
 else if(isset($_POST["event1"]))
 {
	 header("Location:view.php");
 }
 ?>
 </head>
 <body>
 <marquee style="color:green"> Welcome to the portal! </marquee>
 <h1 align="justify" style="color:blue;margin-left:38%"> Entry Portal </h1>
 <form action="starting.php" method="post" >
  <input type="submit" name="event" style="background-color:#d3d3d3;padding:1%;font-weight:bold;border:1px solid white; margin-left:35%;margin-top:15%;position:absolute;display:block;" value="create event">
  <input type="submit" name="event1" style="background-color:red;padding:1%;color:white;font-weight:bold;margin-left:50%;margin-top:15%;position:absolute;display:block;border:1px solid white;" value="view event">
  </form>
 </body>
</html>
