<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This body is working</h1>
<?php
    $servername = "cadet-search";
    $username = "root";
    $password = "H3ll0Th3r3!";
    $dbname = "twhsjrotc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT first_name, last_name FROM cadets";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> first_name: ". $row["first_name"]. " - last_name: ". $row["last_name"]. "cadet_rank" . $row["cadet_rank"]. "<br>". "<br> flight: ". $row["flight"]. "<br>cs_hours: ". $row["cs_hours"]. "<br>ldr_hours: ". $row["ldr_hours"]. "<br> activites: ". $row["activites"];
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
</body>
</html>
