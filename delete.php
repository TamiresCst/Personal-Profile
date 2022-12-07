<?php
	require('conectaBD.php');

	
	$nome = $_POST['nome'];
	$stmt = $mysqli_connection->prepare("DELETE FROM RESUMO_GERAL WHERE nome = ?");	
	$stmt->bind_param('s',$nome);

	$stmt->execute();	
	$stmt->close();

    header('Location: /resume.php');

?>