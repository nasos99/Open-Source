<html>
<head>
  <title>Programme listing</title>
  <link rel="stylesheet" href="recordsForm.css">
</head>
<body>

<?php include "navbar.html"; ?>

<h2>List of modules</h2>


<?php
//resume existing session
session_start();

//include the connection
require_once("connection.php");

if ($_SESSION["logged_in"]==true){

   // SQL statement for getting the module information from the database
   $SQLString = "Select * from modules;";

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

<th>Module id</th>
<th>Module name</th>
<th>ECTS</th>
<th>Duration</th>


<?php

	while($row=$result->fetch_assoc())
	{
		?>
		<tr>
                <td><?=$row["module_id"]?></td>
                <td><?=$row["module_name"];?></td>
                <td><?=$row["ECTS"];?></td>
                <td><?=$row["Duration"];?></td>
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
