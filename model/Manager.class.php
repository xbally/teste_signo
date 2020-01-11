<?php

class Manager extends Conexao {

	public function insertClient($table, $email, $senha, $nome, $telefone, $dtNasc, $cep, $estado, $cidade) {

		$pdo = parent::get_instance();
		$buscar = $pdo->prepare("SELECT * FROM $table where email = ?");
		$buscar->execute(array($email));
		$linha = $buscar->fetch(PDO::FETCH_ASSOC);

		if($buscar->rowCount()){
				header('location: ../view/erro_cadastro.php');
				exit;
			}else{
		try{
				$pdo = parent::get_instance();
				$insert = $pdo->prepare("INSERT INTO $table (email,senha,nome,telefone,data_nascimento,cep,estado,cidade) VALUES (:email, :senha, :nome, :telefone, :dtNasc, :cep, :estado, :cidade)");
				$insert -> bindParam(':email', $email);
				$insert -> bindParam(':senha', $senha);
				$insert -> bindParam(':nome', $nome);
				$insert -> bindParam(':telefone', $telefone);
				$insert -> bindParam(':dtNasc', $dtNasc);
				$insert -> bindParam(':cep', $cep);
				$insert -> bindParam(':estado', $estado);
				$insert -> bindParam(':cidade', $cidade);
				$insert->execute();
				header ('location: ../view/sucesso.php');
				}catch(PDOException $pdo){
							echo $pdo->getMessage();
						}
				}
		}

	public function login($table, $usuario,$senha) {
		$pdo = parent::get_instance();
		$buscar = $pdo->prepare("SELECT * FROM $table where email = ? and senha = ? ORDER BY nome ASC");
		$buscar->execute(array($usuario, $senha));
		$linha = $buscar->fetch(PDO::FETCH_ASSOC);

		if($buscar->rowCount()){
		            header ('location: ../PAINEL.php');
		            exit;
		        }else {
		        	header('location: ../erro.php');
							exit;
		        }
	}


			public function listClient($table) {
				$pdo = parent::get_instance();
				$sql = "SELECT * FROM $table ORDER BY nome ASC";
				$statement = $pdo->query($sql);
				$statement->execute();
				return $statement->fetchAll();
			}



}

?>
