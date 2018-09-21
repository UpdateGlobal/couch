	<?php
		$consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
            $xLogo      = $filaMet['logo'];
            $xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xIco       = $filaMet['ico'];
    ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $xDes; ?>" />
	<meta name="keywords" content="<?php echo $xKey; ?>" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!--Icon font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="/css/superfish.css">

	<link rel="stylesheet" href="/css/style.css">

	<link rel="stylesheet" type="text/css" href="/owl/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/owl/owl.theme.default.css">

	<!-- Custom Raúl -->
	<link rel="stylesheet" href="/css/custom_r.css">

	<script>
		    function sendContacto(){
		        var valid;
		        valid = validateContacto();
		        if(valid) {
		            jQuery.ajax({
		                url: "/contact_form.php",
		                data:'nombres='+$("#nombre-1").val()+'&email='+$("#email-1").val()+'&mensaje='+$("#mensaje-1").val()+'&fecha_ingreso='+$("#fecha").val(),
		                type: "POST",
		                success:function(data){
		                    $("#mail-status-1").html(data);
		                },
		                error:function (){}
		            });
		        }
		    }
		    function validateContacto() {
		        var valid = true;
		        if(!$("#nombre-1").val()) {
		            $("#nombre-1").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#email-1").val()) {
		            $("#email-1").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#email-1").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		            $("#email-1").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#mensaje-1").val()) {
		            $("#mensaje-1").css('background-color','#f28282');
		            valid = false;
		        }
		        return valid;
		    }
		</script>