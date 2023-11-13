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

	$head_title = 'Seguros de Decesos ▷ Precios y Coberturas de 20 Aseguradoras';
	$head_descripcion = 'Comparador de seguro de decesos ▷ Encuentra los mejores precios y coberturas en seguros de decesos en nuestra comparativa. ¡Fácil, rápido y con contratación online!';
	$head_keywords = 'seguro decesos, comparador seguro decesos, comparativa seguro decesos, contratar seguro decesos, seguro decesos precios';
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
	<body>
		
	<?php
	include ('modulos/header.php');
	include ('modulos/hero.php');
	?>	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDBHTMH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php
	include ('modulos/about-movil.php');
	include ('modulos/productos.php');
	include ('modulos/tabla-3-seguros-mas-baratos.php');
	include ('modulos/coberturas-movil.php');
	//include ('modulos/coberturas-opcionales.php');
	//include ('modulos/tipos-de-prima.php');
	include ('modulos/preguntas-frecuentes.php');
	include ('modulos/footer.php');
	include ('modulos/llamada_lateral.php');
	?>
	</body>
</html>
