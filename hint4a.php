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
<div class="heading4-overlay" style="top: 20%;left: 60%;">     
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> RIDDLE - 4
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "t4-overlay" style="top: 35%;left: 62%;">
    <p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><br/>Your journey takes you to a surface
    <br/>of stability, where memories are made and
    <br/> hearts find tranquility.It is where work 
    <br/>and play unite, for the next step in your
    <br/> journey is in sight."</p>
</div>
<div class = "hint4-overlay" style="top: 53%;left: 15%;">
<svg width="700" height="500">
    <image href="images/hint4a.png" width="600" height="550"/>  
    <a href="#" onclick="openModal1()">
      <rect x="0" y="460" width="60" height="40" fill="transparent" />
    </a>
  </svg>
</div>
<form method="post" action="answers.php">
<div class="form1-overlay" style="top: 55%;left: 61%;">

<input type="number" name = "answer4a" id="field" placeholder="Enter your answer" required/>
</div>
<div class="form2-overlay" style="top: 55%;left: 78%;">
            <input type="submit" name="submit4a" id="hint" value="Check" />
            </div>

         </form>
     
</div>
<div class="hintpopup-overlay">
<div id="myModal1" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 14px;width: 250px;height: 150px;">
  <span class="close" onclick="closeModal1()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <image src="images/clue4.png" alt="Clue"/> 
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



