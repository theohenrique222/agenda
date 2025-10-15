<?php 

session_start();

include_once("connection.php");
include_once("url.php");


$data = $_POST;

if (!empty($data)) {

    if ($data['type'] == 'create') {
        $name           = $data['name'];
        $phone          = $data['phone'];
        $observations   = $data['observations'];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        header("Location: " . $BASE_URL . "../index.php");
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            $_SESSION['msg'] = "Erro: Não foi possível criar o contato!";
        }
    }

} else {

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

}

$conn = null;