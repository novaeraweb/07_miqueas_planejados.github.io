<?php
 $nome 	    = $_POST['nome'];
 $email 	= $_POST['email'];
 $telefone 	= $_POST['telefone'];
 $assunto   = $_POST['assunto'];
 $mensagem  = $_POST['mensagem'];
 $arquivo   = $_FILES["arquivo"];
 
 $corpoMSG = "<strong>Nome:</strong> $nome<br><strong>Email:</strong> $email<br><strong>Telefone:</strong> $telefone<br><br><strong>Mensagem:</strong> $mensagem";
 // chamada da classe		
 require_once('phpmailer/class.phpmailer.php');
 require_once('phpmailer/class.smtp.php');

 // instanciando a classe
 $mail   = new PHPMailer();

 // Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.marcenariamiqueas.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'contato@marcenariamiqueas.com.br'; // Usuário do servidor SMTP
$mail->Password = 'miq010203'; // Senha do servidor SMTP

 $address = "contato@marcenariamiqueas.com.br";
 // email do remetente
 $mail->SetFrom($address, "Contato do site");
 // email do destinatario

 $mail->AddAddress($address, "destinatario");
 // assunto da mensagem
 $mail->Subject = $assunto;
 // corpo da mensagem
 $mail->MsgHTML($corpoMSG);
 // anexar arquivo
 $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
 
 if(!$mail->Send()) {
   echo "Erro: " . $mail->ErrorInfo;
  } else {
   header("Location:http://www.marcenariamiqueas.com.br/cadastro-enviado.html");
  }

?>