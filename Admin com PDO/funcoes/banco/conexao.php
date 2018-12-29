<?php

// CONSTANTES
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'adminjquery');

// FUNÇÃO DE CONEXÃO
function conecta(){
	$dsn = "mysql:host=".HOST.";dbname=".DB;

	try{
		$conn = new PDO($dsn, USUARIO, SENHA);
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(PDOException $erro){
		echo 'ERRO: ' . $erro -> getMessage();
	}
	
}
