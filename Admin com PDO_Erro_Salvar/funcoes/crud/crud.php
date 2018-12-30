<?php

	// FUNÇÃO DE CADASTRO
	function cadastro($nome, $email, $login,  $senha, $nivel){
		
		$pdo = conecta();
		
		try{
			
			$cadastro = $pdo -> prepare("INSERT INTO administrador (administrador_nome, administrador_email, administrador_login, 
			                           administrador_senha, administrador_nivel) VALUES (?,?,?,?,?)");
									   
			$cadastro -> bindValue(1, $nome, PDO::PARAM_STR);
			$cadastro -> bindValue(2, $email, PDO::PARAM_STR);
			$cadastro -> bindValue(3, $login, PDO::PARAM_STR);
			$cadastro -> bindValue(4, md5(strrev($senha)), PDO::PARAM_STR);
			$cadastro -> bindValue(5, $nivel, PDO::PARAM_STR);
			$cadastro -> execute();
			
			if ($cadastro -> rowCount() > 0) :
				return TRUE;
			else :
				return FALSE;
			endif;
			
			
		} catch(PDOException $e) {
			echo $e -> getMessage();
		}		
		
	}