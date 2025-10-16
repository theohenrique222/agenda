<?php 
    include_once("config/url.php");
    include_once("templates/header.php");
    include_once("config/process.php");

?>


<div class="container">
    <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title">Editar contato</h1>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST" id="create-form">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contacts['id'] ?>">

            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" value="<?= $contacts['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone de contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone de contato" value="<?= $contacts['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações: </label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Observações do contato" rows="3"><?= $contacts['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

<?php 

 include_once("templates/footer.php");
 
 ?>