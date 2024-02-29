<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add new module records</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>
  <body style="background-color: #8c8c8c;">
    <?php include "navbar.html"; ?>

    <h2 class="textcolor">Add module records</h2>

    <div class="container">

      <!-- Form for adding a module record -->
      <form method = "post" action="insert_data.php">
        <label>Module Name</label>
        <input type="text" name="modulename" placeholder="Module Name" required>

        <label>ECTS</label>
        <input type="number" name="ects" placeholder="ECTS" required>

        <label>Duration</label>
        <input type="number" name="duration" placeholder="Duration" required>


        <input type="submit" value="Insert Data">

        <input type="hidden" name="insertmodule" >

      </form>
    </div>


  </body>
</html>
