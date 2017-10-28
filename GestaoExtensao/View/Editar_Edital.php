<?php
  require_once ('../Controller/LoginController.php');
  require_once('../Controller/EditalController.php');

  $ObjLogin = new LoginController ();

  $ObjLogin->verificarLogado ();
  $ObjLogin->verificaPaginaAdmin();

  $controller = new EditalController();
  $controller->Processo('editar');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edição de Edital</title>
  <link rel="shortcut icon" href="../View/img/favicon.ico" />
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
</head>
<body class="CadastroUsuario">
  <div class="container">
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
          <div class="page-header alinharTextoCentro">
            <h1>Edição de Edital</h1>

            <div class="alinharTextoCentro">
              <label id="labelCadastroAcesso"></label>
                <!-- <label class="<?php echo $alerta;?>" id="alerta"> <?php echo $msg;?> </label> -->
            </div>
          </div>
          <form class="form-signin" action="" id="form" name="form" method="post">
            <h2 class="form-signin-heading"></h2>

  <?php while ($row = mysqli_fetch_array($rs)) { ?>
            <h2 class="form-signin-heading"></h2>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <div class="row dadosLogin">
                <div class="form-group col-md-4">
                  <label>Nº Edital: </label>
                  <select name="numero_edital" class="form-control" required autofocus>
                    <option><?php echo $row['numero_edital']; ?></option>
                    <option>01/2017</option>
                    <option>02/2017</option>
                    <option>03/2017</option>
                    <option>04/2017</option>
                    <option>06/2017</option>
                    <option>07/2017</option>
                    <option>08/2017</option>
                    <option>09/2017</option>
                    <option>10/2017</option>
                  </select>
                </div>

                <div class="form-group col-md-8">
                  <label>Título:</label>
                  <input type="text" name="titulo" class="form-control"  required value="<?php echo $row['titulo']; ?>" >
                </div>

                <div class="form-group col-md-12">
                  <label>Objetivo:</label>
                  <textarea name="objetivo" class="form-control" rows="4"><?php echo $row['objetivo']; ?></textarea>
                </div>

                    
                <div class="form-group col-md-6">
                  <label>Data Inicial: </label>
                  <input type="date" name="data_inicio" class="form-control" required value="<?php echo $row['data_inicio']; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label>Data Final: </label>
                  <input type="date" name="data_final" class="form-control" required value="<?php echo $row['data_final']; ?>">
                </div>
              
              
              </div>
    <?php } ?>
              <br>
              <div class="row">
                <div class="form-inline botaoesCadastro"> 
                  <a href="Area_De_Trabalho.php?pagina=consultaEdital" class="btn btn-success" role="button">Cancelar</a>
                  <input type="submit" name="botao" value="Salvar" class="btn btn-primary" onclick="validar(document.form);"//>
                </div>
              </div>
            </div>
            <div class="col-sm-3"></div>    
          </form>
        </div>
    </div>

  </div>
  <script src="js/Validacaoform.js"></script>
</body>
</html>