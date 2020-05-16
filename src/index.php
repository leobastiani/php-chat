<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chat - PHP</title>
	<script type="text/javascript" src="js/script.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
</head>
	<body>

		<div class="container">

			<div class="row">

				<div class="col-md-5">

						<div class="divWelcome">
						<h1 class="TextosAparte"> <span id="TituloPrincipal">PHP</span> CHAT</h1>
						<hr style="border-color: #1c1c1c ; opacity: 25%;">
						<p class="TextosAparte">
						Seja bem vindo ao projeto CHAT - PHP, este projeto consiste na criação de um site utiliando
						o php como linguaguem do back-end, no qual será responsável por armazenar as mensagens enviadas
						para os demais usuários. Este é um sistema simples, visando ajudar aqueles que precisam de um 
						sistema de chat utilizando a linguagem em PHP. Este é um sistema simplificado e que pode ser
						melhorado, sinta-se livre para se utilizar dos códigos disponibilizados no GitHub do desenvolvedor deste sistema. Obrigado pela atenção!</p>


						<span class="TextosAparte">- Pedro Pessoa</span>
						<a href="https://github.com/yzPeedro"><img src="../img/gitlogo.png" class="logos"></a>

				</div>
			</div>
			

			<div class="col-md-7">
					<div class="chat">

						<label class="nome">
							Pedro Pessoa
						</label>
							<p class="textomensagem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat, sapien ac vulputate accumsan, arcu enim dignissim odio, vel hendrerit augue metus a sapien. Donec et augue massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec felis leo, hendrerit nec auctor sit amet, imperdiet non magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras porttitor quam ante, ac fringilla orci interdum eget. Donec aliquam nibh ligula, id ullamcorper nisl dignissim et. In lobortis magna sit amet gravida laoreet. Nunc tincidunt orci sed justo finibus malesuada. In ac mi non risus semper congue. Morbi ullamcorper congue massa eget imperdiet. Aenean maximus elit non commodo posuere. In gravida augue tortor, sit amet imperdiet dolor porttitor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat, sapien ac vulpu

							i interdum eget. Donec aliquam nibh ligula, id ullamcorper nisl dignissim et. In lobortis magna sit amet gravida laoreet. Nunc tincidunt orci sed justo finibus malesuada. In ac mi non risus semper congue. Morbi ullamcorper congue massa eget imperdiet. Aenean maximus elit non commodo posuere. In gravida augue tortor, sit amet imperdiet dolor porttitor sit amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam volutpat, sapie
							</p>
					</div>
				<form class="formulariomsg">
						<textarea name="mensagem" class="mensagem" placeholder="Digite sua mensagem aqui."></textarea><br>
						<input type="submit" class="botaoEnviar" Value="Enviar">
				</form>
			</div>
		</div>

		</div>

		
	</body>



	<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- /jQuery -->
</html>