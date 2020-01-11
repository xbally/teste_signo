<?php

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$nome = $telefone = $tel = $email = $senha = $dtNasc = $dtNascent = $cep = $estado = $cidade = "";

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['name'];
$tel = $_POST['telefone'];
$dtNascent = $_POST['dataNascimento'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

		if(empty($nome) && empty($telefone) && empty($email) && empty($senha) && empty($dtNasc) && empty($cep) && empty($estado) && empty($cidade)) {
			header('Location: ../view/erro_cadastro.php');
			exit();
		}else {

			$dtNasc = md5($dtNasc);
			$telefone= md5($tel);
			$manager->insertClient("usuario",$email,$senha,$nome,$telefone,$dtNasc,$cep,$estado,$cidade);
		}

?>
