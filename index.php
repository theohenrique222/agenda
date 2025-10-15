<?php 
    include_once("config/url.php");
    include_once("templates/header.php");

?>

    <div class="container">
        <?php if(!empty($printMsg) && $printMsg != '' ): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $contact['id'] ?></td>
                            <td scope="row"><?= $contact['name'] ?></td>
                            <td scope="row"><?= $contact['phone'] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $contact['id'] ?>" class="fa fa-eye check"></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id'] ?>"><i class="fa fa-edit check-icon"></i></a>
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a></p>
        <?php endif; ?>
    </div>

<?php 

 include_once("templates/footer.php");
 
 ?>