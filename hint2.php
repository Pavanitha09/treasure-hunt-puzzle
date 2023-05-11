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
<div class="heading-overlay">     
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> RIDDLE - 2
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "t-overlay">
    <p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Solve the puzzle by decoding the hidden
    <br/>message from the image. </p>
</div>
<div class = "hint-overlay">
<svg width="700" height="500">
    <image href="images/hint2.jpg" width="700" height="600"/>
    <a href="#" onclick="openModal1()">
      <rect x="480" y="310" width="100" height="30" fill="transparent" />
    </a>    
    <a href="#" onclick="openModal2()">
      <rect x="550" y="0" width="150" height="180" fill="transparent" />
    </a>
    <a href="#" onclick="openModal3()">
      <rect x="20" y="150" width="140" height="120" fill="transparent" />
    </a>
  </svg>
</div>
     
</div>
<div class="hintpopup-overlay">
<div id="myModal1" class="modal">
  <span class="close" onclick="closeModal1()">&times;</span>
  <h2 style="color:rgb(186, 166, 50);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align:center">mmhh</h2>
</div>
<div id="myModal2" class="modal" style="width: 600px;height: 200px;">
  <span class="close" onclick="closeModal2()">&times;</span>
  <h2 style="color:rgb(186, 166, 50);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align:center">Something that is always moving forward, and can never be stopped or turned back.</h2>
</div>
<div id="myModal3" class="modal">
  <span class="close" onclick="closeModal3()">&times;</span>
  <form method="post" action="answers.php">
  <h2 style="color:rgb(186, 166, 50);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Enter the correct code to unlock.</h2>
      <input type="number" name = "answer2" id="field2" maxlength="4" placeholder="Your answer" pattern="\d{4}" required/>
      <input type="submit" name="submit2" id="hint" value="Check"/>
  </form>
</div>
</div>
<script>
function openModal1() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}
function openModal2() {
  document.getElementById("myModal2").style.display = "block";
}
function closeModal2() {
  document.getElementById("myModal2").style.display = "none";
}
function openModal3() {
  document.getElementById("myModal3").style.display = "block";
}
function closeModal3() {
  document.getElementById("myModal3").style.display = "none";
}
</script>
</body>
</html>



