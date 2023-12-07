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
echo "Connected Successfully to Wafferlo Database <br>";

$email = $_POST['email'];
$sql = "SELECT id FROM form WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Error: Email already exists.";
} else {

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO form (firstName,  email, catogery,satisfaction , comments) VALUES ( ?, ?, ?, ?,?)");
    $stmt->bind_param("sssss", $firstName, $email,  $catogery, $satisfaction, $comments);

    $name = $_POST['name'];
    $satisfaction = $_POST['satisfaction'];

    $FeatureToImproveArray = isset($_POST['feature']) && is_array($_POST['feature']) ? $_POST['feature'] : array();
    $FeatureToImprove = implode(', ', $FeatureToImproveArray);

    $Catogery = isset($_POST['catogery']) ? $_POST['catogery'] : '';
    $AdditionalComment = isset($_POST['comments']) ? $_POST['comments'] : '';

    $sql = "insert into form (Email, firstName, Satisfaction, Catogery, Comments) values ('$email', '$name', '$satisfaction', '$Catogery', '$AdditionalComment')";

    $query = mysqli_query($conn, $sql);

    if ($query)
        echo "Data Inserted to Form Table Successfully";
}
