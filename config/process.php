<?php 

session_start();

include_once("connection.php");
include_once("url.php");

$contacts = [];
$id = '';

if (!empty($_GET)) {
    $id = $_GET['id'];
}

if (!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $contacts = $stmt->fetch();
} else {
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
}



