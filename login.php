<?php
//include the connection
require_once("connection.php");

//check if username is inserted
if (isset($_POST["username"])){

    //escape the strings to remove the SQL code that would be used for injection
    $college_username=$conn -> real_escape_string($_POST["username"]);
    $college_password=$conn -> real_escape_string($_POST["password"]);

    // SQL query for getting the user
    $SQLString="SELECT * FROM users where username='$college_username' AND password='$college_password'";

    //connect to the database and execute the sql query
    $result = $conn -> query($SQLString) or die("error: ".mysqli_error($conn));

    //fetch the data
    $row=$result->fetch_assoc();

    //
    if ($row) {
      // If the data exists start a session and put the variables in a session
      session_start();
      $_SESSION['username']=$college_username;
	    $_SESSION['logged_in']=true;

      // redirect to main page
      header("location: main_menu.php");

    }  else {
      // If the data is invalid redirect to login page
      echo "invalid details";
	    header("location: login.html?error");

    }

}
?>
