

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>

  <form action="adminloginsystem.php" method="post">
    
    <center>
  <div class="container">
      <h1 style="color: #fff"><img src="download.png" alt="THe clinic"></h1>
                  <div style="margin: -30px;">
                      <p style="color: #fff">"Home of the best doctors in town!"</p>
                  </div>
                  <div style="margin: 50px;">
                      <h1 style="color: #FFDB73">Login:</h1>
                  </div>
                  <div style="margin: -40px;">
                      <p style="color: #fff">Don't have an account? <a href="register.php" style="color:#FFDB73">Register</a></p>
                  </div>
                    <br><br><br>
                  <div>
                        <label style="color: #fff">Name</label>
                        <input type="text" name="username" required>
                  </div>
                    <br>
                  <div>
                        <label style="color: #fff">Password</label>
                        <input type="password" name="password" required>
                  </div>
                    <br>

                  <div>
                        <input type="SUBMIT" value="login">
                  </div>
</div>
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