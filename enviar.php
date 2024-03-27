<?php 
//interligando variaveis
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes(($_POST['telefone']));

        $envio = "leonardoalvarengasantos25@gmail.com";
        $assunto = "Dúvidas";


        $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone :".$telefone;

        $cabecalho = "From leonardo.logus17@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer=PHP/".phpversion();

        if(mail($envio,$assunto,$corpo,$cabecalho)){
            echo("E-mail Enviado com Sucesso");
        }else{
            echo("Houve um Erro ao enviar o email");
        }

?>