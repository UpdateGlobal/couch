<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$cod_contenido  = $_REQUEST['cod_contenido'];
if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}
if($proceso==""){
  $consultaCon = "SELECT * FROM contenidos WHERE cod_contenido='$cod_contenido'";
  $ejecutarCon = mysqli_query($enlaces,$consultaCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  $filaCon = mysqli_fetch_array($ejecutarCon);
  $cod_contenido    = $filaCon['cod_contenido'];
  $titulo_contenido = $filaCon['titulo_contenido'];
  $contenido_1      = $filaCon['contenido_1'];
  $contenido_2      = $filaCon['contenido_2'];
  $contenido_3      = $filaCon['contenido_3'];
  $img_contenido    = $filaCon['img_contenido'];
  $estado           = $filaCon['estado'];
}

if($proceso == "Actualizar"){
  $cod_contenido    = $_POST['cod_contenido'];
  $titulo_contenido = $_POST['titulo_contenido'];
  $contenido_1      = $_POST['contenido_1'];
  $contenido_2      = $_POST['contenido_2'];
  $contenido_3      = $_POST['contenido_3'];
  $img_contenido    = $_POST['img_contenido'];
  $estado           = $_POST['estado'];

  $ActualizarCon = "UPDATE contenidos SET cod_contenido='$cod_contenido', titulo_contenido='$titulo_contenido', contenido_1='$contenido_1', contenido_2='$contenido_2', contenido_3='$contenido_3', img_contenido='$img_contenido', estado='$estado' WHERE cod_contenido='$cod_contenido'";
  $resultadoActualizar = mysqli_query($enlaces,$ActualizarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
  header("Location:nosotros.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
    function Validar(){
      if(document.fcms.titulo_contenido.value==""){
        alert("Debe escribir un título");
        document.fcms.titulo_contenido.focus();
        return; 
      }
      
      document.fcms.action = "nosotros-edit.php";
      document.fcms.proceso.value="Actualizar";
      document.fcms.submit();
    }
    function Imagen(codigo){
      url = "agregar-foto.php?id=" + codigo;
      AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
    }
    </script>
    <script src="assets/js/visitante-alert.js"></script>
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
    <?php $menu="nosotros"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Nosotros</strong>
            <small></small>
          </h1>
        </div>
      </header><!--/.header -->
      <div class="main-content">
        <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
          <div class="card">
            <h4 class="card-title"><strong>Editar Contenidos</strong></h4>
            <div class="card-body">
              <?php if($cod_contenido=="5"){ ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="titulo_contenido">Su Nombre:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $titulo_contenido; ?></p><?php } ?>
                  <input class="form-control" type="text" id="titulo_contenido" name="titulo_contenido" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $titulo_contenido; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_1">Cargo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_1; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_1" name="contenido_1" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_1; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_2">Frase:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_2; ?></p><?php } ?>
                  <input class="form-control" type="text" id="contenido_2" name="contenido_2" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $contenido_2; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-4 col-lg-2">
                  <label>Imagen:</label><br><span>(450px x 500px)</span>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $img_contenido; ?></p><?php } ?>
                  <input class="form-control" name="img_contenido" type="<?php if($xVisitante=="Si"){ ?>hidden<?php }else{ ?>text<?php } ?>" id="img_contenido" value="<?php echo $img_contenido; ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-info" type="button" name="boton4" onClick="javascript:Imagen('NOS');"><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_3">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_3; ?></p><?php } ?>
                  <textarea class="form-control" type="text" id="contenido_3" name="contenido_3" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>"><?php echo $contenido_3; ?></textarea>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <?php } ?>

              <?php if($cod_contenido=="6"){ ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label require" for="titulo_contenido">T&iacute;tulo:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $titulo_contenido; ?></p><?php } ?>
                  <input class="form-control" type="text" id="titulo_contenido" name="titulo_contenido" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" value="<?php echo $titulo_contenido; ?>" required>
                  <div class="invalid-feedback"></div>
                </div>
              </div>

              <?php if($xVisitante=="1"){ ?><p><?php echo $contenido; ?></p><?php } ?>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="contenido_1">Descripci&oacute;n:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php echo $contenido_1; ?></p><?php } ?>
                  <textarea class="form-control" type="text" id="contenido_1" name="contenido_1" <?php if($xVisitante=="1"){ ?>style="display:none;"<?php }else{ ?> <?php } ?> ><?php echo $contenido_1; ?></textarea>
                </div>
              </div>
              <?php } ?>

              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="description">Estado:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php if($xVisitante=="1"){ ?><p><?php if($estado=="1"){ echo "[Activo]";}else{ echo "[Inactivo]"; } ?></p><?php }else{ ?>
                  <input type="checkbox" name="estado" data-size="small" data-provide="switchery" value="1" <?php if($estado=="1"){echo "checked";} ?>>
                  <?php } ?>
                </div>
              </div>

            </div>
            <footer class="card-footer">
              <a href="nosotros.php" class="btn btn-secondary"><i class="fa fa-times"></i> Cancelar</a>
              <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Guardar Cambios</button>
              <input type="hidden" name="proceso">
              <input type="hidden" name="cod_contenido" value="<?php echo $cod_contenido; ?>">
            </footer>
          </div>
        </form>
      </div><!--/.main-content -->
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>