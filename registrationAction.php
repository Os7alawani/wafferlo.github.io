<?php

// Connecting to the database
$dbhost = "db-mysql-fra1-42089-do-user-15327179-0.c.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS__6ABB6CWW3pynlGAy91";
$dbname = "wafferlo";
$port = "25060";

$conn = mysqli_connect($dbhost, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection Failed");
}
echo "<div>Connected Successfuly to Wafferlo Database <br/></div>";


$Email = $_POST['Email'];
$sql = "SELECT id FROM form WHERE Email = '$Email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Error: Email already exists.";
} else {

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO User (Email , Password , FirstName , LastName) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Email , $Password , $FirstName , $LastName);

    
    $Password = $_POST['Password'];
    $FirstName  = $_POST['FirstName'];
    $LastName = $_POST['LastName'];

    $sql = "insert into User (Email , Password , FirstName , LastName) values ('$Email' , '$Password' , '$FirstName' , '$LastName')";

    $query = mysqli_query($conn, $sql);

    if ($query)
        echo "Data Inserted to User Table Successfully";
}

mysqli_close($conn);
?>
