<?php 
$enlaces = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'update_coach') or die('No se pudo seleccionar la base de datos');

/*$enlaces = mysqli_connect('localhost', 'jopacoaching_update', 'b#=L*!EV7@-x') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'jopacoaching_update') or die('No se pudo seleccionar la base de datos');*/
?>