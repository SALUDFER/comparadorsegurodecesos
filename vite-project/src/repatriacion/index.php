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
	$head_title = '🌍 ✈  Seguro de Repatriación | Calcula tu Precio Online';
	$head_descripcion = 'La tranquilidad de poder volver a tu país, tanto si eres extranjero como si trabajas o estudias fuera de España.';
	$head_keywords = '';
	$noindex = true;
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	include ('modulos/header.php');
	include ('modulos/banner-aseguradoras.php');
	?>
	<body>
<div class="pb-4"><section class="container pt-5">
	<h2 class="azul_oscuro text-center py-3 display-4">La tranquilidad de poder volver a tu país, tanto si eres extranjero como si trabajas o estudias fuera de España.</h2>
</section>
<?php
	include ('modulos/tipos.php');?>
</div>
		<?php
		include ('modulos/otras-coberturas.php');
		include ('modulos/aseguradoras.php');
		include ('modulos/expertos.php');
		?>



		<?php
		include ('modulos/footer.php');
		include ('modulos/llamada_lateral.php');
		?>
</html>