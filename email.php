<?php
	//Abrindo o phpmailer
	require 'phpmailer/class.phpmailer.php';
	//instanciando a classe
	$PHPMailer = new PHPMailer();
	//definindo idioma
	$PHPMailer->SetLanguage("br", 'phpMailer/language/');
	// define que serс usado SMTP
	$PHPMailer->IsSMTP();
	// envia email HTML
	$PHPMailer->isHTML(true);
	// codificaчуo UTF-8, a codificaчуo mais usada recentemente
	$PHPMailer->Charset = 'UTF-8';
	// Configuraчѕes do SMTP
	$PHPMailer->SMTPAuth = true;
	$PHPMailer->SMTPSecure = 'ssl';
	$PHPMailer->Host = 'smtp.gmail.com';
	$PHPMailer->Port = 465;
	$PHPMailer->Username = 'samuel.caldas@gmail.com';
	$PHPMailer->Password = 'samuel18';
	// E-Mail do remetente (deve ser o mesmo de quem fez a autenticaчуo
	// nesse caso seu_login@gmail.com)
	$PHPMailer->From = 'samuel.caldas@gmail.com';
	// Nome do rementente
	$PHPMailer->FromName = 'Samuel Caldas';
	// assunto da mensagem
	$PHPMailer->Subject = 'Teste do PHPMailler';
	// adiciona destinatсrio (pode ser chamado inњmeras vezes)

		// corpo da mensagem
		$PHPMailer->Body = 'hotmail';
		$PHPMailer->AddAddress('samuel.caldas@hotmail.com');
	// verifica se enviou corretamente
	if ($PHPMailer->Send()){
		echo 'hotmail';//sem erros
	}else{
		echo 'Erro '.$PHPMailer->ErrorMsg;//erro
	}
/*		// corpo da mensagem
		$PHPMailer->Body = 'gmail';
		$PHPMailer->AddAddress('samuel.caldas@gmail.com');
	// verifica se enviou corretamente
	if ($PHPMailer->Send()){
		echo 'gmail';//sem erros
	}else{
		echo 'Erro '.$PHPMailer->ErrorMsg;//erro
	}
		// corpo da mensagem
		$PHPMailer->Body = 'yahoo';
		$PHPMailer->AddAddress('samuel.caldas@yahoo.com.br');
	// verifica se enviou corretamente
	if ($PHPMailer->Send()){
		echo 'yahoo';//sem erros
	}else{
		echo 'Erro '.$PHPMailer->ErrorMsg;//erro
	}
	*/
?>