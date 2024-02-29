<?php
  session_start();
  require_once("connection.php");

  //Insert a program to the database
  if(isset($_POST['insertprogram'])){
    $level = $_POST['level'];
    $year = $_POST['year'];
    $programmename = $_POST['programmename'];
    $programmecode = $_POST['programmecode'];

    $SQLString="INSERT INTO programmes SET name='$programmename', level=$level, years=$year, code='$programmecode'";
    $qry = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    header("Location: list_programmes.php");
  }

  //Insert a module to the database
  if(isset($_POST['insertmodule'])){
    $modulename = $_POST['modulename'];
    $ects = $_POST['ects'];
    $duration = $_POST['duration'];

    $SQLString="INSERT INTO modules SET module_name='$modulename', ECTS=$ects, Duration='$duration'";
    $qry = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    header("Location: list_modules.php");
  }

  //Insert a student to the database
  if(isset($_POST['insertstudent'])){
    $familyname = $_POST['familyname'];
    $givenname = $_POST['givenname'];
    $dob = $_POST['dob'];
    $address1 = $_POST['address_1'];
    $address2 = $_POST['address_2'];
    $address3 = $_POST['address_3'];
    $address4 = $_POST['address_4'];
    $pid = $_POST['pid'];
    $pstage = $_POST['pstage'];

    $SQLString="INSERT INTO students SET family_name='$familyname', given_name='$givenname', date_of_birth='$dob',
    address_1='$address1', address_2='$address2', address_3='$address3', address_4='$address4',
    program_id='$pid', program_stage='$pstage'";

    $qry = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    header("Location: list_students.php");

  }

  //Insert a grade to the database
  if(isset($_POST['insertgrade'])){
    $studentid = $_POST['studentid'];
    $moduleid = $_POST['moduleid'];
    $grade = $_POST['grade'];

    $SQLString="INSERT INTO grades SET student_id='$studentid', module_id=$moduleid, grade='$grade'";
    $qry = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    header("Location: list_grades.php");

  }







//Close DB connection
mysqli_close();
?>
