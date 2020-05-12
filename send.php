<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	color: #666;
}
body {
	background-color: #EEE;
}
</style>
</head>

<body>
<?php
if(!isset($_GET['mail']) and !isset($_GET['send'])){
echo'
<form action="send.php?mail=true" method="post">
<table width="200" height="100" border="1" align="center">
  <tr>
    <td colspan="2" align="center" valign="middle">Login</td>
  </tr>
  <tr>
    <td align="center" valign="middle">Email</td>
    <td align="center" valign="middle"><label for="email"></label>
      <input type="text" name="email" id="email"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">Senha</td>
    <td align="center" valign="middle"><input type="password" name="senha" id="senha"></td>
  </tr>
  <tr>
  	<td align="center" valign="middle" colspan="2"><input name="entrar" type="submit"></td>
  </tr>
</table>
</form>';
}

if(isset($_GET['mail'])){
echo'
<form action="send.php?send=true" method="post">
<table border="1">
  <tr>
    <td align="left" valign="middle">
    	<label for="rem">Remetente:</label>
        <input type="text" name="rem" id="rem">
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle">
    	<label for="rem">Assunto:</label>
        <input type="text" name="ass" id="ass">
	</td>
  </tr>
  <tr>
    <td align="left" valign="middle">
    	<label for="rem">Destinatário:</label>
        <input type="text" name="des" id="des">
	</td>
  </tr>

  <tr>
    <td align="center" valign="middle">
      <textarea name="msg" cols="50" rows="10" id="msg"></textarea></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
		<input name="Enviar" type="submit" value="Enviar">
    </td>
  </tr>
</table>
<input name="email" type="hidden" value="'.$_POST['email'].'">
<input name="senha" type="hidden" value="'.$_POST['senha'].'">
</form>';
}
if(isset($_GET['send'])){
//Define usuario e senha pra autenticação e envio
$email=$_POST['email'];
$senha=$_POST['senha'];

//~~Definições da mensagem~~//
// Nome do rementente
$remetente=$_POST['rem'];
 
// assunto da mensagem
$assunto=$_POST['ass'];
 
// corpo da mensagem
$corpoHTML=$_POST['msg'];
 
// corpo da mensagem em modo texto
$corpoAlt='Incopativel com mensagens HTML';
 
// adiciona destinatário (pode ser chamado inúmeras vezes)
$destinatario=$_POST['des'];
 
// adiciona um anexo
$anexo=false;

//incluindo Funções
require 'functions.php';

//send
if($send=sendMail($email,$senha,$remetente,$assunto,$corpoHTML,$corpoAlt,$destinatario,$anexo)){
	echo $send;
}else{
	echo 'Sucesso!';
}
}
?>
</body>
</html>
