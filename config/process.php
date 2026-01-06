<?php

include_once "config/connection.php";

// Verificar a existência de um parâmetro na URL
$action = $_GET["action"] ?? null;

/* CREATE */
if($action == "create"){

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $observacoes = $_POST["observacoes"];

    $stmt = $conn->prepare("INSERT INTO contatos (nome, telefone, observacoes) VALUES (:nome, :telefone, :observacoes)");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":observacoes", $observacoes);

    $stmt->execute();

    // Redirecionar o navegador do usuário para outra página
    header("Location: ../index.php");

}

// /* UPDATE */
// if($action == "update"){

//     $id = $_POST["id"];
//     $nome = $_POST["nome"];
//     $telefone = $_POST["telefone"];
//     $observacoes = $_POST["observacoes"];

//     $stmt = $conn->prepare("UPDATE contatos SET nome = :nome, telefone = :telefone, observacoes = :observacoes WHERE id = :id");

//     $stmt->bindParam(":nome", $nome);
//     $stmt->bindParam(":telefone", $telefone);
//     $stmt->bindParam(":observacoes", $observacoes);
//     $stmt->bindParam(":id", $id);

//     $stmt->execute();

//     // Redirecionar o navegador do usuário para outra página
//     header("Location: ../index.php");
        
// }


// /* DELETE */
// if($action == "delete"){

//     $id = $_GET["id"];
//     $stmt = $conn-prepare("DELETE FROM contatos WHERE id = :id");

//     $stmt->bindParam(":id", $id);

//     $stmt->execute();

//     // Redirecionar o navegador do usuário para outra página
//     header("Location: ../index.php");

// }



?>