<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/loginstyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="mainheader">
      <img src="images/logo1.png" alt="image"  class="center" style="display: block;margin-left: auto;margin-right: auto;width: 15%;height: 30%">
      <div class="center" style="font-size: 27px;color: #4d4949;font-weight: 600;letter-spacing: 2px;text-align: center;">
         MaptoMystery
      </div>
      <br/>
      <div class="login-form" style="border:solid 1.5px black;background-color: black;border-radius: 10px;">
         <!-- <img src="logo1.png" alt="image"  class="center" style="display: block;margin-left: auto;margin-right: auto;width: 30%;height: 60%">-->
         <div class="text">
            ADMIN LOGIN
         </div>
         <form method="post" action="adminlogin.php">
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="email" name = "adminmail" placeholder="Email or Phone">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name = "adminpass" placeholder="Password">
            </div>
            <button name="adminlogin">LOGIN</button>
         </form>
      </div>
   </div>
   <?php
            $conn = mysqli_connect("sql100.epizy.com", "epiz_34189089", "lgS8Wqrfk43c3");

            // check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // create database if it doesn't exist
            $db_name = "epiz_34189089_admin_details";
            $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
            if (!mysqli_query($conn, $sql)) {
                die("Error creating database: " . mysqli_error($conn));
            }
            
            // select the database
            mysqli_select_db($conn, $db_name);
            
            // create table if it doesn't exist
            $table_name = "a_details";
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                username VARCHAR(30) NOT NULL,
                password VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL
            )";
            if (!mysqli_query($conn, $sql)) {
                die("Error creating table: " . mysqli_error($conn));
            }
            
            session_start();

            if(isset($_POST['adminlogin']) && isset($_POST['adminmail']) && isset($_POST['adminpass']))
            {
                $emailid=$_POST['adminmail'];
                $passw=$_POST['adminpass'];
                $_SESSION['user']=$emailid;
                $sql="SELECT username,password FROM a_details WHERE email LIKE '$emailid'";
                $result = mysqli_query($conn, $sql);

                    if ($result === false) {
                        echo "Error: " . mysqli_error($conn);
                    } else {
                        $row = mysqli_fetch_array($result);
                        if($row["password"]==$passw)
                {
                    $y = $row["username"];
                    $_SESSION['u_name']=$y;
                    $_SESSION['log1']=1;
                    echo "<script>
                    window.location.href = 'adminhome.php';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('LOGIN NOT SUCCESSFUL');
                    window.location.href='adminlogin.php';
                    </script>";
                }
                    }
            
            }
            
        ?>
   </body>
</html>