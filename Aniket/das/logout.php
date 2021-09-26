<?php

session_start();
//delete session
session_destroy();
//send user to login page
header("Location:login.php")

?>