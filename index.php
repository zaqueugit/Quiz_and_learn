<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="icon" href="/assets/images/logo.png" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Quiz To Learn</title>
	<!-- CSS externo -->
	<link rel="stylesheet" href="/assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://codepen.io/P1N2O/pen/xxbjYqx.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<background color="#AFEEEE"></background>
<main>
<div class="context"></div>
    
	<div class="container_tela-principal">
		<div class="row">
			<div class="col-md-12">
				<img src="assets/images/logo.png" alt="Logo" style="width:30%;">
			</div>
			<div class="col-md-12">
				<span id='instrucoes'>Fase 1</span>
				<input type="hidden" id='instrucoes_id' name='instrucoes_id' value="<?= base64_encode(1) ?>" />
			</div>

			<div class="col-md-12 Acertos" style="margin: 10px 0; display:none;" ; display:none;>
				<span class='placar'>0 Acertos</span>
				<br />
				<span id='cronometro'></span>
				<span id="final_quest"></span>
			</div>

			<div class="col-md-12 barra_progresso" style="margin: 10px auto; max-width: 50% !important;display:none;">
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
		<div class="begin_quiz">
			<button class="btn_start">
				<a>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Vamos Começar?
				</a>
			</button>
		</div>
		<div class="questao">
			<div class="topoQuestao" style="display: inline-block; text-align: center;">
				<div style="display: inline-flex;">
					<span id='nQuestao'>?</span>
					<h3 id='pergunta'>???</h3>
				</div>
				<div id='aviso' class='rodapeQuestao'>
					<span id='numero'></span>
					de <span id='total'></span>
				</div>
			</div>
			<div class='corpoQuestao'>
			
				<ol class='alternativas'>
					<li id="a" value="a" class='resposta'></li>
					<li id="b" value="b" class='resposta'></li>
					<li id="c" value="c" class='resposta'></li>
					<li id="d" value="d" class='resposta'></li>
				</ol>
			</div>
		</div>
		<audio src="assets/audio/positive.mp3" id='somAcerto'></audio>
		<audio src="assets/audio/negative.mp3" id='somErro'></audio>
		<audio src="assets/audio/aplausos.mp3" id='somAplausos'></audio>
		<input type="hidden" id='question_id' name='question_id' value='' />
		<input type="hidden" id='ordem_array' name='ordem_array' value='' />
		<input type="hidden" id='total_questions' name='total_questions' value='' />
		<input type="hidden" id='position_question' name='position_question' value='' />
		<input type="hidden" id='coins' name='coins' value='0' />
		<input type="hidden" id='tm' name='tm' value='0' />
	</div>

</main>
</body>
<footer class="centro" id='autoria'>
	Desenvolvido por IT DevTech Service - Zaqueu Ataide
</footer>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="/assets/js/script.js"></script>


