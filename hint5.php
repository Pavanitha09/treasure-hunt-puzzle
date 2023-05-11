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
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> RIDDLE - 5
</div>
<div class="name-overlay" style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h4><?php
echo "Welcome " . $name . "<br>";
?></h4>
</div>
<div class = "t-overlay" style="left: 6%;">
    <p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Find the word.
    <br/>(All letters are lowercase)
</div>
<div class = "t-overlay" style="top:50%;left:50%" >
<h2 style="color: #108916;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">HINTS:</h2>
<p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
        <li>This word has a repeated occurrence of two letters within it.
    </ul>
    <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
    <div id = "c1" style="top:50%;left:70%;display: none;" >
    <li>            <p style="color:white;">It is something that is smooth and has a soft texture</p>
            <button type="button" class = "button2" onclick="openModal1()" id="btnID2">
                Clue for 1st letter...
            </button>
            <br/><br/>
            <button type="button" class = "button1" onclick="show3()" id="btnID3">
                Next Clue...
            </button>
</div>
        </li>
</ul>
            <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
            <div id= "c2" style="display: none;" >
            <li>            <p style="color:white;">Clue for 3rd letter.</p>
    <button type="button" class = "button2" onclick="openModal2()">
    Clue...
</button>
<br/><br/>
<button type="button" class = "button1"  onclick="show8()" id="btnID7">
                Next Clue...
            </button>
</li>
</div>
</ul>
<ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
            <div id= "c5" style="display: none;" >
            <li>            <p style="color:white;">Clue for last letter.</p>
    <button type="button" class = "button2"  onclick="openModal3()">
    Clue...
</button>
</li>
</div>
</ul>
</p>
<button type="button" class = "button1" onclick="show1()" id="btnID1">
    Next clue...
</button>
    
</div>
    <!-- <a href="#" onclick="show1()"> Next clue...</a> -->
   
<p style="color: white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><a href="#" onclick="openModal1()"> Next clue...</a> to know the clues.</p>
</div>
<form method="post" action="answers.php">
<div class="form1-overlay" style="top: 60%;">

<input type="text" name = "answer51" id="field"  style="width: 10px;" required />
<input type="text" name = "answer52" id="field"  style="width: 10px;" required/>
<input type="text" name = "answer53" id="field"  style="width: 10px;" required/>
<input type="text" name = "answer54" id="field"  style="width: 10px;" required/>
<input type="text" name = "answer55" id="field"  style="width: 10px;" required/>
<input type="text" name = "answer56" id="field"  style="width: 10px;" required/>

</div>
<div class="form2-overlay" style="top: 60%;left:30%">
            <input type="submit" name="submit5" id="hint" value="Check" />
            </div>

         </form>
     
</div>
<div class="hintpopup-overlay">

<div id="myModal1" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 16px;">
  <span class="close" onclick="closeModal1()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">Hints for 1st letter</h2>  
  <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
        <li>It is a letter used in roman numerals.
    </ul>
    <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
    <div id = "c1a" style="top:50%;left:70%;display: none;" >
    <li>            <p style="color:white;">This letter is the name of a well-known personality in a Youtube video that has over 100 million views which appears after typing a specific word in Harnaaz Sandhu's Instagram bio</p>
        </li>
        </div>
</ul>
<button type="button" class = "button1" onclick="show2()" id="btnID1a">
    Next clue...
</button>
</div>
</div>
<div id="myModal2" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 16px;">
  <span class="close" onclick="closeModal2()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">Hints for 3rd letter</h2>  
  <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
        <li>It is the shape formed by index finger and thumb.
    </ul>
    <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
    <div id = "c2a" style="top:50%;left:70%;display: none;" >
    <li>            <p style="color:white;">It is the name of the character in death note.</p>
        </li>
        </div>
</ul>
<button type="button" class = "button1"  onclick="show4()" id="btnID2a">
    Next clue...
</button>
</div>
</div>
<div id="myModal3" class="modal3" style="background-color: rgb(255 255 255 / 0.3);backdrop-filter: blur(13px);font-size: 16px;">
  <span class="close" onclick="closeModal3()">&times;</span>
  <div style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;">
  <h2 style="color:rgb(186, 166, 50);text-align:center;">Hints for last letter</h2>  
  <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
        <li>This letter is commonly used as an abbrevation for various quantities in physics.
    </ul>
    <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
    <div id = "c3a" style="top:50%;left:70%;display: none;" >
        <video width="400" controls>
            <source src="images/video.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        <br/><br/>
        <button type="button" class = "button1" onclick="show7()" id="btnID3b">
    Next clue...
</button>
        </div>
</ul>
<ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding-top: 10px;color:white;">
    <div id = "c3b" style="top:50%;left:70%;display: none;" >
    <li>            <p style="color:white;">This letter is the first letter of the names of the days of the week.</p>
        </li>
        </div>
</ul>
<button type="button" class = "button1" onclick="show6()" id="btnID3a">
    Next clue...
</button>
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
function show1() {
    document.getElementById("c1").style.display = "block";
    document.getElementById('btnID1').style.display = "none";
}
function show2() {
    document.getElementById("c1a").style.display = "block";
    document.getElementById('btnID1a').style.display = "none";
}
function show3() {
    document.getElementById("c2").style.display = "block";
    document.getElementById('btnID3').style.display = "none";
}
function show4() {
    document.getElementById("c2a").style.display = "block";
    document.getElementById('btnID2a').style.display = "none";
}
function show5() {
    document.getElementById("c3").style.display = "block";
    document.getElementById('btnID4').style.display = "none";
}
function show6() {
    document.getElementById("c3a").style.display = "block";
    document.getElementById('btnID3a').style.display = "none";
}
function show7() {
    document.getElementById("c3b").style.display = "block";
    document.getElementById('btnID3b').style.display = "none";
}
function show8() {
    document.getElementById("c5").style.display = "block";
    document.getElementById('btnID7').style.display = "none";
}

</script>
</body>
</html>



