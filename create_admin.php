<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'app/lib/Database.php';

$db = new Database();

// Check if database link is established
if (!$db->link) {
    echo "<h1>Database Connection Failed!</h1>";
    echo "Please check your <code>app/config/config.php</code> settings.<br>";
    echo "Current settings:<br>";
    include 'app/config/config.php';
    echo "DB_HOST: " . DB_HOST . "<br>";
    echo "DB_USER: " . DB_USER . "<br>";
    echo "DB_NAME: " . DB_NAME . "<br>";
    exit();
}

$name = "Temp Admin";
$email = "admin@gmail.com";
$password = password_hash("password123", PASSWORD_DEFAULT);
$rolename = "Supper Admin";
$create_date = date("Y-m-d H:i:s");

// Check if tbl_users exists
$tableCheck = $db->link->query("SHOW TABLES LIKE 'tbl_users'");
if ($tableCheck->num_rows == 0) {
    echo "<h1>Error: Table 'tbl_users' not found!</h1>";
    echo "Did you import the <code>pro_usermanagent.sql</code> file into database <b>" . DB_NAME . "</b>?";
    exit();
}

// Check if user already exists
$checkQuery = "SELECT * FROM tbl_users WHERE email = '$email'";
$checkResult = $db->select($checkQuery);

if ($checkResult == false) {
    $query = "INSERT INTO tbl_users (name, email, password, rolename, status, create_date) 
              VALUES ('$name', '$email', '$password', '$rolename', 0, '$create_date')";
    
    $result = $db->insert($query);
    
    if ($result) {
        echo "<h1>Success! Admin account created.</h1>";
        echo "<b>Email:</b> admin@gmail.com<br>";
        echo "<b>Password:</b> password123<br>";
        echo "<br>Tame have <a href='login.php'>Login</a> kari shako cho.";
    } else {
        echo "<h1>Error: Failed to insert admin account.</h1>";
        echo $db->link->error;
    }
} else {
    echo "<h1>Admin account already exists!</h1>";
    echo "<b>Email:</b> admin@gmail.com<br>";
    echo "<b>Password:</b> password123<br>";
    echo "<br>Tame have <a href='login.php'>Login</a> kari shako cho.";
}
?>

