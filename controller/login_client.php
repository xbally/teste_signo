<?php

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$usuario = $senha ="";
$usuario = $_POST['email'];
$senha = $_POST['senha'];


		if(empty($usuario) || empty($senha)) {
			header('Location: ../css/erro.php');
			exit();
		}else{
			$manager->login("usuario", $usuario,$senha);
		}

?>
