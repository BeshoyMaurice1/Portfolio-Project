<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
