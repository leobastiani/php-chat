<?php
include("chat-conexao.php");
$sql = $pdo->query("SELECT * FROM tbchat");

  foreach ($sql->fetchAll() as $key) {
	
		echo "<label class='nome'>".$key['nome']."</label>";
		echo "<p class='textomensagem'>".$key['mensagem']."</p>";

	}

?>