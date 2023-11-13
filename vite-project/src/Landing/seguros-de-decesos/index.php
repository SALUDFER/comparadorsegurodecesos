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

	$head_title = '💚 Comparador Seguro Decesos | Comparativa Precios y Coberturas';
	$head_descripcion = 'Descubre los Mejores Seguros de Decesos. Accede al Comparador de Seguros de Decesos y Contrata tu Seguro de Entierro con las mejores coberturas.';
	$head_keywords = 'comparador seguro decesos, precio seguro decesos, mejor seguro de decesos, seguro de decesos, seguro decesos, seguro de muertos, seguro de defuncion, calcular seguro decesos';
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
		include ('modulos/banner-principal.php');
		include ('modulos/ventajas-banner.php');
		include ('modulos/comparativa-aseguradoras.php');
		include ('modulos/aseguradoras.php');
		include ('modulos/tipos.php');
		include ('modulos/coberturas.php');
		include ('modulos/action.php');
		include ('modulos/ventajas.php');
		include ('modulos/footer.php');
		include ('modulos/llamada_lateral.php');
		?>
</html>