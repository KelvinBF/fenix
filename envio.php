<?php

if(isset($_POST["enviar"]))
{

$Titulo = "E-mail enviado pelo site";
$nomerecebido = $_POST["nome"];
$emailrecebido = $_POST["email"];
$msg = $_POST["mensagem"];
$mensagem1 = "Informações do Contato\n\nNome: ".$nomerecebido."\nE-mail: ".$emailrecebido."\nMensagem: ".$msg."\n";

//digite abaixo seu email
$meuemail="leandro@fenixvidros.com";
$Destinatario="$meuemail";

mail("$Destinatario","$Titulo","$mensagem1","From:$emailrecebido");
echo "Mensagem enviada";
}
?>
