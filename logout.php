<?php
    session_start();//resume existing session
    session_destroy(); //destroy the session
    header('Location:login.html'); //redirect to the login page
?>
