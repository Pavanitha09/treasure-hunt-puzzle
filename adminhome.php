<?php
include("admintable.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>MaptoMystery</title>
  <link rel="stylesheet" href="css/admin.css">
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
    table, td, th {
  border: 1.2px solid;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
}
table {
  width: 100%;
  color:white;
  border-collapse: collapse;
}
    
  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-JOyQiC+gcugri73+fd09hXFXWF03NHMge+tLPvUwL6Uk0r0Ie6aEzQ1Cm07gy4Xn8OmWdZdzgv2lD42Ie5o5+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php

session_start();
if($_SESSION['log1']!=1)
{
  header('Location: adminlogin.php');
}
?>

  <div class="blurry-img">
    <img src="images/img1.jpg" alt="Your image">
  </div>
  <div class="text-overlay">
  <i class="fas fa-lock"></i>
    <h1 style="color: rgb(186, 166, 50);font-size: 40px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"> MaptoMystery </h1>
</div>
<div class="heading-overlay">     
  <h1 style="color: rgb(205, 44, 44);font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-align:center"> ADMIN DASHBOARD
</div>
<div class="atable-overlay" style="top: 70%;left: 42%;">    
<div >
 <div >
   <div >
    <?php echo $deleteMsg??''; ?>
    <div >
      <table  style="text-align:center;">
       <thead><tr><th><p style="color:#215E32">S.No</p></th>
         <th><p style="color:#215E32">Username</p></th>
         <th><p style="color:#215E32">Email</p></th>
         <th><p style="color:#215E32">Time taken(in min)</p></th>
         <th><p style="color:#215E32">Score</p></th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td ><p style="color:#8C68AD"><?php echo $sn; ?></p></td>
      <td><p style="color:#8C68AD"><?php echo $data['username']??''; ?></p></td>
      <td><p style="color:#8C68AD"><?php echo $data['email']??''; ?></p></td>
      <td><p style="color:#8C68AD"><?php echo $data['time']??''; ?></p></td>
      <td><p style="color:#8C68AD"><?php echo $data['score']??''; ?></p></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</div>
  
</body>
</html>



