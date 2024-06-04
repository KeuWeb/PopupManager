<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>Popup Manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/popup.manager.css">
    <style type="text/css">
    	#container-index{
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		margin-left: -230px;
    		margin-top: -330px;
    		box-shadow: 0px 0px 10px 2px #DDD;
    		width: 400px;
    		background-color: #FFF;
    		padding: 30px;
    		text-align: justify;
    		border-radius: 5px;
    		font-family: 'Poppins';
    	}
    	ul li{
    		list-style: none;
    		width: 48.5%;
    		background-color: #069;
    		border-radius: 5px;
    		margin: 5px 5px 0 0;
    		position: relative;
    		float: left;
    		cursor: pointer;
    		font-size: 0.8em;
    		text-align: center;
    		color: #FFF;
    		padding: 10px 0;
    	}
    </style>
</head>
<body style="background-color: #F0F0F0;">
<div id="msg-popup" class="animated">
	<span></span>
	<div class="time-bar bar" data-style="smooth"></div>
</div>
	<div id="container-index">
		<h1 style="width: 100%;text-align: center;">POPUP MANAGER</h1>
		<p style="width: 98%;">Uma biblioteca simples de uma modal em forma de PopUp para gerenciamento de mensagens de interação entre o site/sistema e usuário/cliente na plataforma, servindo em qualquer plataforma na internet. Escolha uma das cores disponiveis para identificação do tipo de popup e clique no botão da posição desejada:</p>
		<label style="width: 100%;text-align: left !important;display: table;font-size: 0.9em;">
			Cor da Popup
			<select id="color-popup" style="width: 98%;padding: 2%;">
				<option value="info">Cor de informação</option>
				<option value="alert">Cor de alerta</option>
				<option value="success">Cor de sucesso</option>
				<option value="error">Cor de erro</option>
			</select>
		</label>
		<ul style="width: 100%;display: table;padding: 0;">
			<li data-type="TC" style="margin: 5px 5px 0 0;">Popup Superior Central</li>
			<li data-type="BC">Popup Inferior Central</li>
			<li data-type="TL" style="margin: 5px 5px 0 0;">Popup Superior Esquerdo</li>
			<li data-type="TR">Popup Superior Direito</li>
			<li data-type="BL" style="margin: 5px 5px 0 0;">Popup Inferior Esquerdo</li>
			<li data-type="BR">Popup Inferior Direito</li>
		</ul>
	</div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/app.popup.manager.js"></script>
<script type="text/javascript">
	$(document).on('click','ul li',function(){
		var tipo_cor = $('#color-popup option:selected').val();
		var tipo_posicao = $(this).attr("data-type");

		msgPopup(tipo_cor,tipo_posicao,"Olá! Mensagem de texto ou interação com Usuário do Sistema ou Site, onde poderá inserir textos personalizados para melhor comunicação interna.");
	});
</script>
</html>	