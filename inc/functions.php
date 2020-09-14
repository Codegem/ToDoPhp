
<?php

require 'config.php';
function connectDB() {
    global $host, $db, $username, $password, $options;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password, $options);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $conn;
}