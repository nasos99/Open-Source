<html>
<head>
<Title>Student ID</Title>

<link rel="stylesheet" href="recordsForm.css">

</head>
<body>

  <!-- Insert the navbar -->
  <?php include "navbar.html"; ?>

  <h2>Student grades</h2>

  <div class="container">
    <!-- Form for inserting the Student ID -->
    <form method = "post" action="list_grades.php">
      <label>Student ID</label>

      <input type="number" name="id" placeholder="Student ID" required>

      <input type="submit" value="Insert Data">

      <input type="hidden" name="logged_in"/>

    </form>
  </div>


<?php

$student_id = $_POST['id'];

 if ($student_id == true)
    {

      //include the connection
      require_once("connection.php");

     $SQLString = "Select * from grades
     left join students on students.student_id=grades.student_id
     where grades.student_id=$student_id";

     //connect to the database and execute the sql query
     $result = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));


     if (!$result)
     {
           echo " no grades for this student \n";
     }
     else
     {

       //If the grades exist on the database they are displayed on the table

       ?>

       <table>
         <th>ID</th>
         <th>Name</th>
         <th>Module ID</th>
         <th>Grade</th>
       <?php


       while($row=$result->fetch_assoc()){

         $grade_id = $row['grade_id'];
         $module_id = $row['module_id'];
         $grade = $row['grade'];
         $gn = $row['given_name'];
         $fn = $row['family_name'];

         ?>
         <tr>
           <td><?=$grade_id?></td>
           <td><?=$gn?> <?=$fn?></td>
           <td><?=$module_id?></td>
           <td><?=$grade?></td>
         </tr>

         <?php
       }

       ?>
        </table>
       <?php
   }

   // Close DB connection
   mysqli_close();
 }

?>


</html>
</body>
