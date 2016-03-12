<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <?php
  $xyz=date("H:i:s");
  if($xyz > "06:00" and $xyz < "08:59")
  include("id1.php");
  else if ($xyz > "09:00" and $xyz < "11:59")
  include("id2.php");
  else if ($xyz > "12:00" and $xyz < "14:59")
  include("id3.php");
  else if ($xyz > "15:00" and $xyz < "17:59")
  include("id4.php");
  else if ($xyz > "18:00" and $xyz < "20:59")
  include("id5.php");
  else if ($xyz > "21:00" and $xyz < "23:59")
  include("id6.php");
  ?>
 </body>
</html>
