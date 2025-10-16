<?php 
    include_once("config/url.php");
    include_once("config/process.php");

    // clear mensage
    
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Agenda de contatos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                    <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda de contatos" width="30" height="24" class="d-inline-block align-text-top">
                    Agenda de contatos  
                </a>
                <div>
                    <div class="navbar-nav">
                        <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                        <a class="nav-link" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
                    </div>
                </div>
            </div>

        </nav>
    </header>