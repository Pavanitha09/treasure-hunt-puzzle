<?php
$conn = mysqli_connect("sql100.epizy.com", "epiz_34189089", "lgS8Wqrfk43c3");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create database if it doesn't exist
$db_name = "epiz_34189089_user_details";
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if (!mysqli_query($conn, $sql)) {
    die("Error creating database: " . mysqli_error($conn));
}

// select the database
mysqli_select_db($conn, $db_name);

// create table if it doesn't exist
$table_name = "details";
$sql = "CREATE TABLE IF NOT EXISTS $table_name (
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    time FLOAT(24) DEFAULT 0,
    score INT(20) DEFAULT 0
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

session_start();

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['signup'])) {
    // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM details WHERE email LIKE '$email'";
    $result = $conn->query($query);
    if (!$result) die ("Access failed");
    $no_of_rows = $result->num_rows;
    if($no_of_rows>0)
    {
      echo "<script>
      alert('Email-id already exists');
      window.location.href='signup.html';
      </script>";
    }
    else{
    $sql = "INSERT INTO details (username, password, email) VALUES ('$username', '$password', '$email')";
    $_SESSION['u_name']=$username;
    $_SESSION['email_id'] = $email;
    $_SESSION['log']=1;
    if (mysqli_query($conn, $sql)) {
        echo "<script>
      window.location.href='home.php';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
}


if(isset($_POST['Login']) && isset($_POST['mail']) && isset($_POST['pass']))
{
  $emailid=$_POST['mail'];
  $passw=$_POST['pass'];
  $_SESSION['user']=$emailid;
  
  $sql="SELECT username,password FROM details WHERE email LIKE '$emailid'";
  $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        if($row["password"]==$passw)
  {
    $y = $row["username"];
    $_SESSION['u_name']=$y;
    $_SESSION['email_id'] = $emailid;
    $_SESSION['log']=1;
    echo "<script>
    window.location.href = 'home.php';
    </script>";
  }
  else
  {
    echo "<script>
    alert('LOGIN NOT SUCCESSFUL');
    window.location.href='login.html';
    </script>";
  }
    }
  
}
?>
