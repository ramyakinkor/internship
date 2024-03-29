<?php
session_start();
if(!isset($_SESSION["name"])){
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    
</head>
<body>
<!-- <h1>Welcome</h1> <?php echo $_SESSION["name"]; ?> <hr>
<a href="logout.php">logout</a>
<a href="display.php">Users</a>
<a href="registerdoctor.php">Doctors</a>
<a href="#">Bookings</a> -->

</body>
</html>
<!-----------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->

<!-- 
HTML and CSS code -->



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
<div class="df-content-wrapper">
        <div class="df-overlay">
        <div class="df-content">

            <header class="df-navigation">
            
                    <div>
                    <h2 style="color: #fff"><img class="logo" src="download.png" alt="THe clinic"></h2> 
                    </div>
                
                <nav class="df-menu">
                    <ul>
                        <li><a href="home.php">User home</a></li>
                        <li><a href="display.php">Users</a></li>
                        <li><a href="registerdoctor.php">Doctors</a></li>
                        <li><a href="bookingdisplay.php">Bookings</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </header>

            <section class="df-main df-home-content container">

                <h2>Welcome  <?php echo $_SESSION["name"]; ?>! <hr> </h2>
                <p>
                    Welcome to administrators pannel, you can manage patients,doctors & appointment bookings form this section.
                </p>
              
            </section>
            <footer class="df-footer">©Copyright All rights reserved - The Clinic 2021 | Contact information: Call@ 9957544197 | Mail@ admin@theclinic.com  </footer>
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
  width: 200px;
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
