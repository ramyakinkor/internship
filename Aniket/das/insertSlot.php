<?php
include 'config.php';

$name = $_POST["name"];
$speciality = $_POST["speciality"];
$slot= $_POST["slot"];
$username = $_POST["username"];
$email = $_POST["email"];
$query = "INSERT INTO booking (name, speciality, slot,username,email)
		  VALUES ('$name', '$speciality', '$slot','$username','$email')";
		  if($conn->query($query)==true)
		  {
		  	echo "<center><h1 style='margin-top:100px'>Booking successful!</h1><br><p style='margin-top:-40px'>You will be sent your appintment details via email!</p><br><p><a href='home.php'>Back to home</a></p></center>";

		  }
		  else
		  {
		  	echo "SignIn To Place Order";
		  	
		  }


?>
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
