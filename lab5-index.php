<?php
$servername = "db";
$username = "root";
$password = "r00tpa55";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from foods limit 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ITEM_ID: " . $row["ITEM_ID"]. " - Name: " . $row["ITEM_NAME"]. " " . $row["ITEM_UNIT"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
