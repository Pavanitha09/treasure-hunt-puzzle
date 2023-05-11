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
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> RIDDLE - 3
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "t-overlay">
    <p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Decode the hidden message
    <br/>from the image. </p>
</div>
<div class = "hint-overlay">
<svg width="700" height="500">
    <image href="images/hint3.jpg" width="700" height="600"/>
    <a href="maths.pdf" target="_blank">
      <rect x="400" y="310" width="140" height="170" fill="transparent" />
    </a>    
    <a href="#" onclick="openModal2()">
      <rect x="300" y="100" width="90" height="90" fill="transparent" />
    </a>
    <a href="#" onclick="openModal3()">
      <rect x="40" y="200" width="200" height="130" fill="transparent" />
    </a>
  </svg>
</div>
<form method="post" action="answers.php">
<div class="form1-overlay">

<input type="number" name = "answer3" id="field" placeholder="Enter your answer" required/>
</div>
<div class="form2-overlay">
            <input type="submit" name="submit3" id="hint" value="Check" />
            </div>

         </form>
     
</div>
<div class="hintpopup-overlay">
<div id="myModal1" class="modal3">
  <span class="close" onclick="closeModal1()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="color:rgb(186, 166, 50);">Open the pdf file</h2>
  <h4>PDF<a href="test.pdf"> link</a></h4>
</div>
</div>
<div id="myModal2" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 14px;">
  <span class="close" onclick="closeModal2()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">Tasks</h2>  
  <b>
  <ul>
    <li>Task1 : First, tally the number of pencils you have, and then utilize them for sketching, coloring, or other creative endeavors.
    <li><br/>Task2 : Do math homework using calculator
    <li><br/>Task3 : Solving questions
    <ol>
    <li>Question1 - The smallest number that can be written as the sum of two primes in four different ways.
    <li>Question2 - (#Drawing pins * #paper clips) + #highlighters
    <li>Question3 - If a phone company charges $20 for the first 100 minutes and $0.10 for each additional minute, how much will it cost for a 200-minute phone call?
    </ol>
    <li><br/>Task4 : With the help of a ruler, sketch different types of shapes, such as squares, rectangles, triangles, and circles.

</ul>
  </b>
</div>
</div>
<div id="myModal3" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 14px;">
  <span class="close" onclick="closeModal3()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">To-do</h2>
  <b>
  <ul>
    <li>13:30 - 14:00 : Task1<br/>
    <br/><li>14:00 - 15:00 : Task2<br/>
    <br/><li>15:00 - 18:00 : Task3
    <ol>
    <li>15:00 - 16:00 : Question 1
    <li>16:00 - 17:00 : Question 2
    <li>17:00 - 18:00 : Question 3
    </ol>
    <br/><li>18:00 - 18:30 : Task4
</ul>
  </b>
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



