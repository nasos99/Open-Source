<html>
  <head>
    <title>Programme listing</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>
<body>

<?php include "navbar.html"; ?>

<h2>List of students</h2>

<?php
//resume existing session
session_start();

//include the connection
require_once("connection.php");

 if ($_SESSION["logged_in"]==true){

    // SQL statement to get the student information from the database
    $SQLString = "Select * from students;";

    //connect to the database and execute the sql query
    $result = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    if (!$result)
    {
         echo "No data\n";
    }
    else
    {

  ?>

  <!-- Create a table for the content -->
  <table>

  <th>Student id</th>
  <th>Family name</th>
  <th>Given name</th>
  <th>Date of birth</th>
  <th>Address 1</th>
  <th>Address 2</th>
  <th>Address 3</th>
  <th>Address 4</th>
  <th>Program stage</th>


  <?php

           while($row=$result->fetch_assoc())
           {
  		?>
       <tr>
       <td><?=$row["student_id"]?></td>
  		 <td><?=$row["family_name"]?></td>
  		 <td><?=$row["given_name"]?></td>
  		 <td><?=$row["date_of_birth"]?></td>
  		 <td><?=$row["address_1"]?></td>
  		 <td><?=$row["address_2"]?></td>
  		 <td><?=$row["address_3"]?></td>
  		 <td><?=$row["address_4"]?></td>
  		 <td><?=$row["program_stage"]?></td>
      </tr>

  <?php
         }

    }
?>
    </table>
<?php

 }

 //Close the the database connection
 mysqli_close();

?>

</body>
</html>
