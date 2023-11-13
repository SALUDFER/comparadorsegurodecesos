<?php
	session_start();

	if(!empty($_SESSION['ciaOrigen']))
	{
		$imgHeader = 'https://www.comparadorsegurodecesos.es/imagenes/aseguradoras/svg/logo_'.strtoupper($_SESSION['ciaOrigen']).'.svg';
	}
	else
	{
		$imgHeader = 'https://www.comparadorsegurodecesos.es/images/logo.png';
	}
?>
<html lang="es">
	<head>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDBHTMH');</script>
<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<link href="<?= $linkActual; ?>" rel="canonical">
		<title>Comparador de seguros de decesos</title>
		<meta name="description" content="<?=$head_descripcion; ?>">
		<meta name="keywords" content="<?=$head_keywords; ?>">
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
		<header class="container fixed-top">

			<nav class="navbar navbar-expand-lg navbar-light p-2">
				<a href = "<?=$_SESSION['urlOrigen']?>">
					<img src="/images/logotipo.svg" width="250" height="97" alt="Logotipo Comparador seguro decesos">
				</a>
			</nav>
		</header>
		<!-------- MAIN ----------------------------------------->
		<main class="mt-5 pt-5">
			<div class="container my-3">
				<h1 class="text-center">Comparador de Seguros de Decesos</h1>
				<?
				$peticion_include = true;
				include dirname(__FILE__) . "/../../../TARIFICADORES/DECESOS/Decesos_New/precios.php";
				?>
			</div>
		</main>
		<!--------FOOTER----------------------------------------->
		<footer>
			<div class="d-flex flex-wrap justify-content-center">
				<?php
				include 'modulos/footer.php';
				?>
			</div>
			<script src="https://www.comparadorsegurodecesos.es/TarificadorWeb/cookiesMedicion.js" type="text/javascript"></script>
		</footer>
	</body>
</html>
<style>
header{height:104px; background-color:#fff; display:flex}
    #contenedorPrincipalFinalDecesos .tipos_seguro{top: 104px !important}
    img{width:auto !important}
    img.logo{width:200px !important}
    #contenedorPrincipalFinalDecesos #BOT_COMPLETO .picoBotonera, 
    #contenedorPrincipalFinalDecesos #BOT_NIVELADO .picoBotonera{border-bottom: 35px solid #ff7300;
    border-right: 28px solid #0000;
    border-top: 28px solid #0000;
    border-left: 28px solid #0000;bottom: -95px;}
    #contenedorPrincipalFinalDecesos .tipos_seguro > div[id^='BOT_'] p span{z-index: 9999}
    header.fixed-top{z-index: 99 !important}
    
    @media only screen and (max-width: 575px){
    	
    	.container {width: 100%;}
    	
    }


    
    
</style>