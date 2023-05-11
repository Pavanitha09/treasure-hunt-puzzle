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
    email VARCHAR(50) NOT NULL
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

session_start();
// $_SESSION['time_s1'] = 0;
// $_SESSION['time_s1'] = 0;
// $_SESSION['time_s1'] = 0;
// $_SESSION['time_s1'] = 0;

if(isset($_POST['submit1']) && isset($_POST['answer1']))
{
  $score = 0;
  $userans=$_POST['answer1'];
  $actualans = "search";
  if($userans == $actualans){
    $score += 20;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint2.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint1.php';
    </script>";
  }  
}

// Hint2
if(isset($_POST['submit2']) && isset($_POST['answer2']))
{
  $userans=$_POST['answer2'];
  $actualans = 1202;
  if($userans == $actualans){
    $score += 20;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint3.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint2.php';
    </script>";
  }  
}

if(isset($_POST['submit3']) && isset($_POST['answer3']))
{
  $userans=$_POST['answer3'];
  $ans1 = 121;
  $ans2 = 80;
  $ans3 = 660;
  if($userans == $ans1){
    $score += 10;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint4a.php';
    </script>";
  }
  elseif($userans == $ans2){
    $score += 20;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint4b.php';
    </script>";
  }
  elseif($userans == $ans3){
    $score += 10;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint4c.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint3.php';
    </script>";
  }  
}
if(isset($_POST['submit4a']) && isset($_POST['answer4a']))
{
  $userans=$_POST['answer4a'];
  $actualans = 8967;
  if($userans == $actualans){
    $score += 5;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'deadend.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint4a.php';
    </script>";
  }  
}
if(isset($_POST['submit4b']) && isset($_POST['answer4b']))
{
  $userans=$_POST['answer4b'];
  $actualans = 764;
  if($userans == $actualans){
    $score += 20;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'hint5.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint4b.php';
    </script>";
  }  
}
if(isset($_POST['submit4c']) && isset($_POST['answer4c']))
{
  $userans=$_POST['answer4c'];
  $actualans = 297;
  if($userans == $actualans){
    $score += 5;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    window.location.href = 'deadend.php';
    </script>";
  }
  else{
    $score -= 2;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint4c.php';
    </script>";
  }  
}
if(isset($_POST['submit5']) && isset($_POST['answer51']) && isset($_POST['answer52']) && isset($_POST['answer53'])&& isset($_POST['answer54'])&& isset($_POST['answer55'])&& isset($_POST['answer56']))
{
  $a1 = $_POST['answer51'];
  $a2 = $_POST['answer52'];
  $a3 = $_POST['answer53'];
  $a4 = $_POST['answer54'];
  $a5 = $_POST['answer55'];
  $a6 = $_POST['answer56'];
  if($a1 == 'v' && $a2 == 'e' && $a3 == 'l' && $a4 == 'v' && $a5 == 'e' && $a6 == 't'){
    $score += 50;
    $t_s = $_SESSION['time_s1'];
    $_SESSION['time_e1'] = microtime(true);
    $t_e = $_SESSION['time_e1'];
    $time = $t_e - $t_s;
    $_SESSION['time'] = $time;
    $mailid = $_SESSION['email_id'];
    $sqlquery = "UPDATE details SET time = '$time' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
    }
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    $_SESSION['your_score'] = $score_new;
    $_SESSION['total_time'] = $time;
    echo "<script>
    window.location.href = 'win.php';
    </script>";
  }
  else{
    $score -= 3;
    $mailid = $_SESSION['email_id'];
    $sql1="SELECT score FROM details WHERE email LIKE '$mailid'";
    $result = mysqli_query($conn, $sql1);
    if ($result === false) {
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($result);
        $y = $row["score"];
        $score_new = $score + $y;
    }
    $sqlquery1 = "UPDATE details SET score = '$score_new' WHERE email = '$mailid'";
    if (mysqli_query($conn, $sqlquery1)) {
        echo " ";
    } else {
        echo "Error: " . $sqlquery1 . "<br>" . mysqli_error($conn);
    }
    echo "<script>
    alert('WRONG ANSWER');
    window.location.href='hint5.php';
    </script>";
  }  
}
?>