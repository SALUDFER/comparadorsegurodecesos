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
	//Guarda la cia para mostrar en el logo durante navegación
	$_SESSION['ciaOrigen'] = '';

	if(!empty($_GET['gcclid']))
	{
		$_SESSION['gclid'] = $_GET['gcclid'];
	}

	$head_title = '💚 Seguros de Decesos para Mayores | Compara y Contrata Online';
	$head_descripcion = 'Compara precios y coberturas de los Mejores Seguros de Decesos para Mayores de 65, 70 y 80 años. Seguro de decesos convencional o con prima nivelada o prima única.';
	$head_keywords = 'mejor seguro decesos prima única, seguro decesos mayores, seguro decesos prima única, seguro de prima única, prima natural decesos, prima única decesos';
	$noindex = true;
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
	<body>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDBHTMH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<?php
		include ('modulos/header.php');
		include ('modulos/banner.php');
		include ('modulos/ventajas.php');
		include ('modulos/aseguradoras.php');
		include ('modulos/about.php');
		include ('modulos/tipos.php');
		include ('modulos/coberturas.php');
		include ('modulos/action.php');
		include ('modulos/opcionales.php');
		include ('modulos/footer.php');
		include ('modulos/llamada_lateral.php');
		?>
</html>