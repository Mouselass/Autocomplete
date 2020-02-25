<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['q'];
$sql = "select name from regions where name like '%".$id."%' limit 7";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["name"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>