<?php
require_once ('../Controller/LoginController.php');
require_once('../Controller/EditalController.php');
$ObjLogin = new LoginController();
$ObjLogin->verificarLogado ();
$ObjLogin->verificaPaginaAdmin();

$controller = new EditalController();
$controller->Processo('consultar');
?>
<?php date_default_timezone_set("Brazil/East"); ?>

<?php  $dataAtual = date('Y-m-d'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consulta de Edital</title>
  <link rel="shortcut icon" href="../View/img/favicon.ico" />
  <link href="css/bootstrap-modificado.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
  <div class="container" align="center">
  <br>
   <fieldset>
            <legend><strong>Editais Abertos</strong></legend>
       <div class="col-sm-10">
         <b><div class="col-md-1">Número</div>
         <div class="col-md-4">Edital</div>
         <div class="col-md-3">Data inicial de Submissão</div>
         <div class="col-md-3">Prazo Final de Submissão</div>
       </div>
        <?php while ($row = mysqli_fetch_assoc($rs)) { ?>
        <?php if($row['data_final'] >= $dataAtual) { ?>
          <div class="col-sm-10"> 
              <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingTwo">
                   <div class="row">
                        <div class="col-md-1"> <?php echo $row['numero_edital']; ?></div>
                        <div class="col-md-4"><a href="../arquivos/<?php echo $row['arquivo']; ?>" target="_black"/><?php echo $row['titulo']; ?></a></div>
                        <div class="col-md-3"><?php echo date('d/m/Y',strtotime($row['data_inicio'])); ?></div>
                        <div class="col-md-3"><?php echo  date('d/m/Y',strtotime($row['data_final'])); ?></div>
                        <div class="col-md-1"><a class="collapsed glyphicon glyphicon-chevron-down" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['id']; ?>" aria-expanded="false" aria-controls="collapseTwo"></a></div>
                   </div>
                  </div>
                    <div id="collapse<?php echo $row['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                      <div class="modal-header">
                         <h3 class="modal-title text-center">Objetivo</h3>
                      </div>
                       <div class="tbscroll"><p><?php echo $row['objetivo']; ?></p></div>
                      </div>
                    </div>
              </div>
          </div>
            <div class="col-sm-1">
             <a href="Editar_Edital.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a></a>
            </div>
            <?php } ?>
        <?php } ?>
   </div>

   <?php
    require_once('../controller/EditalController.php');
    $controller = new EditalController();
    $controller->Processo('consultar');
    ?>
    <?php date_default_timezone_set("Brazil/East"); ?>  
  <div class="container" align="center">
   <fieldset>
        <legend><strong>Editais Encerrados</strong></legend>
         <div class="col-sm-12"></div>
         <div class="col-sm-10">
         <b><div class="col-md-1">Número</div>
         <div class="col-md-4">Edital</div>
         <div class="col-md-3">Data inicial de Submissão</div>
         <div class="col-md-3">Prazo Final de Submissão</div>
       </div>
       <?php while ($row = mysqli_fetch_assoc($rs)) { ?>
        <?php if($row['data_final'] < $dataAtual) { ?>
             <div class="col-sm-10"> 
              <div class="panel panel-danger">
                  <div class="panel-heading" role="tab" id="headingTwo">
                   <div class="row">
                        <div class="col-md-1"> <?php echo $row['numero_edital']; ?></div>
                        <div class="col-md-4"><a href="../arquivos/<?php echo $row['arquivo']; ?>" target="_black"/><?php echo $row['titulo']; ?></a></div>
                        <div class="col-md-3"><?php echo date('d/m/Y',strtotime($row['data_inicio'])); ?></div>
                        <div class="col-md-3"><?php echo  date('d/m/Y',strtotime($row['data_final'])); ?></div>
                        <div class="col-md-1"><a class="collapsed glyphicon glyphicon-chevron-down" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['id']; ?>" aria-expanded="false" aria-controls="collapseTwo"></a></div>
                   </div>
                  </div>
                    <div id="collapse<?php echo $row['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                      <div class="modal-header">
                         <h3 class="modal-title text-center">Objetivo</h3>
                      </div>     
                        <div class="tbscroll"><p><?php echo $row['objetivo']; ?></p></div>
                      </div>
                    </div>
              </div>
          </div>
           <div class="col-sm-1">
             <a href="Editar_Edital.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a></a>
            </div>
      <?php } ?> 
    <?php } ?>
  </div>
  <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
</body>
</html>