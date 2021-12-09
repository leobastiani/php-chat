<?php
/*
########################
	Função php que se conecta ao
	banco de dados
########################
*/
	try {
		$dns = "mysql:dbname=chat_php;host=db";
		$user = "root";
		$pass = "root";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}
	/*
		Importante: Lembre-se sempre de adaptar a conexão quando
		houve uma alteração no banco (adicionar tabelas, remover tabelas,
		alterar nome do banco e etc)
	*/

  $sql = $pdo->query("SELECT * FROM tbchat");

  if($sql === false) {
    $pdo->query("CREATE TABLE tbchat (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        mensagem VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )");
  }
?>
