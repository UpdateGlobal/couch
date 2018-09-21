<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_experiencia   = $_REQUEST['cod_experiencia'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso == ""){
  $consultaExperiencia = "SELECT * FROM experiencia WHERE cod_experiencia='$cod_experiencia'";
  $ejecutarExperiencia = mysqli_query($enlaces,$consultaExperiencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaExp = mysqli_fetch_array($ejecutarExperiencia);
    $cod_experiencia = $filaExp['cod_experiencia'];
    $titulo     = $filaExp['titulo'];
    $contenido  = $filaExp['contenido'];
    $tipo       = $filaExp['tipo'];
    $orden      = $filaExp['orden'];
    $estado     = $filaExp['estado'];
}
if($proceso=="Actualizar"){ 
  $cod_experiencia = $_POST['cod_experiencia'];
  $titulo          = mysqli_real_escape_string($enlaces, $_POST['titulo']);
  $contenido       = mysqli_real_escape_string($enlaces, $_POST['contenido']);
  if(isset($_POST['tipo'])){$tipo = $_POST['tipo'];}else{$tipo = 0;}
  if(isset($_POST['orden'])){$orden = $_POST['orden'];}else{$orden = 0;}
  if(isset($_POST['estado'])){$estado = $_POST['estado'];}else{$estado = 0;}
  $actualizarExperiencia = "UPDATE experiencia SET cod_experiencia='$cod_experiencia', titulo='$titulo', contenido='$contenido', tipo='$tipo', orden='$orden', estado='$estado' WHERE cod_experiencia='$cod_experiencia'";
  $resultadoActualizar = mysqli_query($enlaces,$actualizarExperiencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:experiencia.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.titulo.value==""){
          alert("Debe escribir un título");
          return;
        }
        document.fcms.action = "experiencia-edit.php";
        document.fcms.proceso.value="Actualizar";
        document.fcms.submit();
      } 
      function Imagen(codigo){
        url = "agregar-foto.php?id=" + codigo;
        AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
      }
      function soloNumeros(e){ 
        var key = window.Event ? e.which : e.keyCode 
        return ((key >= 48 && key <= 57) || (key==8)) 
      }
    </script>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>
    <?php $menu="experiencia"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Experiencia y Estudios</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
          <div class="card">
            <h4 class="card-title"><strong>Editar Experiencia y Estudios</strong></h4>
            <div class="card-body">
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="titulo">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input class="form-control" name="titulo" type="text" id="titulo" value="<?php echo htmlspecialchars($titulo); ?>" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido">Texto:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <textarea data-provide="summernote" data-min-height="150" data-toolbar="full" class="form-control" name="contenido" id="contenido"><?php echo $contenido; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="tipo">Tipo:</label>
                </div>
                <div class="col-8 col-lg-10">
                <!-- 
                  <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="tipo" value="0" checked>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Experiencia</span>
                    </label>

                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="tipo" value="1">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Estudio</span>
                    </label>
                  </div>
                -->
                  <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="tipo" value="0" <?php if($tipo=="0"){echo "checked";} ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Experiencia</span>
                    </label>

                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="tipo" value="1" <?php if($tipo=="1"){echo "checked";} ?>>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Estudio</span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="orden">Orden:</label>
                </div>
                <div class="col-2 col-lg-1">
                  <input class="form-control" name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="estado">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?> />
                </div>
              </div>
              
            </div>
            <footer class="card-footer">
              <a href="experiencia.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_experiencia" value="<?php echo $cod_experiencia; ?>">
            </footer>

          </div>
        </form>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>