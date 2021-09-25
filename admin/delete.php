

<?php

$dsn = 'mysql:host=localhost;dbname=gimenes';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

} 

$ID = $_GET['ID'];
$sql = 'DELETE FROM clients WHERE ID=:ID';
$statement = $connection->prepare($sql);
if ($statement->execute([':ID' => $ID])) {
  header("Location: main.php");
}