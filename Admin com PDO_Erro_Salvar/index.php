<?php
	
	//session_start(); // Inicia SESSÃO
	
	require 'funcoes/banco/conexao.php';
	conecta();
	
	//$senha_atual = '123';
	//echo md5(strrev($senha_atual));
	
	//echo $_SESSION['administrador'] -> administrador_nome; // Mostra nome do USUÁRIO LOGADO
	

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Admin com PHP E JQuery</title>
		<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/estilos.css" rel="stylesheet" media="screen">

    </head>

    <body>

        <div class="container">
            <div class="login">
                <h2>ÁREA RESTRITA</h2>
				
				<!-- Mensagens de Erro ou Sucesso -->
				<div class = "retorno">
					
				</div>	
				<!-- Mensagens de Erro ou Sucesso -->
				
                <form action="" class="form" method="post" name="form_login">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name = "login" class="form-control input-lg" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name = "senha" class="form-control input-lg" placeholder="Senha">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> Logar</button>
                </form>
				<center> <img src = "img/load.gif" align = "center" id = "load" alt = "Carregando" style = "display: none;" /> </center>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
