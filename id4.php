<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <?php
  if(isset($_POST["sans"]))
  {
	  echo "<p style='color:green'><marquee>the current time is ".date("H:i:sa")."</marquee></p>";
  }
  ?>
 </head>
 <body>
  <h1 align="center" style="color:orange;font-family:'verdana'"> A Good Evening</h1>
  <form action="" method="post">
  <input type="submit" name="sans" value="click here to know time">
  </form>
 </body>
</html>
