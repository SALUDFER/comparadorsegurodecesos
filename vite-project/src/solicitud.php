<?php session_start(); ?>
<!DOCTYPE HTML>
<?php
	if(!empty($_GET['utm_source']));
	{
	    if ($_GET['utm_source'] == 'search_ads')		$tipo_origen = 1;
	    elseif ($_GET['utm_source'] == 'display_ads') 	$tipo_origen = 4;
	    elseif ($_GET['utm_source'] == 'facebook_ads')	$tipo_origen = 6;
		else $tipo_origen = 8;
		$_SESSION['tipo_origen'] = $tipo_origen;
	}
	//Guarda la url original de entrada para los enlaces en el menú
	$_SESSION['urlOrigen'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


	if(!empty($_GET['gcclid']))
	{
		$_SESSION['gclid'] = $_GET['gcclid'];
	}

	$head_title = 'Comparador Seguros Decesos ▷  Calcula Precios y Coberturas';
	$head_descripcion = 'Comparador de seguros de decesos | Compara y elige el seguro de decesos mas barato. En sólo 1 minuto precios en más de 12 aseguradoras.';
	$head_keywords = 'seguro decesos, comparador seguro decesos, comparativa seguro decesos, contratar seguro decesos, seguro decesos precios';
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
	<body>
	<?php
	include ('modulos/header.php');
	?>	
<main class="my-4 py-4">

  <div class="container mb-5 mt-md-5 mt-xs-1">
 	
<?php 
include (dirname(__FILE__) . '/../../TARIFICADORES/DECESOS/Decesos_New/solicitud.php');
?>
</div>
  

</main>
	<?php
	include ('modulos/footer.php');
	//include ('modulos/llamada_lateral.php');
	?>
	
</body>
</html>
