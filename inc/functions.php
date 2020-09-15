
<?php

function connectDB() {
    require 'config.php';
    $conn = null;
    global $host, $db, $user, $password, $options;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password, $options);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $conn;
}


function createTask($subject, $priority) {
    $connection = connectDB();
    try {
        if ($connection) {
            $query = 'INSERT INTO todo (subject,priority) VALUES (":subject",":priority")';
            $statement = $connection->prepare($query);
            $statement->bindParam(":subject", $subject, PDO::PARAM_STR);
            $statement->bindParam(":priority", $priority, PDO::PARAM_STR);
            $statement->execute();
            header('Location:?p=home');
        }
    } catch (PDOException $e) {
        echo 'Užduoties sukurti nepavyko: ' . $e->getMessage();
    }
    $connection = null;  // close a connection
}

function getAllTasks() {
    $connection = connectDB();
    $results = [];
    try {
        if($connection) {
            $query = "SELECT * FROM tasks";
            $statement = $connection->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $connection = null;
    return $results;
}