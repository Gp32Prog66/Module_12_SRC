<?php
$host = 'localhost';
$host = '5432';
$dbname = 'books';
$user = 'postgres';
$password = 'grapes';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}

?>