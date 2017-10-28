<?php
require_once ('../Controller/LoginController.php');
  session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tela Inicial</title>
  <link rel="shortcut icon" href="../View/img/favicon.ico" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">

  <link href="css/assets/css/font-awesome.css" rel="stylesheet">

  <link href="css/bootstrap-social.css" rel="stylesheet" >

</head>

<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand brand" href="#">iftm</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#" class="glyphicon glyphicon-home"> Home</a></li>
          <li><a href="#" class="glyphicon glyphicon-info-sign"> About</a></li>
          <li><a href="#" class="glyphicon glyphicon-phone-alt"> Contatos</a></li>
          <li class="dropdown">
            <a href="#" class="glyphicon glyphicon-wrench" data-toggle="dropdown"> Serviços</a>
            <ul class="dropdown-menu forAnimate" role="menu">
              <li><a href="{{URL::to('createusuario')}}"></a></li>
              <li><a href="#">Atualizar Senha</a></li>
              <li><a href="#">Recuperar Senha</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="hand"><a data-toggle="modal" data-target="#modalLogin" class="glyphicon glyphicon-log-in"> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <form action="../Controller/UsuarioController.php" method="post">
  <input type="hidden" name="method" value="logar">
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <label for="campo1">Usuário</label>
            <input type="text" class="form-control" name="login" placeholder="Use seu CPF ou E-mail para Acessar" required>

            <br>
            <label for="campo1">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Sua Senha" required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Acessar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</header>

<body>
  <div class="container">

    <div class="jumbotron">
      <img src="img/logo_iftm.png" alt="linha 86" class="img-responsive" ></img>
      <p>O <b>Campus Ituiutaba</b> do Instituto Federal do Triângulo Mineiro é fruto do Programa de Expansão das Escolas Técnicas Federais promovido pelo Governo Federal em todo o país. Até o final de 2010 o número de escolas ultrapassará as 354 unidades previstas, ao todo serão mais de 500 mil vagas ofertadas. Para concretizar a instalação da instituição em Ituiutaba foram necessários esforços conjuntos da sociedade ituiutabana, especialmente da prefeitura municipal, então administrada pelo Sr. Fued Dib. Além das reuniões com os diversos segmentos da sociedade, foi realizada ainda uma audiência pública em abril de 2008, visando definir as diretrizes para elaboração do projeto que seria submetido ao MEC. Após, meses de árduo trabalho coletivo, o projeto apresentado pelo CEFET Uberaba/Prefeitura de Ituiutaba foi classificado como o melhor de todo Brasil.</p>
      <p><a href="http://www.iftm.edu.br/ituiutaba/historico/" class="btn btn-primary btn-lg" href="#" role="button">Saiba Mais</a></p>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
          <img src="img/folder.png" alt="...">
          <div class="caption">
            <h3>Consulta de Editais.</h3>
            <p>...</p>
            <p><a href="../View/Consulta_Edital.php" class="btn btn-primary" role="button">Acessar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
          <img src="img/ViewResults.png" alt="...">
          <div class="caption">
            <h3>Consulta de Resultado</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Acessar</a></p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
          <img src="img/Certificate.png" alt="...">
          <div class="caption">
            <h3>Emitir Certificado</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Acessar</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalEdital" tabindex="-1" role="dialog" aria-labelledby="EModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="EModalLabel">Editais e Anexos</h4>
          </div>
          <div class="modal-body table-responsive">
                   <table class="table table-hover">
                      <?php
                      date_default_timezone_set("Brazil/East");
                       foreach(glob("../Arquivos/*.*") as $arquivo) {
                           $nameArq = basename($arquivo);
                          echo
                            '<tr>
                                <td> '.date('d/m/Y',filemtime($arquivo)).'</td>
                                <td><a href="../Controller/DownloadController.php?file='.$nameArq.'">'.$nameArq.'</a></td><br>
                            </tr>';
                         }
                         ?>
                   </table>
                   </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Candidatar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/imagem3.jpg" alt="linha 133">
      </div>

      <div class="item">
        <img src="img/imagem2.jpg" alt="linha 137">
      </div>

      <div class="item">
        <img src="img/imagem3.jpg" alt="linha 141">
      </div>

      <div class="item">
        <img src="img/imagem2.jpg" alt="linha 145">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
    <br>

    <footer>

      <div class="alinharTextoCentro">
        <address>
          Endereço: Rua Belarmino Vilela Junqueira s/nº - Bairro: Novo Tempo 2 - CEP: 38305-200 - Ituiutaba-MG<br>
          Horário de atendimento ao público: segunda a sexta-feira, das 8h às 21h30
        </address>
      </div>

      <div class="alinharTextoCentro">
        <a class="btn btn-social-icon btn-dropbox" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-dropbox']);"><span class="fa fa-dropbox"></span></a>
        <a class="btn btn-social-icon btn-microsoft" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-microsoft']);"><span class="fa fa-windows"></span></a>
        <a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
        <a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
        <a class="btn btn-social-icon btn-github" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-github']);"><span class="fa fa-github"></span></a>
        <a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
        <a class="btn btn-social-icon btn-yahoo" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-yahoo']);"><span class="fa fa-yahoo"></span></a>
      </div>
      <br>
      <div class="alinharTextoCentro">
        <span id="direitos">Copyright © 2017 IFTM - Todos Direitos Reservados</span>
      </div>

    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
