<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];
$arquivo = '<p>Olá corno, $mensagem</p>';
$nomeEmail = 'erikmoulin@outlook.com';


// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($nomeEmail, 'email teste', $arquivo, $headers);

?>