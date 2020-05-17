<?php

	/*
	#####################################
	Executa a função php responsável
	por inserir uma nova mensagem na
	tabela do banco de dados
	#####################################
	*/
	require_once('./php/chat-conexao.php'); //chama o arquvio chat-conexao.php

	$sql = $pdo->query("SELECT * FROM tbchat"); //executa uma seleção na tabela paraverificar
												//se existe novas mensagem no sistema


	//verifica se os campos nomes e mensagem estão preenchidos
	if(empty($_POST['nome']) || empty($_POST['mensagem']) ||
		$_POST['nome'] == '' || $_POST['mensagem'] == ''){

		//pode-se retornar um erro aqui
	}else{
		$nome = $_POST['nome']; //coloca o nome digitada na variavel nome
		$mensagem = $_POST['mensagem']; //coloca a mensagem na varivavel mensagem

		//insere a mensagem na tabela tbchat
		$sql = $pdo->query("INSERT INTO tbchat (nome, mensagem) VALUES ('$nome', '$mensagem')"); 
		
		//retorna o usuário para a página princiapl (atualizando o submit)
		header('Location: index.php');
	}
?>
<html>

<!-- Head -->
<head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chat - PHP</title>
	<link rel="icon" href="../img/icon.png">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	
</head> 
<!-- Final do Head -->
	<!-- Inicio do body -->
	<body onload="abaixarbarra()">

		<!-- Inicio do container -->
		<div class="container">

				<!-- Incio da row -->
				<div class="row">

					<!-- Inicio do col-md-5 -->
					<div class="col-md-5">

							<div class="divWelcome">
							<h1 class="TextosAparte"> <span id="TituloPrincipal">PHP</span> CHAT</h1>
							<hr style="border-color: #1c1c1c ; opacity: 25%;">
							<p class="TextosAparte">
							Seja bem vindo ao projeto PHP CHAT, este projeto consiste na criação de um site utiliando
							o php como linguaguem do back-end, no qual será responsável por armazenar as mensagens enviadas
							para os demais usuários. Este é um sistema simples, visando ajudar aqueles que precisam de um 
							sistema de chat utilizando a linguagem em PHP. Este é um sistema simplificado e que pode ser
							melhorado, sinta-se livre para se utilizar dos códigos disponibilizados no GitHub do desenvolvedor deste sistema. Obrigado pela atenção!</p>


							<span class="TextosAparte">- Pedro Pessoa</span>
							<a href="https://github.com/yzPeedro"><img src="../img/gitlogo.png" class="logos"></a>

					</div>
				</div>
				<!-- Final do col-md-5 -->

				<!-- Inicio do col-md-7 -->
					<div class="col-md-7">

						<!-- Divisão que renderiza o chat -->
							<div class="chat" id="chat">
									
							</div>

						<!-- Formulário de envios das mensagens -->
						<form class="formulariomsg" action="index.php" method="POST">
								<textarea name="mensagem" class="mensagem" placeholder="Digite sua mensagem aqui."></textarea><br>
								<input type="text" name="nome" class="digitarnome" placeholder="Digite Seu nome.">
								<input type="submit" class="botaoEnviar" Value="Enviar" id="btnEnviar">
						</form>
					</div>
				<!-- Final do col-md-7 -->

			</div>
			<!-- Final da row -->

		</div>
		<!-- Final do container -->
		
	</body>
	<!-- Final do body -->


	<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- /jQuery -->
	<script type="text/javascript" src="../js/script.js"></script>
	
</html>