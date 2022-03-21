<?php


require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
    $telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.hotmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'leandro_halberstadt@hotmail.com';
	$mail->Password = 'gremio1903';
	$mail->Port = 587;
 
	$mail->setFrom('leandro@fenixvidros.com');
	$mail->addAddress('leandro@fenixvidros.com');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
                   Telefone: {$telefone}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";

	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email não enviado.';
	}
} else {
	echo 'Não enviado: informar o email e a mensagem.';
}