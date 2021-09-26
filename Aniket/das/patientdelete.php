<?php

//connection part//
$host="localhost";
$user="root";
$password="";
$db="Doctors appointment system database";

//session start
session_start();

//datalink connection variable
$data=mysqli_connect($host,$user,$password,$db);

//show errot if database not connected properly
if($data===false){
    ?> <script>alert("Error connecting") </script>
    <?php
}
else{
    ?> <script>alert("Yoohoo! Connection sucessful") </script>
    <?php
}


    $id = $_GET['id'];

    $deletequery = "delete from login where id=$id";

    $query = mysqli_query($data,$deletequery);

    header("Location:patientbookingdisplay.php")
?>
 