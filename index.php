<!DOCTYPE html>
<html>

<head>
  <title>Mahfic</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/"></script>
  <link rel="stylesheet" href=style.css type="text/css">
  <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card" id="BarraNav">
      <a onclick="scrollToY(0, 600, 'easeInOutQuint');" class="w3-bar-item w3-button w3-wide"><img src="img/favicon.png" width="19px" height="19px" style="position:relative;top:-1px"> MAHFIC</a>
      <!-- Links da direita da Navbar -->
      <div class="w3-right w3-hide-small">
        <a onclick="scrollToY(675, 400, 'easeInOutQuint');" class="w3-bar-item w3-button">SOBRE</a>
        <a onclick="scrollToY(1460, 400, 'easeInOutQuint');" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> REFERÊNCIAS</a>
        <a href="Colaboradores/colab.index.html" class="w3-bar-item w3-button"><i class="fa fa-address-card"></i> CURRÍCULOS</a>
        <a onclick="scrollToY(2300, 400, 'easeInOutQuint');" class="w3-bar-item w3-button"><i class="fa fa-th"></i> CURSOS</a>
        <a href="login/login.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i> LOGIN</a>
        <a onclick="scrollToY(3060, 400, 'easeInOutQuint');" class="w3-bar-item w3-button"><i class="fa fa-phone"></i> CONTATOS</a>
      </div>

      <!-- Isso aqui oculta links à direita em telas pequenas e substitui eles pelo ícone do menu -->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Barra lateral em mobile -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="BarraLateral">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> Fechar</a>
    <a href="#sobre" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE</a>
    <a href="#referências" onclick="w3_close()" class="w3-bar-item w3-button">REFERÊNCIAS</a>
    <a href="Colaboradores/colab.index.html" onclick="w3_close()" class="w3-bar-item w3-button">CURRÍCULOS</a>
    <a href="#cursos" onclick="w3_close()" class="w3-bar-item w3-button">CURSOS</a>
    <a href="login/login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
    <a href="#contatos" onclick="w3_close()" class="w3-bar-item w3-button">CONTATOS</a>
  </nav>

  <!-- Header e a imagem de background -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Qualificação que transforma vidas.</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Qualificação que transforma vidas.</span><br>
      <span class="w3-large">Cada ação segura é um passo em direção a um ambiente de trabalho mais saudável e
        produtivo.</span>
      <p>
      <p onclick="scrollToY(700, 400, 'easeInOutQuint');" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Conheça
        melhor a empresa</p>
      </p>
    </div>
  </header>

  <!-- Seção sobre -->
  <div class="w3-container" style="padding:128px 16px" id="sobre">
    <h3 class="w3-center scroll-img2 w3-xxlarge" style="font-weight: bold;">SOBRE A EMPRESA</h3>
    <h4 class="w3-center scroll-img2 w3-large" style="font-weight: bold;"> Há 25 anos ministrando cursos e treinamentos na
      área de veículos leves, <br> pesados e normas de segurança do
      trabalho com ênfase em máquinas pesadas.
    </h4>
    <br>
    <div class="w3-row-padding w3-center scroll-img" style="margin-top:64px  ">
      <div class="w3-quarter">
        <span class="glyphicon w3-jumbo">&#xe013;</span>
        <p class="w3-large">Qualidade</p>
        <p>Qualidade não é um acaso, é uma escolha consciente. Por isso, buscamos a excelência em tudo o que fazemos.
        </p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Paixão</p>
        <p>A paixão pelo nosso trabalho nos impulsiona a superar desafios, e a garantir a qualidade para o consumidor.
        </p>
      </div>
      <div class="w3-quarter">
        <i class="material-icons w3-margin-bottom w3-jumbo">&#xe32a;</i>
        <p class="w3-large">Segurança</p>
        <p>Segurança é nossa principal prioridade. Um ambiente seguro é essencial para o sucesso da nossa empresa.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-comments w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Suporte</p>
        <p>Nossa equipe de funcionários qualificada sempre estará disponível para oferecer suporte aos nossos
          colaboradores.</p>
      </div>
    </div>
  </div>

  <!-- Div das referências....-->
  <div class="w3-container w3-light-grey w3-center" style="padding:128px 16px" id="referências">
    <div class="w3-container">
      <h2 class="w3-xxlarge scroll-img2">Referências Profissionais</h2>
      <br>
      <ul class="w3-ul w3-card-4 scroll-img">
        <li class="w3-quarter">

          <img src="img/homem_1.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
          <div class="w3-bar-item">
            <span class="w3-large">Sérgio Oliveira</span><br>
            <span>Coordenador do SEST SENAT - Unidade de<br></span>
            <span>Itumbiara - Goiás</span><br>
          </div>
        </li>

        <li class="w3-quarter">

          <img src="img/mulher.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
          <div class="w3-bar-item">
            <span class="w3-large">Tatiana</span><br>
            <span>Gestora Central do Condutor - Unidade de<br></span>
            <span>Quirinópolis – Goiás</span>
          </div>
        </li>

        <li class="w3-quarter">
          <img src="img/homem_2.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
          <div class="w3-bar-item">
            <span class="w3-large">Omar</span><br>
            <span>Proprietário Exata Cursos e Treinamentos<br></span>
            <span> Quirinópolis – Goiás </span>
          </div>
        </li>
        <li class="w3-quarter">
          <img src="img/homem_3.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
          <div class="w3-bar-item">
            <span class="w3-large">Jeliston</span><br>
            <span> Proprietário e Engenheiro em Segurança<br> do Trabalho</span>
            <span> Grupo São Martinho</span>
          </div>

        <li class="w3-row-padding">
          <br>
          <img src="img/garoto.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
          <div class="w3-bar-item">
            <span class="w3-large">Jean Ortega</span><br>
            <span>Coordenador de Treinamentos SJC<br></span>
            <span> Unidade Quirinópolis - Goiás</span>
          </div>
        </li>
        </li>
      </ul>
      <br>

      <!-- Placeholder colaboradores, vai ser mudado no futuro. -->
      <h3 class="w3-center scroll-img">Venha conhecer mais de nossa equipe.<br>Dê uma olhada nos nossos colaboradores abaixo:</h3><br>
      <a href="Colaboradores/colab.index.html" class="w3-button w3-black scroll-img">Colaboradores</a>
    </div>


  </div>

  <!-- Seção de Cursos -->
  <div class="w3-container" style="padding:128px 16px" id="cursos">
    <h3 class="w3-center scroll-img2 w3-xxlarge" style="font-weight: bold; ">CURSOS</h3>
    <h3 class="w3-center scroll-img2">O que nós fazemos pelas pessoas.</h2>

      <div class="w3-row-padding scroll-img" style="margin-top:94px ">
        <div class="w3-col l3 m6 ">
          <img src="img/seg-job2.jpg" style=" width:93%; padding-top: 10px; " onclick="onClick(this)" class="w3-hover-opacity w3-round" alt="Segurança de Trabalho">
          <p>Segurança do Trabalho</p>
        </div>
        <div class="w3-col l3 m6 w3-image ">
          <img src="img/ope-maq.jpeg" style="width:100%; " onclick="onClick(this)" class="w3-hover-opacity w3-round" alt="Máquinas e Equipamentos">
          <p> Máquinas e Equipamentos</p>
        </div>
        <div class=" w3-col l3 m6">
          <img src="img/adm.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round" alt="Administração">
          <p>Administração</p>
        </div>
        <div class="w3-col l3 m5">
          <img src="img/seg-transe.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round " alt="Trânsito e Segurânça Viária">
          <p>Trânsito e Segurânça Viária</p>
        </div>
      </div>
  </div>
  </div>

  <!-- Modelo mobile pra quando eu apertar nas imagem elas ficar maior -->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Fechar imagem modal">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Contatos -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contatos">
    <h3 class="w3-center w3-xxlarge scroll-img2" style="font-weight: bold;">CONTATOS</h3>
    <h3 class="w3-center scroll-img2">Vamos se conhecer melhor, Mande-nos uma mensagem:</h3>
    <div style="margin-top:48px">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> GO - Quirinópolis-75860-000</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>(64) 99307-0723</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: instagram.com/mafhictreinamentos</p>
      <br>
      <form action="" method="post">
        <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Assunto" required name="Assunto"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Messagem" required name="Mensagem"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
          </button>
        </p>
      </form>
    </div>
  </div>

  <!-- Pé da página (Footer) -->
  <footer class="w3-center w3-black w3-padding-64">
    <a onclick="scrollToY(0, 1000, 'easeInOutQuint');" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar ao topo</a>
    <div class="w3-xlarge w3-section ">
      <a class="fa fa-facebook-official w3-hover-opacity w3-margin-right w3-margin" href=" https://www.facebook.com/mafhictreinamentos/" style="color:white"></a>
      <a class="fa fa-instagram w3-hover-opacity w3-margin-right w3-margin" href="https://www.instagram.com/mafhictreinamentos/" style="color:white"></a>
      <a class="fa fa-whatsapp w3-hover-opacity w3-margin-right w3-margin" href="tel:+5564993070723" style="color:white"></a>
      <a href="https://www.linkedin.com/in/cristhiane-rodrigues-6244aa112/" class="fa fa-linkedin-square w3-hover-opacity w3-margin-right w3-margin " style="color:white"></a>
    </div>
    <div class="w3-small w3-section">
      <p class="w3-medium">Mafhic Corporation © 2024<br></p>

      <i>Todos os direitos reservados. Os valores de serviços anunciados neste site ou via<br>
        e-mail promocional podem ser alterados sem prévio aviso. A Mafhic não é responsável por erros<br>
        descritivos. As Imagens contidas nesta página são meramente ilustrativas.</i>
    </div>
  </footer>

  <script src="script.js"></script>

</body>

</html>

<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

$contactName = trim((string) ($_POST['Nome'] ?? ''));
$contactEmail = trim((string) ($_POST['Email'] ?? ''));
$contactSubject = trim((string) ($_POST['Assunto'] ?? 'Contato pelo site'));
$contactMessage = trim((string) ($_POST['Mensagem'] ?? ''));

if ($contactName === '' || $contactEmail === '' || $contactMessage === '') {
    echo 'Preencha nome, e-mail e mensagem para enviar o contato.';
    return;
}

$smtpHost = getenv('SMTP_HOST') ?: '';
$smtpPort = (int) (getenv('SMTP_PORT') ?: 587);
$smtpUser = getenv('SMTP_USERNAME') ?: '';
$smtpPassword = getenv('SMTP_PASSWORD') ?: '';
$smtpFrom = getenv('SMTP_FROM') ?: $smtpUser;
$smtpFromName = getenv('SMTP_FROM_NAME') ?: 'Mahfic';
$smtpTo = getenv('SMTP_TO') ?: $smtpUser;

if (
    $smtpHost === '' ||
    $smtpUser === '' ||
    $smtpPassword === '' ||
    $smtpFrom === '' ||
    $smtpTo === ''
) {
    echo 'Configure as variáveis SMTP antes de habilitar o envio de e-mail.';
    return;
}

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;

    $mail->setFrom($smtpFrom, $smtpFromName);
    $mail->addAddress($smtpTo);
    $mail->addReplyTo($contactEmail, $contactName);

    $mail->isHTML(true);
    $mail->Subject = $contactSubject;
    $mail->Body = nl2br(
        "Nome: {$contactName}\n" .
        "E-mail: {$contactEmail}\n\n" .
        $contactMessage
    );
    $mail->AltBody =
        "Nome: {$contactName}\n" .
        "E-mail: {$contactEmail}\n\n" .
        $contactMessage;

    $mail->send();
    echo 'Mensagem enviada com sucesso.';
} catch (Exception $e) {
    echo 'Erro ao enviar mensagem: ' . $mail->ErrorInfo;
}
?>
