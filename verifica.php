<html>
<head>
<title>
   VERIFICA LOGIN
</title>    
</head>
    <body>
   <?php    
        
    require("conectaBD.php");    
        
    if ((isset($_POST['login']) && (isset($_POST['senha'])))){
        
        $login = $_POST['login'];
        $senha = $_POST['senha'];    
        echo "LOGIN = $login SENHA = $senha";
        
        $results = $mysqli_connection->query("SELECT * FROM USUARIOS where login = '$login' && senha = '$senha' LIMIT 1");
        $results_login =  mysqli_fetch_assoc($results);
        
        if(isset($results_login)){
            //echo '<td> Logado';
            header("Location: resume.php");
        }else{
            echo '<td> Usuário não existe';
        }
    }    
    
    $results->free();

	$mysqli_connection->close();
        
    ?>    
    </body>
    
</html>