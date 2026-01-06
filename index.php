<?php

// Inclui o header (menu, navbar, etc)
include_once "config/connection.php";
include_once "templates/header.php";


$contatos = $conn->query("SELECT * FROM contatos ORDER BY id DESC");

$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="container">
    <div class="d-flex justify-content-beetween mb-3">
        <h2>Minha Agenda</h2>
        <a href="create.php" class="">Novo contato</a>
    </div>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Observacoes</th>
        </tr>

        <?php foreach($contatos as $contato): ?>
            <tr>
                <td> <?= $contato['nome'] ?> </td>
                <td> <?= $contato['telefone'] ?> </td>                
            </tr>
        <?php endforeach ?>
    </table>
</div>
