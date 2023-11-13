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
	$head_title = '💚 Seguros de Decesos | Comparativa de Precios y Coberturas';
	$head_descripcion = '';
	$head_keywords = '';
	$noindex = true;
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
	<body>
		<?php
		include ('modulos/header.php');
		include ('modulos/banner-aseguradoras.php');
		include ('modulos/los-7-seguros-de-decesos-mas-baratos.php');
		?>
<div class="bg-light pb-4"><section class="container pt-5">
	<h2 class="azul_oscuro text-center py-3">Accede a nuestro <u>comparador especializado</u> y encuentra las mejores ofertas en seguros de decesos</h2>
</section>
<?php
	include ('modulos/tipos.php');?>
</div>

<?php
    include ('modulos/coberturas.php');
	include ('modulos/expertos.php');
	?>
		<?php
		include ('modulos/footer.php');
		include ('modulos/llamada_lateral.php');
		?>
</html>