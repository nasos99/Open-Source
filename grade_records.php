<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add new grade for a student</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>
  <body style="background-color: #8c8c8c;">
    <?php include "navbar.html"; ?>

    <h2 class="textcolor">Add grade for a student</h2>

    <div class="container">

      <!-- Form for getting the student grade -->
      <form method = "post" action="insert_data.php">
        <label>Student ID</label>
        <input type="number" name="studentid" placeholder="Student ID" required>

        <label>Module ID</label>
        <input type="number" name="moduleid" placeholder="Module ID" required>

        <label>Grade</label>
        <input type="number" name="grade" placeholder="Grade" required>


        <input type="submit" value="Insert Data">

        <input type="hidden" name="insertgrade">

      </form>
    </div>


  </body>
</html>
