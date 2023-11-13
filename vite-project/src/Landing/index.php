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
	$head_title = '💚 Comparador Seguro Decesos | Compara Precios y Coberturas Online';
	$head_descripcion = '';
	$head_keywords = '';
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
		?>
<section class="container pt-5">
	<h2 class="azul_oscuro text-center py-3">Accede a nuestro <u>comparador especializado</u> y encuentra las mejores ofertas en seguros de decesos</h2>
	<p><strong>Comparadorsegurodecesos.es</strong> te ayudará a escoger la mejor opción de seguro para ti y los tuyos, encontrando en muy poco tiempo la aseguradora y las coberturas de decesos que mejor se adaptan a tus necesidades.</p>
</section>
<?php
	include ('modulos/tipos.php');
	include ('modulos/los-7-seguros-de-decesos-mas-baratos.php');
	include ('modulos/coberturas.php');
	include ('modulos/expertos.php');
	?>
		<?php
		include ('modulos/footer.php');
		include ('modulos/llamada_lateral.php');
		?>
</html>