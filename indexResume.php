<html>
<head>
<title> PÁGINA INICIAL </title>
</head>
    <body>
        <div style="width:100% " align="center">
        <?php
        $login_cookie = $_COOKIE['login_user'];
        if(isset($login_cookie)){
            echo "Olá $login_cookie";
        }else{
            echo '<br><p> Olá visitante! </br> <b>PAGINA RESTRITA!</b></b>';            
            echo "<br><br> Faça o login <a href=login.html>AQUI</a>";
        }
        ?>
        </div>        
    </body>
</html>