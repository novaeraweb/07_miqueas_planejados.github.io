<?php

//Defino a Chave do meu site
$secret_key = '6Ld3dqkdAAAAABSm9gepb_kwJEGlUFBlU0X1zgBW';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
        
    // Valido se a ação do usuário foi correta junto ao google
    $answer = 
        json_decode(
            file_get_contents(
                'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
                '&response='.$_POST['g-recaptcha-response']
            )
        );

    // Se a ação do usuário foi correta executo o restante do meu formulário
    if($answer->success) {
      $nome 	    = $_POST['nome'];
      $email 	= $_POST['email'];
      $telefone 	= $_POST['telefone'];
      $assunto   = $_POST['assunto'];
      $mensagem  = $_POST['mensagem'];
      $arquivo   = $_FILES["arquivo"];
      
      $corpoMSG = "<strong>Nome:</strong> $nome<br><strong>Email:</strong> $email<br><strong>Telefone:</strong> $telefone<br><br><strong>Mensagem:</strong> $mensagem";
      // chamada da classe		
      require_once('class.phpmailer.php');
      require_once('class.smtp.php');

      // instanciando a classe
      $mail   = new PHPMailer();

      // Define os dados do servidor e tipo de conexão
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsSMTP(); // Define que a mensagem será SMTP
      $mail->Host = "smtp.umbler.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
      $mail->Port = 587; 
      $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
      $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      );
      $mail->Username = 'site@miqueasplanejados.com.br'; // Usuário do servidor SMTP
      $mail->Password = 'miq*010203'; // Senha do servidor SMTP

      $address = "contato@miqueasplanejados.com.br";
      // email do remetente
      $mail->SetFrom($address, "Contato do site");
      $mail->From = 'site@miqueasplanejados.com.br'; // Seu e-mail
      $mail->Sender = 'site@miqueasplanejados.com.br'; // Seu e-mail
      // email do destinatario

      $mail->AddAddress($address, "destinatario");
  //   $mail->AddBCC("site@novaeraweb.com.br", "destinatario");
      $mail->AddBCC("contato@novaeraweb.com.br", "destinatario");
      // assunto da mensagem
      // assunto da mensagem
      $mail->Subject = $assunto;
      // corpo da mensagem
      $mail->MsgHTML($corpoMSG);
      // anexar arquivo
      $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );
      
      if(!$mail->Send()) {
        echo "Erro: " . $mail->ErrorInfo;
        } else {
        header("Location:https://www.miqueasplanejados.com.br/index.php?enviado=true");
        }

    } 
    // Caso o Captcha não tenha sido validado 
    //retorno uma mensagem de erro. 
    else {
        header("Location: ../index.php?enviado=false");
    }
  }
?>