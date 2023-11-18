<?php
// Assuming you have a MySQL database set up with a table named 'users' and fields 'username' and 'information'

$servername = "localhost";
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
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "First Name: " . $row["first_name"] . "<br>";
            echo "Last Name: " . $row["last_name"] . "<br>";
            echo "Age: " . $row["age"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "City: " . $row["city"] . "<br>";
            echo "State: " . $row["state"] . "<br>";
            echo "Country: " . $row["country"] . "<br>";
            echo "Zip Code: " . $row["zip_code"] . "<br>";
            echo "SIN: " . $row["sin"] . "<br>";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
