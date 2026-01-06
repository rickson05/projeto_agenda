<?php

include_once "config/connection.php";
include_once "templates/header.php";
include_once "templates/backbtn.php";

$id = $_GET["id"];
$stmt = $conn-prepare("SELECT * FROM contatos WHERE id = :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h2>Editar contato</h2>

    <form action="config/process.php?action=update" method="POST">
        <input type="hidden" name="id" value=" <?= $contatos['id'] ?> ">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value=" <?= $contatos['nome'] ?> " class="form-control">
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" value=" <?= $contatos['telefone'] ?> " class="form-control">
        </div>

        <div class="mb-3">
            <label>Observções</label>
            <textarea name="observacoes" class="form-control"> <?= $contatos['observacoes'] ?> </textarea>
        </div>

        <button class="btn btn-warning">Salvar</button>
    </form>
</div>


<?php include_once "templates/footer.php"; ?>