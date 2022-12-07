<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/style.css" rel="stylesheet" type="text/css"> 
    
</head>
<body>
    
<div class="header"><a href="/resume.php" title="Go to Home">Home - </a> 
    <a href="mailto:teste@gmail.com" title="Send an email">Contato -</a> 
    <a href="https://www.linkedin.com/in/tamires-costa" target="_blank" title="Go to Linkedin">Linkedin - </a>
    <a href="/inserir.html" title="Go to Inserir">Inserir Informações </a>
</div>
<table style="width:40% " align="center">
    <tr>
        <th class="a" colspan="2">Editar Informações</th>
    </tr>
    <tr>
        <td align="center">
        <form method="POST" action="update.php">
            <?php
                require("conectaBD.php");
                $results = $mysqli_connection->query("SELECT nome FROM RESUMO_GERAL");
                $row = $results->fetch_assoc();
            ?>
            <label>Nome: </label>            
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
            <label>Perfil:</label>
            <textarea style="height: 60px" type="text" name="perfil"></textarea><br>
            <label>Objetivo:</label>
            <textarea style="height: 60px" type="text" name="objetivo"></textarea><br>
                      
            <p>Projetos e Competências</p>
            <label>Descrição: </label>
            <textarea style="height: 60px" type="text" name="projetos_resumo"></textarea><br><br><br>
                        
            <input class="b" type="submit" value="ATUALIZAR">
            <input class="b" type="submit" value="DELETAR" formaction ="/delete.php">
            </form>
        </td>    
    </tr>
</table>
        
    
<div class="footer" align="bottom">
  <p>Email: <a href="mailto:teste@gmail.com" title="Send an email">teste@gmail.com</a></p>
</div>
    
</body>
</html>