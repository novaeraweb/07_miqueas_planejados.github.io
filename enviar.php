<?php


if($_GET['acao'] == 'enviar'){



 $nome 	    = $_POST['nome'];
 $assunto   = $_POST['assunto'];
 $mensagem  = $_POST['mensagem'];
 $arquivo   = $_FILES["arquivo"];
 
 		if ($_POST['dep'] == "Selecione" ){
	$recipient = "RS do Brasil <vendas@rsdobrasil.com.br>";
	}

	if ($_POST['dep'] == "Nova Era Web" ){
	$recipient = "contato@novaeraweb.com.br";
	}

	if ($_POST['dep'] == "Chaps" ){
	$recipient = "contato@chapeirasom.art.br";
	}

	elseif ($_POST['dep'] == "Outros" ){
	$recipient = "vendas@rsdobrasil.com.br";
	}
 $corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>Mensagem:</strong> $mensagem";
 // chamada da classe		
 require_once('class.phpmailer.php');

 // instanciando a classe
 $mail   = new PHPMailer();

 // email do remetente
 $mail->SetFrom('contato@novaeraweb.com.br', 'remetente');

 // email do destinatario
 $mail->AddAddress($recipient, "destinatario");

 // assunto da mensagem
 $mail->Subject = $assunto;
 // corpo da mensagem
 $mail->MsgHTML($corpoMSG);
 // anexar arquivo
 $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
 
 if(!$mail->Send()) {
   echo "Erro: " . $mail->ErrorInfo;
  } else {
   echo "Mensagem enviada com sucesso!";
  }
}
?>