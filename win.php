<!DOCTYPE html>
<html>
<head>
  <title>MaptoMystery</title>
  <link rel="stylesheet" href="css/hint.css">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-JOyQiC+gcugri73+fd09hXFXWF03NHMge+tLPvUwL6Uk0r0Ie6aEzQ1Cm07gy4Xn8OmWdZdzgv2lD42Ie5o5+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php

    session_start();
    $name=$_SESSION['u_name'];
    $time = $_SESSION['time'];
    $score_final = $_SESSION['your_score'];
    $time_taken = $_SESSION['total_time'];
    if($_SESSION['log']!=1)
    {
      header('Location: login.html');
    }
    ?>
    <div id = "blur" class = "container">
  <div class="blurry-img">
    <img src="images/img1.jpg" alt="Your image">
  </div>
  <div class="text-overlay">
  <i class="fas fa-lock"></i>
    <h1 style="color: rgb(186, 166, 50);font-size: 40px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"> MaptoMystery </h1>
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "deadend-overlay" style="top: 35%;left:25%;text-align:center">
    <h1 style="color: green;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align:center"><br/>Hurray!! Congragulations, You have solved all the riddles and won the treasure.</h1>
    <br/><h3 style="color: white" style="left:45%"><a href="#" onclick="openModal1()">Click here</a> for treasure</h3>
    <h3 style="color: white" style="left:45%">Your score : <?php 
    echo " " . $score_final . "<br>";
    ?></h3><br/>
    <h3 style="color: white" style="left:45%">Time taken : <?php 
    echo " " . $time_taken . "<br>";
    ?></h3>
</div>
<div class = "deadend-overlay" style="top: 70%;left:70%;">
<image src="https://www.funimada.com/assets/images/cards/big/congrats-1.gif" alt="Congrats" style="width:320px;height:300px"/>
</div>

<div class="hintpopup-overlay">
<div id="myModal1" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 16px;width:480px;height:480px;">
  <span class="close" onclick="closeModal1()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <img src="https://img1.picmix.com/output/stamp/normal/8/8/0/5/1305088_48c29.gif" alt="congrats" style="width:460px;height:460px"/>
</div>
</div>
<script>
function openModal1() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}
</script>

</body>
</html>



