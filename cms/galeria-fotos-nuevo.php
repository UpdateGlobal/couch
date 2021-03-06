<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$mensaje = "";
$cod_galeria  = $_REQUEST['cod_galeria'];

if (isset($_REQUEST['proceso'])) {
  $proceso  = $_POST['proceso'];
} else {
  $proceso  = "";
}

$consultaFotos = "SELECT * FROM galerias_fotos WHERE cod_galeria='$cod_galeria'";
$resultadoFotos = mysqli_query($enlaces,$consultaFotos);

$consultaNombre = "SELECT * FROM galerias WHERE cod_galeria='$cod_galeria'";
$resultadoNombre = mysqli_query($enlaces,$consultaNombre);

if($proceso == "Registrar"){
  $cod_galeria  = $_POST['cod_galeria'];
  $imagen       = $_POST['imagen'];
  $insertarGaleria = "INSERT INTO galerias_fotos(cod_galeria, imagen)VALUE('$cod_galeria', '$imagen')";
  $resultadoInsertar = mysqli_query($enlaces,$insertarGaleria);
  $mensaje = "<div class='alert alert-success' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Nota:</strong> Se a&ntilde;adi&oacute; la imagen exitosamente. <a href='galeria.php'>Ir a Galerias</a>
        </div>";
  header("Location: galeria-fotos-nuevo.php?cod_galeria=$cod_galeria");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <script type="text/javascript" src="assets/js/rutinas.js"></script>
    <script>
      function Validar(){
        if(document.fcms.imagen.value==""){
          alert("Debe subir una imagen");
          document.fcms.imagen.focus();
          return; 
        }
        document.fcms.action = "galeria-fotos-nuevo.php";
        document.fcms.proceso.value="Registrar";
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
    <?php $menu="galerias"; include("module/menu.php"); ?>
    <?php include("module/header.php"); ?>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Galer&iacute;a</strong>
            <small></small>
          </h1>
        </div>
        <?php $page="galeria-fotos"; include("module/menu-galeria.php"); ?>
      </header><!--/.header -->
      <div class="main-content">
        <div class="card">
          <h4 class="card-title"><strong>Editar Fotos de Trabajo</strong></h4>
          <form class="fcms" name="fcms" method="post" action="" data-provide="validation" data-disable="false">
            <div class="card-body">
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="logo">Album:</label>
                </div>
                <div class="col-8 col-lg-10">
                  <?php
                    while($filaNom = mysqli_fetch_array($resultadoNombre)){
                      $titulo = $filaNom['titulo'];
                  ?>
                  <strong><?php echo $titulo; ?></strong>
                  <?php
                    }
                  ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-4 col-lg-2">
                  <label class="col-form-label" for="imagen">A&ntilde;adir Imagen:</label><br>
                  <small>(800px x 600px)</small>
                </div>
                <div class="col-4 col-lg-8">
                  <?php if($xVisitante=="1"){ ?><p></p><?php } ?>
                  <input class="form-control" id="imagen" name="imagen" type="<?php if($xVisitante=="1"){ ?>hidden<?php }else{ ?>text<?php } ?>" />
                </div>
                <div class="col-4 col-lg-2">
                  <?php if($xVisitante=="0"){ ?>
                  <button class="btn btn-bold btn-info" type="button" name="boton4" onClick="javascript:Imagen('IGGAL');" /><i class="fa fa-save"></i> Examinar</button>
                  <?php } ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-lg-12">
                  <a href="galeria-fotos.php" class="btn btn-secondary"><i class="fa fa-reply"></i> Volver</a>
                  <button class="btn btn-bold btn-primary" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-plus-circle"></i> A&ntilde;adir Foto</button>
                  <input type="hidden" name="proceso" />
                  <input type="hidden" name="cod_galeria" value="<?php echo $cod_galeria; ?>">
                  <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <p>Im&aacute;genes dentro de esta galer&iacute;a, <strong>haga clic en las im&aacute;genes para borrar/quitar.</strong></p>
              <div id="listagaleria">
                <ul>
                  <?php
                    while($filaFoto = mysqli_fetch_array($resultadoFotos)){
                      $xCodigoFot = $filaFoto['cod_foto'];
                      $xCodgaleria = $filaFoto['cod_galeria'];
                      $xFoto = $filaFoto['imagen'];
                  ?>
                  <li class="thumbnail">
                    <a href="galeria-fotos-delete.php?cod_foto=<?php echo $xCodigoFot; ?>&cod_galeria=<?php echo $xCodgaleria; ?>">
                      <img class="d-block b-1 border-light hover-shadow-2 p-1" src="assets/img/galerias/fotos/<?php echo $xFoto; ?>" width="150" height="100" />
                    </a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>
              </div>
            </footer>
          </form>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>