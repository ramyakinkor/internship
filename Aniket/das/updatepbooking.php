<?php
    $host ="localhost";
    $user="root";
    $password ="";
    $db="doctors appointment system database";

    session_start();

    $data=mysqli_connect($host,$user,$password,$db);

        if($data==false){
            ?> <script>alert("connection error") </script>
    <?php
        }
        else{
            ?> <script>alert("connection sucessful") </script>
    <?php
        }


        $idS = $_GET['id'];

        $showquery = "select * from booking where id = '$idS'";

        $showdata = mysqli_query($data,$showquery);

        $arrdata = mysqli_fetch_array($showdata);


    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $idupdate = $_GET['id'];

        $name=$_POST["name"];
        $speciality=$_POST["speciality"];
        $slot=$_POST["slot"];
        $username=$_POST["username"];
        $email=$_POST["email"];

        //insert into funcution for inserting data in table, where login is table name
        //$sql="INSERT INTO `doctors`(`Name`, `Specialty`, `Day 1`, `Day 2`, `Day 3`) VALUES ('$name','$speciality','$day1','$day2','$day3');";

        $query= "UPDATE `booking` SET `Name`='$name',`Speciality`='$speciality',`slot`='$slot',`username`='$username',`email`='$email' WHERE id='$idupdate'";

        $result=mysqli_query($data,$query);

        if($result){
     ?> <script>alert("Doctor sucessfully added!") </script>
    <?php
        }
        else{
            ?> <script>alert("registration failed") </script>
    <?php
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

  <form action="#" method="post">
    
    <center>
    <div class="container">
      <h1 style="color: #fff"><img src="download.png" alt="THe clinic"></h1>
                  <div style="margin: -20px;">
                      <p style="color: #fff">"Home of the best doctors in town!"</p>
                  </div>
                  <div style="margin: 50px;">
                    <h1 style="color: #FFDB73">Update User:</h1>
                  </div>
                    <div style="margin: -40px;">
                      <p style="color: #fff">Back to bookings page -> <a href="patientbookingdisplay.php" style="color:#FFDB73">Click here</a></p>
                  </div>
                  <br><br><br><br>
                    <div style=>
                        <label style="color: #fff">Doctor's name:</label>
                        <input type="text" name="name" value="<?php echo $arrdata['name']; ?>" required>
                    </div>
                    
                    <div >
                        <label style="color: #fff">Speciality:</label>
                        <input type="text" name="speciality" value="<?php echo $arrdata['speciality']; ?>" required>
                    </div>
                    <br>
                    <div>
                        <label style="color: #fff">Slot:</label>
                        <input type="text" name="slot" value="<?php echo $arrdata['slot']; ?>" required>
                    </div>
                    <br>
                    <div>
                        <label style="color: #fff">Username:</label>
                        <input type="text" name="username" value="<?php echo $arrdata['username']; ?>" required>
                    </div>
                    <br>
                    <div>
                        <label style="color: #fff">email:</label>
                        <input type="text" name="email" value="<?php echo $arrdata['email']; ?>" required>
                    </div>
                    <br>

                    <div>
                        <input type="SUBMIT" value="Update">
                    </div>
    </div>             z
    </center>

</form>
<center><footer style="color:#808080;">©Copyright All rights reserved - The Clinic 2021 | Contact information: Call@ 9957544197 | Mail@ admin@theclinic.com  </footer></center>


</body>
</html>

<!---------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------css---------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------->
<style>
html,body{
  background:#212129;
  font-family:Tahoma;
}

.container{
  display:block;
  margin:50px auto;
  text-align:center;
  width:90%;
}

.container input{
  display:block;
  margin:20px auto;
  text-align:center;
  font-weight:bold;
  transition:all 300ms ease-in-out;
}

.container input[type="text"],.container input[type="password"]{
  line-height:50px;
  padding:0 10px;
  border-radius:30px;
  border:0;
  width:50%;
  background:rgba(255,255,255,0.9);
}

h2{color:#fff;}

.container input[type="text"]:focus,.container input[type="password"]:focus{
  width:80%;
  background:rgba(255,255,255,1);
}

.container input[type="submit"]{
  height:40px;
  border:0;
  background:#FFDB73;
  color:#fff;
  box-shadow:0px 0px 2px rgba(0,0,0,0.5);
  width:30%;
  border-radius:5px;
  opacity:0.8;
  cursor:pointer;
}

.container input[type="submit"]:hover{
  opacity:1;
}
</style>

