<?php
	require('conectaBD.php');    

    $nome = $_POST['nome'];
    $perfil = $_POST['perfil'];
    $objetivo = $_POST['objetivo'];
    $projetos = $_POST['projetos_resumo'];
   
    $stmt = $mysqli_connection->prepare("INSERT INTO RESUMO_GERAL(nome, perfil_descricao, objetivo_descricao, projetos_resumo) VALUES (?, ?, ?, ?)");
	$stmt->bind_param('ssss', $nome, $perfil, $objetivo, $projetos); 
    $stmt->execute();
   
    $mysqli_connection->close();

    header('Location: /resume.php');
?>