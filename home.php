<!DOCTYPE html>
<html>
<head>
  <title>MaptoMystery</title>
  <link rel="stylesheet" href="css/homecss.css">
  <style>
    body, html {
	  height: 100%;
	}
    .blurry-img {
      position: relative;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
	  height: 100%;
    }
    .blurry-img img {
      filter: blur(3px); /* Adjust the blur value to your liking */
      width: 100%;
      height: 100%;
    }
    .blurry-img::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.85); /* Adjust the opacity value to your liking */
      z-index: 1; /* Make sure the overlay is on top of the image */
    }
    .text {
	  text-align: center;
      position: absolute;
      left : 30%;
	  top: 30%;
      width: 50%;
	  font-size: 30px;
      color: white;
	}	
    
  </style>
</head>
<body>
<?php

    session_start();
    $name=$_SESSION['u_name'];
    if($_SESSION['log']!=1)
    {
      header('Location: login.html');
    }
    ?>
  <div class="blurry-img">
    <img src="images/img1.jpg" alt="Your image">
  </div>
  <div class="image-overlay">
    <img src="images/img2.png" alt="Your image" style="width: 90%;height: 90%;float: right;align-content: right;">
  </div>
  <div class="text-overlay">
    <h1 style="color: rgb(186, 166, 50);font-size: 45px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"> MaptoMystery </h1>
</div>
<form method="post" action="hint1.php">
<div class="button-overlay">
  <input type="submit" id="go" value="Let's get Started!" />
</div>
<br/><br/><br/>
<div class="heading-overlay">     
  <h1 style="color: rgb(248, 248, 250);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> TREASURE HUNT
    <br/> CHALLENGE </h1>
</div>
<div class="t-overlay">       
  <h4 style="color: rgb(69, 151, 84);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"> Step into a world of
    <br/> mystery and excitement 
    <br/>with our treasure hunt challenge!</h4>
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
  
</body>
</html>



