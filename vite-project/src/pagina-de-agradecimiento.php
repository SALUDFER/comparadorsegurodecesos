<?php session_start(); ?>
<!DOCTYPE HTML>
<?php
	$head_title = 'Página de agradecimiento';
	$head_descripcion = 'Contacta con nosotros, Comparador Seguro de Decesos - Comparadorsegurodecesos.es.';
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

<section class="fondo_nubes height100">  
<div class="container mb-5 p-5 bg-blanco">
<h1 class="naranja">Gracias</h1>
<h2 class="azul">Su formulario ha sido enviado</h2>
<h3 class="azul">Nos pondremos en contacto con usted lo antes posible</h3>
<p><strong>Horario de Oficina:</strong> De Lunes a Viernes, de 9:00 a 20:00 horas.</p>
<p>Muchas gracias por solicitar la información</p>
</div>
</section>

	<?php
	include ('modulos/footer.php');
	?>
</body>
</html>

<style>
    .height100{height:78vh}
	section.fondo_nubes {
    background-image: url(/images/fondo_banner_ppal.webp);
    background-size: cover;
    background-attachment: fixed;
    background-color: #eefafd;
    padding: 100px 0px 60px;
    background-position: 50% 50%;
}
.bg-blanco{background-color:#fff}
</style>


