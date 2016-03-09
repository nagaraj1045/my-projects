<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <?php
  $a=$_POST['nameofEvent']; $b=$_POST['venueofEvent'];$c=$_POST['dateofEvent'];$d=$_POST['rulesofEvent'];
  $values="INSERT INTO event2(name,venue,date,rules)VALUES('$a','$b','$c','$d')";
  ?>
 </head>
 <body>
  <?php
  $link=mysqli_connect("localhost","root","");
  if(!$link)
  die("could not insert in to the table<br/>".mysqli_error($link));
  $select=mysqli_select_db($link,"event");
  if(!$select)
  die("could not select the database<br/>".mysqli_error($link));
  $insert=mysqli_query($link,$values);
  if(!$insert)
  die("could not enter the data<br/>".mysqli_error($insert));
  else
  echo "data insertion successfull<br/>";
  ?>
 </body>
</html>
