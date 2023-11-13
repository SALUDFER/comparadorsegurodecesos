<!DOCTYPE html>
<?php
$head_title = '';
$head_descripcion = '';
$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
    <!-- Event snippet for TARIFICACION conversion page -->

	<body>
		<?php
		include ('modulos/header.php');
		include ('modulos/menu_iconos.php');
		?>
		<script> gtag('event', 'conversion', {'send_to': 'AW-988321169/28sGCL-1shYQkaui1wM'}); </script>
		<main class="container">
			<section style="margin-top:100px">
				<h1 class="azul text-center p-3">Resultado comparativa de Seguros de Decesos</h1>
				<?php
				$peticion_include = true;
				include (dirname(__FILE__) . "/../../TARIFICADORES/DECESOS/Decesos_New/precios.php");
				?>
			</section>
		</main>

		<?php
		include ('modulos/footer.php');
		?>
	</body>
</html>