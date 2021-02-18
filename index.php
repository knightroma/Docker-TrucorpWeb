<?php

$conn =new mysqli("172.17.0.2","root","asd123","Trucorp");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


echo "Connect Success";
$sql = "SELECT * FROM Trucorp.users";
$result = $conn->query($sql);

echo "Jumlah user pada database: " . $result -> num_rows;
$conn->close();
?>