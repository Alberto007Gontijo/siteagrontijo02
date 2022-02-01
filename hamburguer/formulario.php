<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$assunto = addcslashes($_POST['assunto']);
$mensagem = addcslashes($_POST['mensagem']);

$to = "alberto007gontijo@gmail.com";
$subjet = "contato contabilidade";
$body = "nome: ".$nome. "\n".
        "email: ".$email. "\n".
        "assunto: ".$assunto. "\n".
        "Mensagem: ".$mensagem;

$header = "From:alberto@agrontijo.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subjet, $bady, $header)){
    echo("O email foi enviado com sucesso!");

}else{
    echo("O email não pôde ser enviado!");
}
}

?>