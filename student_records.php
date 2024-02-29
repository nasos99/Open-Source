<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add new student records</title>
    <link rel="stylesheet" href="recordsForm.css">
  </head>
  <body style="background-color: #8c8c8c;">
    <?php include "navbar.html"; ?>

    <h2 class="textcolor">Add student records</h2>

    <div class="container">

      <!-- Form for adding a student record -->
      <form method = "post" action="insert_data.php">
        <label>Family Name</label>
        <input type="text" name="familyname" placeholder="Family Name" required>

        <label>Given Name</label>
        <input type="text" name="givenname" placeholder="Given Name" required>

        <label>Date of birth</label>
        <input type="date" name="dob" placeholder="Date of birth" required>

        <label>Address 1</label>
        <input type="text" name="address_1" placeholder="Address 1" required>

        <label>Address 2</label>
        <input type="text" name="address_2" placeholder="Address 2" required>

        <label>Address 3</label>
        <input type="text" name="address_3" placeholder="Address 3" required>

        <label>Address 4</label>
        <input type="text" name="address_4" placeholder="Address 4" required>

        <label>Program ID</label>
        <input type="number" name="pid" placeholder="Program ID" required>

        <label>Program stage</label>
        <input type="number" name="pstage" placeholder="Program stage" required>


        <input type="submit" value="Insert Data">

        <input type="hidden" name="insertstudent">

      </form>
    </div>


  </body>
</html>
