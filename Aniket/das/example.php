<div class="row">

Hello World!



</div>








<input type="hidden" name="username" value="<?php echo $_SESSION["name"]; ?>" disabled>
                            <input type="hidden" name="email" value="<?php echo $_SESSION["email"] ?>" disabled>




                            <input type="text" name="username" value="<?php echo $_SESSION["name"]; ?>" readonly>





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
    die("Error connecting");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $password=$_POST["password"];

    //where login is the tablename, select from table function to get data from table
    $sql="select * from login where username='".$username."' AND password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
        $_SESSION["name"]=$username;
        $_SESSION["email"]=$email;
        header("Location:home.php");
    }
    else if($row["usertype"]=="admin"){
        $_SESSION["name"]=$username;
        $_SESSION["email"]=$email;
        header("Location:adminhome.php");
    }
    else{
        echo "username or password incorrect";
    }
}
?>