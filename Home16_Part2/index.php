<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HW16_Part2</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>


<?php
$connect = mysqli_connect('127.0.0.1', 'root', '1', 'test') or die(mysqli_error($connect));

echo "<h2>Table#1</h2>";
$query_1 = "SELECT * FROM block WHERE theme = 'bartik' AND module = 'system'";
$result = $connect->query($query_1);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["bid"] . " , " . $row["module"] . " , " . $row["delta"] . ", " . $row["theme"] . ", " . $row["status"] . ", " . $row["weight"] . ", " . $row["region"] . ", " . $row["custom"] . ", " . $row["visibility"] . ", " . $row["title"] . ", " . $row["cache"] . "<br>";
    }
} else {
    echo "0 results";
}

echo "<h2>Table#2</h2>";
$query_2 = "SELECT * FROM node WHERE type = 'delivery' AND title LIKE '8046%' AND DATE_FORMAT(FROM_UNIXTIME(created), '%M') = 'October'";
$result = $connect->query($query_2);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["nid"] . " , " . $row["vid"] . " , " . $row["type"] . ", " . $row["language"] . ", " . $row["title"] . ", " . $row["uid"] . ", " . $row["status"] . ", " . $row["created"] . ", " . $row["changed"] . ", " . $row["comment"] . ", " . $row["promote"] . ", " . $row["sticky"] . ", " . $row["tnid"] . ", " . $row["translate"] . "<br>";
    }
} else {
    echo "0 results";
}

echo "<h2>Table#4</h2>";
$query_4 = "SELECT * FROM variable WHERE name LIKE '%cache%' AND NOT name = 'cache'";
$result = $connect->query($query_4);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["name"] . " , " . $row["value"] . "<br>";
    }
} else {
    echo "0 results";
}

$connect->close();
?>

</body>
</html>
