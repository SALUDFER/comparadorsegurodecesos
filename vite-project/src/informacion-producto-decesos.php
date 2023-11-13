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

	$head_title = 'Resultado de comparativa de Seguros de Decesos';
	$head_descripcion = 'Compara tu Seguro de Decesos en más de 10 aseguradoras y obtén una comparativa personalizada en menos de 1 minuto.';
	$head_keywords = 'seguro decesos, comparador seguro decesos, comparativa seguro decesos, contratar seguro decesos, seguro decesos precios';
	$noindex = true;
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

  <div class="container mb-5 mt-5">
 <h1 class="text-center azul">Resultado de comparativa precios de Seguros de Decesos</h1>	
<?php
$producto_seleccion= $_GET['producto'];
$tipo_producto= $_GET['tipo'];
$origen = 78;
include("/home/www/COMPARATIVAS/ComparativaDecesos/joomla.php");
?>
</div>
  

</main>
	<?php
	include ('modulos/footer.php');
	//include ('modulos/llamada_lateral.php');
	?>
</body>
</html>

<style>
.ui-dialog .ui-dialog-titlebar-close{width:20px !important; height:20px !important}
</style>
