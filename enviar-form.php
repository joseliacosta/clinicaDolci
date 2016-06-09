<?php
if(isset($_POST['enviar'])) {
$remetente = "envio@clinicadolci.com.br"; // INSIRA AQUI UM EMAIL CRIADO EM SUA HOSPEDAGEM PARA QUE A MENSAGEM SEJA ENVIADA CORRETAMENTE.
$destinatario = "contato@clinicadolci.com.br"; // INSIRA AQUI O ENDEREÇO DO DESTINATÁRIO DO E-MAIL.
$charset = $_POST['charset'];
$nome = $_POST['name'];
//$cidade = $_POST['cidade'];
//$estado = $_POST['estado'];
$email = $_POST['email'];
$assunto = 'Formulário de Contato';
$mensagem = $_POST['comment'];
$corpo = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$mensagem."";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=".$charset."\r\n";
//$headers .= "Cc: copia@seudominio\r\n"; CAMPO COPIA OPCIONAL
//$headers .= "Bcc: copiaoculta@seudominio\r\n"; CAMPO COPIA OCULTA OPCIONAL
$headers .= "From: ".$remetente."\r\n";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Clínica Dolci</title>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="assets/css/custom-dolci.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1 class="logo"><a class="navbar-brand" href="index.html">Clínica Dolci Otorrinolaringologia e Cirugia Estética Facial</a></h1>
          </div>
          <nav class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="clinica.html">Clínica</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipe<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="equipe-ana-carolina.html">Dra. Ana Carolina</a></li>
                <li><a href="equipe-eduardo.html">Dr. Eduardo Dolci</a></li>
                <li><a href="equipe-jose-eduardo.html">Dr. José Eduardo Dolci</a></li>
                <li><a href="equipe-ricardo.html">Dr. Ricardo Dolci</a></li>
                <li><a href="equipe-salah.html">Dr. Salah Ali Osman</a></li>
                <li><a href="equipe-maria-teresa.html">Fga. Maria Teresa Borges</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tratamentos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="tratamento-zumbido.html">Zumbido</a></li>
                <li><a href="tratamento-otites.html">Otites</a></li>
                <li><a href="tratamento-perda-audicao.html">Perda de audição</a></li>
                <li><a href="tratamento-tontura.html">Tontura</a></li>
                <li><a href="tratamento-refluxo.html">Refluxo</a></li>
                <li><a href="tratamento-tosse.html">Tosse</a></li>
                <li><a href="tratamento-ronco-criancas.html">Roncos em crianças</a></li>
                <li><a href="tratamento-ronco-adultos.html">Roncos em adultos</a></li>
                <li><a href="tratamento-sinusite.html">Sinusite</a></li>
                <li><a href="tratamento-rinite-alergica.html">Rinite alérgica</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cirurgias <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cirurgia-cuidados-antes.html">Cuidados antes das cirurgias</a></li>
                <li><a href="cirurgia-adenoamigdalectomia.html">Adenoamigdalectomia</a></li>
                <li><a href="cirurgia-tubo-ventilacao.html">Tubo de ventilação</a></li>
                <li><a href="cirurgia-septoplastia-turbinectomia.html">Septoplastia e turbinectomia</a></li>
                <li><a href="cirurgia-sinusite.html">Cirurgia para Sinusite</a></li>
                <li><a href="cirurgia-ronco.html">Cirurgia para o ronco</a></li>
                <li><a href="cirurgia-rinoplastia.html">Rinoplastia</a></li>
                <li><a href="cirurgia-otoplastia.html">Otoplastia</a></li>
                <li><a href="cirurgia-timpanoplastia.html">Timpanoplastia</a></li>
                <li><a href="cirurgia-timpanomastoidectomia-mastoidectomia.html">Timpanomastoidectomia/Mastoidectomia</a></li>
                <li><a href="cirurgia-estepedotomia.html">Estepedotomia</a></li>
              </ul>
            </li>
            <li><a href="convenios.html">Convênios</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
          </nav><!--/.nav-collapse -->
        </div>
      </div>
    </header>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron jumbotron-convenio">
      <div class="container">
        <h1>Contato</h1>
        <p>Utilize o formulário abaixo para manter contato Clínica Dolci</p>
      </div>
    </div>
    <div class="container middle-content">
      
      <div id="form-main" >
        <div id="form-div" style="height:400px;padding-top:160px;text-align:center;">
          <?php
          if(mail($destinatario, $assunto, $corpo, $headers)) {
          echo '<p><b>' . $nome . '</b>, sua mensagem foi efetuada com sucesso.<br />Em breve lhe responderemos.</p>';
          }
          else {
          echo '<p><b>' . $nome . '</b>, n&atilde;o foi poss&iacute;vel enviar sua mensagem.<br />Tente novamente.</p>';
          }
          }
          else {
          echo '<p>N&atilde;o foi poss&iacute;vel enviar sua mensagem.<br />Tente novamente.</p>';
          }
          ?>
        </div>
      </div>
      
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="phone-footer"><span><img src="assets/images/icon-phone-footer.png" height="50" width="50" alt="Telefone Clínica:"  class="img-responsive pull-left"></span>11 5082 2263 <br /><span style="padding-left:10px">11 5082 2255</span></p>
          </div>
          <div class="col-md-4 adress-footer">
            <span><img src="assets/images/icon-map-footer.png" height="50" width="50" alt="Endereço Clínica:" class="img-responsive pull-left"></span>
            <p>R Dr Bacelar, 173 - Conj 53 </p>
            <p>Vila Clementino - São Paulo/SP </p>
            <a href="http://goo.gl/maps/F54ID" target="_blank">Ver no mapa</a>
          </div>
          <div class="col-md-4 partners-footer">
            <a href="convenios.html"><strong>Convênios</strong><br />
            Confira os convênios e planos de saúde que somos conveniados.</a>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        © 2013 Clinica Dolci. Todos os direitos reservados
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FlexSlider -->
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    $(function(){
    SyntaxHighlighter.all();
    });
    $(window).load(function(){
    $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
    $('body').removeClass('loading');
    }
    });
    });
    </script>
  </body>
</html>