<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add new program records</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>
  <body style="background-color: #8c8c8c;">
    <?php include "navbar.html"; ?>

    <h2 class="textcolor">Add programme records</h2>

    <div class="container">

      <!-- Form for adding a programme record -->
      <form method = "post" action="insert_data.php">
        <label for="level">Level</label>
        <input type="number" name="level" placeholder="Level" required>

        <label for="years">Year</label>
        <input type="number" name="year" placeholder="Year" required>

        <label for="programmename">Program Name</label>
        <input type="text" name="programmename" placeholder="Programme Name" required>

        <label for="programmecode">Program Code</label>
        <input type="text" name="programmecode" placeholder="Programme Code" required>

        <input type="submit" value="Insert Data">

        <input type="hidden" name="insertprogram" >

      </form>
    </div>


  </body>
</html>
