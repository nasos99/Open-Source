<html>
<head>
<title>Programme listing</title>

<style media="screen">
	body{
		background-image:url('linux debian.jpg');
		background-size:cover;
		background-repeat: no-repeat;
	}
</style>



</head>
<body>

<?php
//resume existing session
session_start();
if($_SESSION["logged_in"]==true)
{

	include "navbar.html";

}
else
{
  echo "please log in ";
  header("location: login.php");
}

?>

</body>
</html>
