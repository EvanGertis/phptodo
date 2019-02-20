<?php
global $servername;
$servername = "localhost";
global $username;
$username = "root";
global $password;
$password = "";
global $dbname;
$dbname = "task";




function getTaskById($id){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT $id, task FROM list"); 
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        return ($stmt->fetch())['task']; 
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
    $conn = null;
}

function getAllTasks(){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM list"); 
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        return ($stmt->fetchAll()); 
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
    $conn = null;

}

function insertNewTask($task, $id){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE list SET task=:task WHERE id=:id";

        $stmt = $conn->prepare($sql); 
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        return ($stmt->fetchAll()); 
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
    $conn = null;

}