<?php
require_once ('../Controller/LoginController.php');

$ObjLogin = new LoginController ();

$ObjLogin->verificarLogado ();
$ObjLogin->verificaPaginaAdmin();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cadastro Editais</title>
  
</head>
<body>
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-body">
        <div class="page-header alinharTextoCentro">
          <h1>Cadastro de Edital</h1>

          <div class="alinharTextoCentro">
            <label id="labelCadastroAcesso"></label>
              <!-- <label class="<?php echo $alerta;?>" id="alerta"> <?php echo $msg;?> </label> -->
          </div>
        </div>

        <form name="addArquivoForm" action="../Controller/EditalController.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="method" value="incluir">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="row">
              <div class="form-group col-md-4">
                <select name="numero_edital" class="form-control" required autofocus>
                  <option value="">Número Edital</option>
                  <option>01/2017</option>
                  <option>02/2017</option>
                  <option>03/2017</option>
                  <option>04/2017</option>
                  <option>05/2017</option>
                  <option>06/2017</option>
                  <option>07/2017</option>
                  <option>08/2017</option>
                  <option>09/2017</option>
                  <option>10/2017</option>
                </select>
              </div>

              <div class="form-group col-md-8">
                  <input type="text" name="titulo" class="form-control" placeholder="Título" required>
              </div>

              <div class="form-group col-md-12">
                   <textarea name="objetivo" class="form-control" placeholder="Digite aqui o Objetivo do Edital"></textarea>
              </div>

              <div class="form-group col-md-6">
                <label>Data Inicial de Vigência:</label>
                <input type="date" name="data_inicio" class="form-control" required>
              </div>

              <div class="form-group col-md-6">
                <label>Data Final de Submissão:</label>
                <input type="date" name="data_final" class="form-control" required>
              </div>

              <div class="form-group col-md-6">
                <label>Arquivo do Edital</label>
                <input type="file" name="arquivo" class="btn btn-primary" required>
              </div>

              <br>

              <div class="form-group col-md-12">
                <div class="form-inline botaoesCadastro">
                  <button type="reset" class="btn btn-primary">Limpar</button>
                  <input type="submit" name="botao" value="Cadastrar" class="btn btn-primary">
                </div>
              </div>

            </div>  
          </div>
          <div class="col-sm-3"></div>
        </form>
      </div>
    </div>
  </div> <!-- /container -->

  <script src="js/Validacaoform.js"></script>
</body>
</html>