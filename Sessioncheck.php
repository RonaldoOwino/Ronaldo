<?php
    //start sessions
    session_start();


    //retrieve the session variable data
    $username=$_SESSION['username'];
    echo $username;



?>