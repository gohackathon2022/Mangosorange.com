<?php
$hostName = "localhost";
$userName = "ehardco1_mangos";
$password = "Mangos@#123";
$databaseName = "ehardco1_mangosorangedb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>