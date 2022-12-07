<!DOCTYPE html>
<html>
<head>
<title>
    RESUME
</title> 
<link href="/style.css" rel="stylesheet" type="text/css">    
</head>
<body>
<div class="header"><a href="resume.php" title="Go to Home">Home - </a> 
    <a href="mailto:teste@gmail.com" title="Send an email">Contato -</a> 
    <a href="https://www.linkedin.com/in/tamires-costa" target="_blank" title="Go to Linkedin">Linkedin - </a>
    <a href="/editar.php" title="Go to Edição">Editar Informações - </a>
    <a href="/inserir.html" title="Go to Inserir">Inserir Informações -</a>
    <a href="/indexResume.php" title="Go to Index"> Logout </a>
</div>
   
<table style="width:80%" align="center">
    <tr>
        <th rowspan="1" style="text-align: center"><img style="width:55%" src="mypicture.jpg" alt="tamires"></th>
        <th style="width:60%" align="center">
            <?php
                require("conectaBD.php");
                $results = $mysqli_connection->query("SELECT nome FROM RESUMO_GERAL");
                while ($row = $results->fetch_assoc())
                    echo '<h1>'.$row["nome"].'</h1>';
                ?>
            </th> 
    </tr>
    <tr>
        <th class="a" colspan=2>Perfil</th>
    </tr>
    <tr>
        <td class="resum" colspan=2>
            <ul>
                <?php
                    $results = $mysqli_connection->query("SELECT perfil_descricao FROM RESUMO_GERAL");
                    while ($row = $results->fetch_assoc())  
                        echo '<li>'.$row["perfil_descricao"].'</li>';
                    ?> 
                </ul>    
         </td>
    </tr>
    <tr>
        <th class="a" colspan=2>Objetivo</th>
    </tr>
    <tr>
        <td class="resum" colspan=2>
            <ul>
                <?php
                $results = $mysqli_connection->query("SELECT objetivo_descricao FROM RESUMO_GERAL");
                while ($row = $results->fetch_assoc())  
                    echo '<li>'.$row["objetivo_descricao"].'</li>';
                ?>
            </ul>    
         </td>
    </tr>
     <tr>
        <th class="a" colspan="2">Projetos e Competências</th>
    </tr>
    <tr> 
        <td  class="resum" colspan="1" style="text-align: center"><img style="width:90%" src="inpe.jpg" alt="INPE"> 
        <br>Link: <a href="http://www.inpe.br/" target="_blank" title="Go to INPE" value="INPE">INPE</a>
        </td>
        <td class="resum" style="width:75%" align="center">
            <ul>
            <?php
                $results = $mysqli_connection->query("SELECT projetos_resumo FROM RESUMO_GERAL");
                while ($row = $results->fetch_assoc())
                    echo '<li>'.$row["projetos_resumo"].'</li>';
                ?>
            </ul>    
        </td>
    </tr>
</table>
    
<div class="footer">
  <p>Email: <a href="mailto:teste@gmail.com" title="Send an email">teste@gmail.com</a></p>
</div>
    
</body>
</html>
<?php
    $results->free(); 

	$mysqli_connection->close();
?>