<?php

$con=mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

mysqli_select_db($con, "login");


$sql = "SELECT * FROM student";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["stud_id"]. " - Name: " . $row["stud_name"]. " " . $row["roll_no"]. "<br>";
    }
} else {
    echo "0 results";
}
$con->close();
 ?>
