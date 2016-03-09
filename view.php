<?php
if(isset($_POST["submitEvent"]))
{   
	$a=$_POST['nameofEvent'];$b=$_POST['dateofEvent'];
    $view="SELECT * FROM event2 WHERE name='$a' and date='$b'"; 
	$link=mysqli_connect("localhost","root","");
  if(!$link)
  die("could not insert in to the table<br/>".mysqli_error($link));
  $select=mysqli_select_db($link,"event");
  if(!$select)
  die("could not select the database<br/>".mysqli_error($link));
 $query=mysqli_query($link,$view);
  if(!$query)
	{
	  die("could not query the <br/>".mysqli_error($link));
	}
  while($rows=mysqli_fetch_array($query))
	{
      echo "<table cellspacing='8'cellpadding='10' style='border:1px solid black;margin-left:35%;margin_top:10%;'>";
      echo "<tr>";
      echo "<td> id </td>";
      echo "<td> name </td>";
      echo "<td> venue </td>";
      echo "<td> date </td>";
      echo "<td> rules </td>";
      echo "</tr>";	  
	  echo "<tr>";
	  echo "<td>".$rows["id"]."</td>";
	  echo "<td>".$rows["name"]."</td>";
	  echo "<td>".$rows["venue"]."</td>";
	  echo "<td>".$rows["date"]."</td>";
	  echo "<td>".$rows["rules"]."</td>";
	  echo "</tr>";
	  echo "</table>";
	}
}
else 
{
	display();
}

function display()
{
?><!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  <form action="view.php" method="post">
  <table align="center" cellspacing="2" style="background-color:#ededed;border:1px solid white;padding:2%;margin-top:15%;">
  <tr>
  <td align="center"style="color:blue">View Portal</td>
  </tr>
  <tr>
  <td>Name</td>
  <td><input type="text" name="nameofEvent" value=""/></td>
  </tr>
  <tr>
  <td>Date</td>
  <td><input type="text" name="dateofEvent" value=""/></td>
  </tr>
  <tr>
  <td><input type="submit" name="submitEvent" style="background-color:red;color:white;border:1px solid #ededed;font-weight:bold;margin-left:2em;" value="Submit"/></td>
  <td><input type="reset" name="resetEvent" style="background-color:green;color:white;border:1px solid #ededed;font-weight:bold;margin-left:3em;" value="Reset"/></td>
  </tr>
  <table>
  </form>
 </body>
</html>
<?php
}
?>