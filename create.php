<?php 
    include_once("config/url.php");
    include_once("templates/header.php");

?>


<div class="container">
    <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title">Criar novo contato</h1>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST" id="create-form">
            <input type="hidden" name="type" value="create">

            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone de contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone de contato" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações: </label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Observações do contato" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php 

 include_once("templates/footer.php");
 
 ?>