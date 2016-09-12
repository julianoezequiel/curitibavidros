<?php

	  $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $comments  = $_POST['comments'];
	  $tel  = $_POST['tel'];


    $headers  = "From: $nome \r\n";
    $headers .= "Reply-To: $email\r\n";

/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/

       $corpo = "Contato Vidros Curitiba \n";
       $corpo .= "Nome: " . $nome . "\n";
	     $corpo .= "Telefone: " . $tel . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentario: " . $comments . "\n";

       $email_to = 'vidroscuritiba@hotmail.com;julianoezequiel@gmail.com'; //Email para onde vai ser enviado
	   //julianoezequiel@gmail.com

    $status = mail($email_to, "Contato Site", $corpo, $headers); //enviando o email.

    if($status) {
        echo "<script> alert('Email enviando com sucesso!'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha ao enviar o email. Por favor tente novamente!'); </script>"; //se houve algum erro de envio.
    }
    echo "<script> window.location.href = 'http://www.curitibavidros.com.br'; </script>"; //pagina a ser redirecionada apos o envio.
?>
