<?php
// connect to MySQL server
$conn = mysqli_connect("localhost", "root", "root");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create database if it doesn't exist
$db_name = "my_database";
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    die("Error creating database: " . mysqli_error($conn));
}

// select the database
mysqli_select_db($conn, $db_name);

// create table if it doesn't exist
$table_name = "users";
$sql = "CREATE TABLE IF NOT EXISTS $table_name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
} else {
    die("Error creating table: " . mysqli_error($conn));
}

// process form data when submitted
if (isset($_POST['submit'])) {
    // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // insert data into table
    $sql = "INSERT INTO $table_name (username, password, email) VALUES ('$username', '$password', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// close database connection
mysqli_close($conn);
?>
