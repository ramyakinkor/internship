

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home: Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="df-content-wrapper">
        <div class="df-overlay"></div>
        <div class="df-content">

            <section class="df-main df-home-content container">
    
    <?php include 'links.php'; ?>
<style>
    /* table-------------------------------- */
h1{
    font-size: 18px;
    color: #000;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin: auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;

}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{font-size: 13px;}

/* table-------------------------------- */
</style>
    
</head>
<body>

        <div class="df-overlay">
        <div class="df-content">
<header class="df-navigation">
                <a href="#" > 
                    <div>
                    
                    <h2 style="color: #fff"><img class="logo" src="download.png" alt="THe clinic"></h2> 
                    
                    <!-- <h3 style="color:#FFDB73">USER HOME</h3> -->
                    </div>
                </a>
                <nav class="df-menu">
                    <ul>
                    <li><a href="home.php">User home</a></li>
                        <li><a href="adminhome.php">Admin home</a></li>
                        <li><a href="registerdoctor.php">Doctors</a></li>
                        <li><a href="bookingdisplay.php">Bookings</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </header>
    
    <div class="main-div">
        <center><h2>User information table:</h2></center>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>password</th>
                            <th>usertype</th>
                            <th>email</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>
                    <tbody>
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

$sql="select * from login";
$result=mysqli_query($data,$sql);



while($view = mysqli_fetch_array($result)){

?>
                        <tr>
                            <td><?php echo $view['id']; ?></td>
                            <td><?php echo $view['username']; ?></td>
                            <td><?php echo $view['password']; ?></td>
                            <td><?php echo $view['usertype']; ?></td>
                            <td><?php echo $view['email']; ?></td>
                            <td><a href="update.php?id=<?php echo $view['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update!"><i class="fa fa-edit"aria-hidden="true"></i></a></td>

                            <td><a href="delete.php?id=<?php echo $view['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete!"><i class="fa fa-trash"aria-hidden="true"></i></a></td>
                        </tr>
<?php
}
?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
<!-------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------
--------------add patients form--------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------->
<?php
    $host ="localhost";
    $user="root";
    $password ="";
    $db="doctors appointment system database";

    

    $data=mysqli_connect($host,$user,$password,$db);

        if($data===false){
            die("Error connecting");
        }

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        //insert into funcution for inserting data in table, where login is table name
        $sql="insert into login (username,email,password) values ('$username', '$email', '$password')";

        $result=mysqli_query($data,$sql);

        if($result){
            echo ('Data added successfully');
   
        }
        else{
            echo ('Failed');
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
    
    
    
    <div class="container" style="color:#fff; padding-left:380px; padding-top:20px">
       <h2>Add patients Form:</h2>
              <div class="col-md-12">
                      <div class="row">
                            <div class="col-md-12" style="padding:10px">
                                Username:
                                <input type="text" name="username" required>
                            </div>
                      </div>


                      <div class="row">
                            <div class="col-md-12" style="padding:10px">
                                Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="email" required>
                            </div>
                      </div>

                      <div class="row">
                            <div class="col-md-12" style="padding:10px">
                                Password:&nbsp;
                                <input type="password" name="password" required>
                            </div>
                      </div>

                      <div class="row" style="padding-top:10px">
                            <div class="col-md-12" style="padding:10px">
                                <input type="SUBMIT" value="Register">
                            </div>
                      </div>
              </div>
    </div>
     

</form>

</body>
</html>

<!-----------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------html----------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->


            </section>
            <footer class="df-footer">©Copyright All rights reserved - The Clinic 2021 | Contact information: Call@ 9957544197 | Mail@ admin@theclinic.com </footer>
        </div>
    </div>






<!-----------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------css---------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->

<style>

.logo {
  width: 150px;
}

*, *:after, *:before {
  box-sizing: border-box;
}

html,
body {
  min-width: 320px;
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: #fff;
}

a {
  text-decoration: none;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

img {
  height: auto;
  vertical-align: middle;
  border: 0;
}

blockquote,
figure {
  margin-right: 0;
  margin-left: 0;
}

audio,
canvas,
video {
  display: inline-block;
}

svg:not(:root) {
  overflow: hidden;
}

/* ----------------------------- */
/* == HTML                */
/* ----------------------------- */
html {
  font-size: 62.5%;
  /* 14px = 10px  */
}

body {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.5;
}

p,
.p-like,
ul,
ol,
dl,
blockquote,
pre,
td,
th,
label,
textarea,
caption,
details,
figure {
  line-height: 1.5;
  margin-bottom: 0;
}

code,
pre,
samp,
kbd {
  font-family: monospace;
  line-height: normal;
  /* IE fix */
  white-space: pre-line;
  white-space: pre-wrap;
}

em,
.italic,
address,
cite,
dfn,
i,
var {
  font-style: italic;
}

strong,
.bold {
  font-weight: 600;
}

small,
sub,
sup {
  font-weight: 300;
}

/* ----------------------------------- */
/* == PROPRIETES NAVIGATEURS RESET     */
/* ----------------------------------- */
p:first-child
,
.p-like:first-child
,
ul:first-child
,
ol:first-child
,
dl:first-child
,
blockquote:first-child
,
pre:first-child
,
h1:first-child
,
h2:first-child
,
h3:first-child
,
h4:first-child
,
h5:first-child
,
h6:first-child {
  margin-top: 0;
}

li p,
li .p-like,
li ul,
li ol {
  margin-top: 0;
  margin-bottom: 0;
}

img,
table,
td,
blockquote,
code,
pre,
textarea,
input,
video {
  max-width: 100%;
}

/***********
GRID
************/
.container {
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

.container-fluid {
  margin-right: auto;
  margin-left: auto;
}

.container:after,
.container-fluid:after{
  clear: both;
}

.df-content-wrapper {
  width: 100%;
  height: 100%;
  background: #2f2f2f;
}

.df-content {
  position: relative;
  height: 100%;
  background: url("http://lorempicsum.com/up/1900/1200/4") center center;
  background-size: cover;
  padding: 10px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.df-content > * {
  position: relative;
  z-index: 10;
}

.df-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 5;
  background: rgba(47, 47, 47, 0.5);
}

/********************
Navigation
*********************/
.df-navigation {
  display: flex;
  justify-content: space-between;
  padding: 10px 20px 0 20px;
}

.df-logo {
  color: #fff;
  font-size: 2rem;
}

.df-logo div {
  width: 50px;
  height: 50px;
  border: 3px solid #ffdb73;
  border-radius: 5px;
  margin-right: 10px;
  display: inline-block;
}

.df-menu ul li {
  display: inline-block;
  margin: 10px;
}

.df-menu ul li a {
  color: #ffdb73;
  font-size: 2rem;
}

/********************
Content
*********************/
.df-home-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 100%;
}

.df-home-content h1 {
  display: none;
}

.df-home-content h2 {
  font-size: 5rem;
  color: #ffdb73;
  margin: 0 0 10px 0;
}

.df-home-content p {
  margin: 0;
  padding: 10px;
  width: 500px;
  max-width: 100%;
  color: #fff;
  font-size: 1.6rem;
  text-align: center;
}

.df-social li {
  display: inline-block;
  margin: 10px;
}

.df-social li a {
  color: #ffdb73;
  font-size: 2.8rem;
}

/********************
Footer
*********************/
.df-footer {
  text-align: center;
  padding: 2px 5px;
  color: #fff;
}
</style>
