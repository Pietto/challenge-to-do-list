<?php
function pdo_connect_mysql(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=backend", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
$pdo = pdo_connect_mysql();
?>