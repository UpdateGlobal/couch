<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php
$num = ""; 
if (isset($_REQUEST['eliminar'])) {
  $eliminar = $_POST['eliminar'];
} else {
  $eliminar = "";
}
if ($eliminar == "true") {
  $sqlEliminar = "SELECT cod_experiencia FROM experiencia ORDER BY orden";
  $sqlResultado = mysqli_query($enlaces,$sqlEliminar);
  $x = 0;
  while($filaElim = mysqli_fetch_array($sqlResultado)){
    $id_experiencia = $filaElim["cod_experiencia"];
    if ($_REQUEST["chk" . $id_experiencia] == "on") {
      $x++;
      if ($x == 1) {
        $sql = "DELETE FROM experiencia WHERE cod_experiencia=$id_experiencia";
      } else { 
        $sql = $sql . " OR cod_experiencia=$id_experiencia";
      }
    }
  }
  mysqli_free_result($sqlResultado);
  if ($x > 0) { 
    $rs = mysqli_query($enlaces,$sql);
  }
  header ("Location:experiencia.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("module/head.php"); ?>
    <style>
      @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px)  {
        td:nth-of-type(1):before { content: "Título"; }
        td:nth-of-type(2):before { content: "Típo"; }
        td:nth-of-type(3):before { content: "Orden"; }
        td:nth-of-type(4):before { content: "Estado"; }
        td:nth-of-type(5):before { content: ""; }
        td:nth-of-type(6):before { content: ""; }
        td:nth-of-type(7):before { content: ""; }
      }
    </style>
    <script>
      function Procedimiento(proceso,seccion){
        document.fcms.proceso.value = "";
        estado = 0;
        for (i = 0; i < document.fcms.length; i++)
        if(document.fcms.elements[i].name.substring(0,3) == "chk"){
          if(document.fcms.elements[i].checked == true){
            estado = 1
          }
        } 
        if (estado == 0) {
          if (seccion == "N"){
            alert("Debes de seleccionar un banner.")
          }
          return
        }
        procedimiento = "document.fcms." + proceso + ".value = true"
        eval(procedimiento)
        document.fcms.submit()
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
        <div class="row">
          <div class="col-md-12">
            <div class="card card-bordered">
              <h4 class="card-title"><strong>Lista de Experiencia y Estudios</strong></h4>
              <div class="card-body">
                <a class="btn btn-info" href="<?php if($xVisitante=="0"){ ?>experiencia-nuevo.php<?php }else{ ?>javascript:visitante();<?php } ?>"><i class="fa fa-plus"></i> A&ntilde;adir nuevo</a>
                <hr>
                <form name="fcms" method="post" action="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="45%" scope="col">T&iacute;tulo
                          <input type="hidden" name="proceso">
                          <input type="hidden" name="eliminar" value="false">
                        </th>
                        <th width="20%" scope="col">Tipo</th>
                        <th width="10%" scope="col">Orden</th>
                        <th width="10%" scope="col">Estado</th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"></th>
                        <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="assets/img/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $consultarExperiencia = "SELECT * FROM experiencia ORDER BY orden";
                        $resultadoExperiencia = mysqli_query($enlaces,$consultarExperiencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
                        while($filaExp = mysqli_fetch_array($resultadoExperiencia)){
                          $xCodigo    = $filaExp['cod_experiencia'];
                          $xTitulo    = $filaExp['titulo'];
                          $xTipo      = $filaExp['tipo'];
                          $xOrden     = $filaExp['orden'];
                          $xEstado    = $filaExp['estado'];
                      ?>
                      <tr>
                        <td><?php echo $xTitulo; ?></td>
                        <td><?php if($xTipo=="1"){ echo "[Estudio]"; }else{ echo "[Experiencia]";} ?></td>
                        <td><?php echo $xOrden; ?></td>
                        <td><strong>
                          <?php if($xEstado=="1"){ echo "[Activo]"; }else{ echo "[Inactivo]";} ?>
                          </strong>
                        </td>
                        <td>
                          <a class="boton-eliminar <?php if($xVisitante=="1"){ ?>boton-eliminar-bloqueado<?php } ?>" href="<?php if($xVisitante=="0"){ ?>experiencia-delete.php?cod_experiencia=<?php echo $xCodigo; ?><?php }else{ ?>javascript:visitante();<?php } ?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                        <td><a class="boton-editar" href="experiencia-edit.php?cod_experiencia=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                        <td>
                          <?php if($xVisitante=="0"){ ?>
                          <div class="hidden">
                            <label class="custom-control custom-control-lg custom-checkbox" for="chkbx-<?php echo $xCodigo; ?>">
                              <input type="checkbox" class="custom-control-input" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" />
                              <span class="custom-control-indicator"></span>
                            </label>
                          </div>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php
                        }
                        mysqli_free_result($resultadoExperiencia);
                      ?>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("module/footer_int.php"); ?>
    </main>
    <!-- END Main container -->
  </body>
</html>