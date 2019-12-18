<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/shirt.css">
   
</head>
<body>
<div class="img1" >
        <img src="shirt2.jpg"><br>
        <p> A shirt is a cloth garment for the upper body (from the neck to the waist). Originally an undergarment worn exclusively by men, it has become, in American English, 
            a catch-all term for a broad variety of upper-body garments and undergarments. ... A shirt can also be worn with a necktie under the shirt collar.</p><br>
      </div>
      <!-- <p> A shirt is a cloth garment for the upper body (from the neck to the waist). Originally an undergarment worn exclusively by men, it has become, in American English, 
            a catch-all term for a broad variety of upper-body garments and undergarments. ... A shirt can also be worn with a necktie under the shirt collar.</p><br> -->

<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "shirt");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


$v = $_GET["pid"];
$sql = "SELECT * FROM website WHERE PID = ".$v;
//echo $v;

$result = $conn->query($sql);

// <div class="img1">
//         <img src="shirt2.jpg">
//       </div>


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "id: " . $row["PID"]. " - Name: " . $row["name"]. " price:" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>