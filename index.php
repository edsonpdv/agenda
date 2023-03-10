<?php include_once("templates/header.php"); ?>

<!-- Gerar mensagem para os usuarios -->
<div class="container">
    <?php if (isset($printMsg) && $printMsg != '') : ?>
        <p id="msg"><?php echo $printMsg; ?></p>
    <?php endif ?>
</div>

<!-- Se o usuario tiver contato na sua agenda eles serão listados.
     Caso não haja nenhum contato direcionamos ele para adicionar-->

<h1 id="main-title">Minha agenda</h1>

<?php if (count($contacts) > 0) : ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <td scope="row" class="col-id"><?php echo $contact["id"]; ?></td>
                    <td scope="row"><?php echo $contact["name"]; ?></td>
                    <td scope="row"><?php echo $contact["phone"]; ?></td>
                    <td class="actions">
                        <a href="<?php echo $BASE_URL; ?>show.php?id=<?php echo $contact["id"]; ?>"><i class="fas fa-eye check-icon"></i></a>
                        <a href="#"><i class="far fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p id="empyt-list-text">Ainda não há contatos na sua agenda, <a href="<?php echo $BASE_URL; ?>create.php">Clique aqui para adicionar</a></p>
<?php endif; ?>

<?php include_once("templates/footer.php"); ?>