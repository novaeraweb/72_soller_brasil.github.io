<?php header('Content-Type: text/html; charset=utf-8'); 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
require("class.phpmailer.php");
require("class.smtp.php");

//Defino a Chave do meu site
$secret_key = '6LfuadEeAAAAAMuEPNnOla-hLUlD7aXLZhvrarF3';

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
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $mensagem = $_POST['message'];



      // Inicia a classe PHPMailer
      $mail = new PHPMailer();
        
      // Define os dados técnicos da Mensagem
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
      $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
      // Define os dados do servidor e tipo de conexão
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsSMTP(); // Define que a mensagem será SMTP
      $mail->Host = "email-ssl.com.br"; // Endereço do servidor SMTP
      // $mail->Host = 'smtplw.com.br';   
      $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
      $mail->Port = 465; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
      $mail->Username = 'site@sollerbrasilinternational.com'; // Usuário do servidor SMTP (endereço de email)
      $mail->Password = 'C0meX@2022'; // Senha do servidor SMTP (senha do email usado)
      $mail->SMTPSecure = "ssl"; // Senha do servidor SMTP (senha do email usado)
      $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
      );
      // Define o remetente
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->From = 'site@sollerbrasilinternational.com'; // Seu e-mail
      $mail->Sender = 'site@sollerbrasilinternational.com'; // Seu e-mail
      $mail->FromName = $nome; // Seu nome
      $mail->AddAddress('export@sollerbrasil.com.br'); // Copia
      $mail->AddBCC('contato@novaeraweb.com.br'); // Cópia Oculta
      $mail->IsHTML(true); // Define que o e-mail será enviado como HTML

      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject  = "Contato do Site / S'ollér Brasil"; // Assunto da mensagem 
      $mail->Body = '
      Contato captado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br><br>
      Mensagem:<br>'.$mensagem.'<br>
      ';

      $mail->AltBody = '
      Contato captado através do site:<br><br>
      Nome: '.$nome.'<br>
      Email: '.$email.'<br>
      Mensagem: '.$mensagem.'<br>
      ';

      //Enviando o email 
      //==================================================== 
      if ($enviado = $mail->Send()){ 
          header("Location: ../index.php?enviado=true");
          } 
      else{ 
          echo "</b>Falha no envio do E-Mail!</b>"; 
          echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
        }

}
// Caso o Captcha não tenha sido validado 
    //retorno uma mensagem de erro. 
    else {
        header("Location: ../index.php?confirma=true");
    }
}