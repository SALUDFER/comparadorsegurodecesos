<html lang="es">
	<head>
	<meta charset="utf-8">
	<link href="<?= $linkActual; ?>" rel="canonical">
	<title>Aviso Legal</title>
	<meta name="description" content="<?=$head_descripcion;?>">
	<meta name="keywords" content="<?=$head_keywords;?>">
    <meta name="robots" content="noindex,nofollow" />
   	<!-- <link rel="canonical" href="" /> -->
   	<link rel="stylesheet" type="text/css" href="adeslas/css/bootstrap.min.css">
   	<link rel="stylesheet" type="text/css" href="adeslas/css/estilo.css">
   	<link rel="stylesheet" type="text/css" href="adeslas/css/all.min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="../../images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../../images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
	<link rel="manifest" href="../../images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
	<body>
<!-------- HEADER ----------------------------------------->
			<?php
			include ('modulos/header.php');
			?>
<!-------- MAIN ----------------------------------------->
<main class="mt-5 pt-5">
	<div class="container my-3 p-3">
		<?php echo file_get_contents('http://avisoslegales.segurfer.es/avisolegal.php?id=45&sitioweb=www.comparadorsegurodecesos.es'); ?>
	</div>

</main>
<!--------FOOTER----------------------------------------->
<footer>
	<div class="d-flex flex-wrap justify-content-center">
		<?php
		include ('modulos/footer.php');
		?>
	</div>
	<script src="https://www.comparadorsegurodecesos.es/TarificadorWeb/cookiesMedicion.js" type="text/javascript"></script>
</footer>


	</body>


</html>

<style>
	#formularioTarificacionDecesos #formularioTarificacionDecesos-p-0 .coberturasPadre{display:block;}
	#formularioTarificacionDecesos div.bloquePreguntaTipoSeguro .tipo_cobertura_flex, #formularioTarificacionDecesos .tipo_cobertura_flex{height:auto}
	form#formularioTarificacionDecesos legend{float:none !important}
	h1, h2, h3{line-height:100%}



</style>