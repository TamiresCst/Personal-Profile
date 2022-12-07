<?php
	require('conectaBD.php');    

    $nome = $_POST['nome'];
    $perfil = $_POST['perfil'];
    $objetivo = $_POST['objetivo'];
    $projetos = $_POST['projetos_resumo'];

	$stmt = $mysqli_connection->prepare("UPDATE RESUMO_GERAL SET nome= ?, perfil_descricao = ? , objetivo_descricao = ?, projetos_resumo = ? WHERE nome = ?");

	$stmt->bind_param('sssss', $nome, $perfil, $objetivo, $projetos, $nome);
    $stmt->execute();
    $stmt->close();

    header('Location: /resume.php');

?>