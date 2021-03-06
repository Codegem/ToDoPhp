
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


function createTask($subject, $priority, $duedate, $status) {
    $status = 0;
    $connection = connectDB();
    try {
        if ($connection) {
            $query = 'INSERT INTO todo (subject, priority, duedate, status) VALUES (:subject, :priority, :duedate, :status)';
            $statement = $connection->prepare($query);
            $statement->bindParam(":subject", $subject, PDO::PARAM_STR);
            $statement->bindParam(":priority", $priority, PDO::PARAM_STR);
            $statement->bindParam(":duedate", $duedate, PDO::PARAM_STR);
            $statement->bindParam(":status", $status, PDO::PARAM_STR);
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
            $query = "SELECT * FROM todo";
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

function deleteTask($id) {
    $connection = connectDB();
    try {
        if ($connection) {
            $query = "DELETE FROM todo WHERE id = :id";
            $statement = $connection->prepare($query);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            header('Location:?p=home');
        }
    } catch (PDOException $e) {
        echo 'Delete task query failed: ' . $e->getMessage();
    }
    $connection = null;
}

    function completeTask($id) {
        $connection = connectDB();
        try {
            if($connection) {
                $query=("UPDATE todo SET status = 1 WHERE id = :id");
                $statement = $connection->prepare($query);
                $query = $statement->fetchAll();
                $statement->bindParam(":id", $id, PDO::PARAM_INT);
                $statement->execute();
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $connection = null;
    }

    function taskSummary($id) {
        $connection = connectDB();
        $summary = [];
        try {
            if($connection) {
                $query = "SELECT * FROM todo WHERE id = :id";
                $statement = $connection->prepare($query);
                $statement->bindParam(":id", $id, PDO::PARAM_INT); 
                $statement->execute();
                $summary = $statement->fetchAll();
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $connection = null;
        return $summary;
    }
    