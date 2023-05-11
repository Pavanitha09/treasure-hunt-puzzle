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
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> RIDDLE - 4
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "t-overlay" style="left: 6%;">
    <p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Crack the alphabetic code 
    <br/>and reveal the numerical sum. </p>
</div>
<div class = "t-overlay" style="top:45%;left:6%" >
<p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><a href="#" onclick="openModal1()"> Click here</a> to know the clues.</p>
</div>
<form method="post" action="answers.php">
<div class="form1-overlay" style="top: 60%;">

<input type="number" name = "answer4c" id="field" placeholder="Enter your answer" required/>
</div>
<div class="form2-overlay" style="top: 60%;">
            <input type="submit" name="submit4c" id="hint" value="Check" />
            </div>

         </form>
     
</div>
<div class="hintpopup-overlay">
<div id="myModal1" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 16px;">
  <span class="close" onclick="closeModal1()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">Hints</h2>  
  <ol>
    <li>
    <ul>
    <li>I start and end with 'e' but I have only one letter
    <li>I come in different sizes and colors
    </ul> 
</li>  
<br/>
<li>
<ul>
    <li>I am often associated with precision and accuracy
    <li>I am often used in medical procedures
    <li>I am a tool that often comes in pairs
    </ul> 
</li>
<br/>
    <li>
<ul>
    <li>I am a 6 lettered word
    <li>I am often associated with comfort and relaxation
    <li>I am filled with different materials and can be made from different fabrics
    </ul> 
</li>
</ol>
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



