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

	$head_title = 'Mapa web comparadorsegurodecesos.es';
	$head_descripcion = 'Compara tu Seguro de Decesos en más de 10 aseguradoras y obten una comparativa personalizada en menos de 1 minuto.';
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
<main class="my-4 py-4">
	<div class="container mb-5">
    <h1 class="azul">Mapa web comparadorsegurodecesos.es</h1>
    <ul class="lista">
        <li>
            <h2 class="verde">Páginas principales</h2>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="comparador-seguro-decesos">Comparador</a></li>
                <li><a href="contacto">Contacto</a></li>
            </ul>
        </li>
        <li>
            <h2 class="verde">Seguros de Decesos</h2>
            <ul>
                <li><a href="seguro-decesos/adeslas-decesos">Adeslas</a></li>
                 <ul>
                        <li><a href="seguro-decesos/adeslas-decesos/prima-unica">Adeslas Prima Única</a></li>
                        </ul>
                <li><a href="seguro-decesos/allianz-decesos">Allianz</a></li>
                <li><a href="seguro-decesos/asisa-decesos">Asisa</a></li>
                <li><a href="seguro-decesos/axa-decesos">AXA</a></li>
                <li><a href="seguro-decesos/caser-decesos">Caser</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/caser-decesos/prima-unica">Caser Prima Única</a></li>
                        </ul>
                <li><a href="seguro-decesos/divina-pastora-decesos">Divina Seguros</a></li>
 				<li><a href="seguro-decesos/dkv-decesos">DKV</a></li>
                <li><a href="seguro-decesos/europea-decesos">Europea</a></li>
                <li><a href="seguro-decesos/fiatc-decesos">FIATC</a></li>
                <li><a href="seguro-decesos/generali-decesos">Generali</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/generali-decesos/prima-unica">Generali Prima Única</a></li>
                        </ul>
                <li><a href="seguro-decesos/helvetia-decesos">Helvetia</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/helvetia-decesos/prima-nivelada">Helvetia Prima Nivelada</a></li>
                        </ul>
                <li><a href="seguro-decesos/la-fe-decesos">La Fe</a></li>
                <li><a href="seguro-decesos/mapfre-decesos">Mapfre</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/mapfre-decesos/prima-unica">Mapfre Prima Única</a></li>
                        </ul>
                <li><a href="seguro-decesos/nortehispana-decesos">Nortehispana</a></li>
                <li><a href="seguro-decesos/ocaso-decesos">Ocaso</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/ocaso-decesos/prima-unica">Ocaso Prima Única</a></li>
                        </ul>
                <li><a href="seguro-decesos/preventiva-decesos">Preventiva</a></li>
                <li><a href="seguro-decesos/reale-decesos">Reale</a></li>
                <li><a href="seguro-decesos/sanitas-decesos">Sanitas</a></li>
                <li><a href="seguro-decesos/santa-lucia-decesos">Santalucía</a></li>
                                 <ul>
                        <li><a href="seguro-decesos/santa-lucia-decesos/prima-unica">Santa Lucía Prima Única</a></li>
                        </ul>
            </ul>
        </li>
        <li>
            <h2 class="verde">Blog</h2>
            <ul>
                <li><a href="/articulos/cuanto-cuesta-incluir-bebe-seguro-decesos">¿Cuánto cuesta añadir al bebé en el seguro de decesos?</a></li>
                <li><a href="/articulos/en-busca-de-una-asistencia-funeraria-de-calidad">Seguro Funerario, una asistencia funeraria de calidad</a></li>
                <li><a href="/articulos/seguros-decesos-barcelona">Ofertas seguros de decesos en Barcelona</a></li>
                <li><a href="/articulos/cual-es-el-mejor-seguro-de-decesos">¿Cuál es el mejor seguro de decesos?</a></li>
                <li><a href="/articulos/cuanto-cuesta-un-entierro-sin-seguro">¿Cuánto cuesta un entierro o incineración sin seguro?</a></li>
                <li><a href="/articulos/cuanto-cuesta-un-seguro-de-decesos">¿Cuánto Vale un Seguro de Decesos?</a></li>
                <li><a href="/articulos/dar-de-baja-un-seguro-de-decesos">¿Cómo dar de baja un Seguro de Decesos?</a></li>
                <li><a href="/articulos/companias-de-seguros-de-decesos">Compañías de Seguros de Decesos</a></li>
                <li><a href="/articulos/seguro-decesos-repatriacion-extranjeros">Seguros de Decesos con Repatriación para Extranjeros</a></li>
                <li><a href="/articulos/seguro-de-decesos-barato">Encuentre su Seguro de Decesos Barato de la forma más fácil</a></li>
                <li><a href="/articulos/seguros-decesos-mayores">Seguro de Decesos para Mayores de 70 u 80 años</a></li>
                <li><a href="/articulos/diferencias-entre-un-seguro-de-decesos-y-un-seguro-de-vida">Diferencias entre un Seguro de vida y un Seguro de Decesos</a></li>
				<li><a href="/articulos/seguros-de-decesos-en-madrid">Seguros de decesos baratos en Madrid</a></li>
                <li><a href="/articulos/prima-nivelada-santalucia">Prima Nivelada Santalucía</a></li>
                <li><a href="/articulos/para-que-sirve-la-antiguedad-en-un-seguro-de-decesos">¿Para que sirve la antigüedad en un seguro de decesos?</a></li>
				<li><a href="/articulos/testamento-online">¿Cómo hacer testamento online?</a></li>
                <li><a href="/articulos/que-incluye-un-seguro-de-decesos">¿Qué incluye un seguro de decesos?</a></li>
                <li><a href="/articulos/que-es-como-se-hace-testamento-vital">¿Qué es y cómo se hace el Testamento Vital?</a></li>
				<li><a href="/articulos/se-pueden-tirar-las-cenizas-al-mar">¿Se pueden tirar las cenizas al mar?</a></li>
                <li><a href="/articulos/sepelio-que-es">Sepelio ¿qué es?</a></li>
                <li><a href="/articulos/como-saber-si-una-persona-tiene-seguro-de-decesos">¿Cómo saber si una persona tiene seguro de decesos?</a></li>
                <li><a href="/articulos/seguro-de-decesos-que-es-que-cubre">¿Qué cubre un seguro de decesos?</a></li>
				<li><a href="/articulos/cuanto-cuesta-una-repatriacion-funeraria-sin-seguro-de-decesos">¿Cuánto cuesta una repatriación funeraria sin seguro de decesos?</a></li>
                <li><a href="/articulos/mejor-seguro-decesos-segun-ocu">¿Cuál es el mejor seguro de decesos según la OCU?</a></li>
                <li><a href="/articulos/asistencia-viaje-seguro-decesos">¿Qué cubre la asistencia en viaje de mi seguro de decesos?</a></li>
				<li><a href="/articulos/principales-seguros-decesos-familiares">¿Cuáles son los principales seguros de decesos familiares?</a></li>
                <li><a href="/articulos/prima-natural-nivelada-o-mixta">¿Prima Natural, Nivelada o Mixta? Primas en el seguro decesos</a></li>
                <li><a href="/articulos/devolucion-dinero-seguro-decesos">Devolución del dinero en el seguro de decesos</a></li>
				<li><a href="/articulos/que-es-un-columbario">¿Qué es un columbario?</a></li>
                <li><a href="/articulos/certificacion-de-convivencia-conyugal">Certificación de convivencia conyugal</a></li>
                <li><a href="/articulos/dias-permiso-por-fallecimiento">Permiso retribuido por fallecimiento</a></li>
				<li><a href="/articulos/tipos-testamento-espana">¿Qué tipos de testamento hay en España?</a></li>
                <li><a href="/articulos/precio-seguro-decesos-para-ninos">Precio del seguro de decesos para niños</a></li>
                <li><a href="/articulos/seguro-decesos-a-prima-unica">Seguro Decesos a prima única
                <li><a href="/articulos/desgrava-el-seguro-de-decesos">¿Desgrava el seguro de decesos?</a></li>
				<li><a href="/articulos/hay-diferencia-entre-usufructo-vitalicio-y-usufructo-universal">¿Hay diferencia entre usufructo vitalicio y usufructo universal?</a></li>
                <li><a href="/articulos/que-es-un-testamento-abierto">¿Qué es un testamento abierto?</a></li>
                <li><a href="/articulos/que-es-el-certificado-de-ultimas-voluntades">¿Qué es el certificado de últimas voluntades?</a></li>
                <li><a href="/articulos/el-notario-avisa-a-los-herederos-de-un-testamento">¿El notario avisa a los herederos de un testamento?</a></li>
                <li><a href="/articulos/que-es-la-prima-nivelada-en-el-seguro-de-decesos">¿Qué es la prima nivelada en el seguro de decesos?</a></li>

            </ul>
        </li>
    </ul>
  
  
  
  
  </div>
</main>
	<?php
	include ('modulos/footer.php');
	include ('modulos/llamada_lateral.php');
	?>
</body>
</html>

<style>
	ul {list-style-type: disclosure-closed;}
	ul li a{color:inherit}
	ul li a:hover{color:var(--naranja) !important}
</style>







