<?php
// Assuming you have a MySQL database set up with a table named 'users' and fields 'username' and 'information'

$servername = "10.0.3.15";
$username = "root";
$password = "test";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve information from the database based on the provided username
if(isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT information FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Information: " . $row["information"];
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
