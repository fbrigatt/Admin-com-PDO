<?php
	// echo 'Retornou';
	// print_r($_POST);
	// echo $_POST['login']; // recupera campo login
	// echo $_POST['senha']; // recupera campo senha
	// echo 'logado';
	
	ob_start();
	session_start();

	require '../funcoes/banco/conexao.php';
	require '../funcoes/login/login.php';
	require '../funcoes/crud/crud.php';
	
	$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
	sleep(2);
	
	switch($acao) :
		case 'login':
			$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
			$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
			// echo $login;
			if(login($login, $senha)): // Se Login foi encontrado
				// CRIA A SESSÃO SE LOGIN ESTIRVER OK
				$_SESSION['administrador'] = pegaLogin($login);
			else:
				$dados = pegaLogin($login);
				if (empty($login) || empty($senha)):
					echo 'vazio';
				// echo $dados -> administrador_nome;
				elseif (!$dados):
					echo 'naoexiste'; //'Login não encontrado';
				elseif($dados -> administrador_senha != md5(strrev($senha))):
					echo 'diferentesenha'; //'Senha não confere';
				elseif($dados -> administrador_nivel > 2):
					echo 'nivel'; //'Você não tem permissão';
				endif;
			endif;
			break;
		case 'cadastro':
			// FALTA VALIDAR
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
			$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
			$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
			if (cadastro($nome, $email, $login, $senha, $nivel)) :
				echo "cadastrou";
			else :
				echo "erro";
			endif;
		break;
		default:
			echo 'erro';
			break;
	endswitch;
	ob_end_flush();
	