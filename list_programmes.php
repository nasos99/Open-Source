<html>

  <head>
    <title>Programme listing</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>

  <body>
  <?php include "navbar.html"; ?>

   <h2>List of programmes</h2>



<?php
//resume existing session
session_start();

//include the connection
require_once("connection.php");

if ($_SESSION["logged_in"]==true)
{


   $SQLString = "Select * from programmes;";

   //connect to the database and execute the sql query
   $result = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));


   if (!$result)
   {
	echo $connection->error."\n";
   }
   else
   {

?>

<table>

<th>program_id</th>
<th>level</th>
<th>years</th>
<th>name</th>
<th>code</th>



<?php

//Get the data from the array
while($row=$result->fetch_assoc())
	{
		?>
		<tr>
                <td><?=$row["program_id"]?></td>
		<td><?=$row["level"];?></td>
		<td><?=$row["years"];?></td>
		<td><?=$row["name"];?></td>
		<td><?=$row["code"];?></td>
		</tr>
<?php
	}

   }

?>
   </table>

<?php

//Close the the database connection
mysqli_close();

}
else
{
  echo "please log in";
  header("location: main_menu.php");
 }

?>

</body>
</html>
