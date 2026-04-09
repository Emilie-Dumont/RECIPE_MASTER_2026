<?php

// on va chercher ça sur https://www.php.net/manual/en/pdo.connections.php
try {
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
}
