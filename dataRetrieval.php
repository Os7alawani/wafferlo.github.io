<?php

// Connecting to the database
$conn = mysqli_connect("db-mysql-fra1-42089-do-user-15327179-0.c.db.ondigitalocean.com", "doadmin", "AVNS__6ABB6CWW3pynlGAy91", "wafferlo", "25060");
if (!$conn) {
    die("Connection Failed");
}
echo "<div>Connected Successfuly to Wafferlo Database <br/><br/></div>";


// Fetching all the data from Shop Table 
$sql = "SELECT * FROM Shop";
$query = mysqli_query($conn, $sql);

if ($query) {
    if (mysqli_num_rows($query) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th> Shop Name </th>";
        echo "<th> Shop Type </th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $row['ShopName'] . "</th>";
            echo "<td>" . $row['ShopType'] . "</th>";
            echo "</tr>";
        }
    } else {
    }
} else {
    echo "Fetching Failed";
}
