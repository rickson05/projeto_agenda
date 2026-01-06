<?php

include_once "templates/header.php";
include_once "config/connection.php";
include_once "config/process.php";
include_once "templates/backbtn.php";

?>

<div class="container">
    <h2>Novo Contato</h2>

    <!-- Os dados serão enviados para o arquivo process.php -->
    <form action="config/process.php?action=create" method="POST">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Observações</label>
            <textarea name="observacoes" class="form-control"></textarea>
        </div>

        <button class="btn btn-sucess">Cadastrar</button>
    </form>
</div>


<?php include_once "templates/footer.php"; ?>