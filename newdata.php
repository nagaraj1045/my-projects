<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <?php
  $database="CREATE DATABASE event";
  $table="CREATE TABLE event2(
  id MEDIUMINT NOT NULL AUTO_INCREMENT,
  name CHAR(10) NOT NULL,
  venue CHAR(10) NOT NULL,
  date DATE NOT NULL,
  rules VARCHAR(100) NOT NULL,
  PRIMARY KEY(id))";
  ?>
 </head>
 <body>
  <?php
  $link=mysqli_connect("localhost","root","");
  if(!$link)
  die("could not connect the database".mysqli_error($link));
  $db_Authenciate=mysqli_query($link,$database);
  if($db_Authenciate==TRUE)
  echo "successfully created database";
  mysqli_select_db($link,"event");
  $table_authenciate=mysqli_query($link,$table);
  if(!$table_authenciate)
  die("could not create the table".mysqli_error($link));
  else
  echo "table created successfully";
  ?>
 </body>
</html>
