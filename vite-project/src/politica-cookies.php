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

	$head_title = 'Política de cookies';
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
<h1 class="azul">Cómo utilizamos las cookies en www.comparadorsegurodecesos.es</h1>
  <h2 class="naranja">¿Qué es una cookie?</h2>
<p>Una cookie es un pequeño código que los sitios web visitados envían al navegador y que acumula información acerca de la visita al sitio web para facilitar las visitas sucesivas y hacer más útil la navegación. </p>
<p>www.comparadorsegurodecesos.es utiliza cookies para varios fines, entre los que se incluyen recordar tu acceso a la web, contar el número de visitas que recibimos al acceder a una página, ofrecerte una personalización en los resultados de nuestras comparativas y proteger tus datos.</p>
<h2 class="naranja">Tipos de cookies que utiliza www.comparadorsegurodecesos.es</h2>
<p>Utilizamos diferentes tipos de cookies para el funcionamiento del sitio web de www.comparadorsegurodecesos.es. Una parte o la totalidad de las cookies identificadas a continuación se pueden almacenar en tu navegador. Puedes ver y administrar cookies en tu navegador (aunque es posible que los navegadores para dispositivos móviles no ofrezcan esta visibilidad).</p>
  <h4 class="azul">¿Qué tipos de cookies existen?</h4>
<ul>
	<li><strong>Cookies propias:</strong> Son aquellas que se envían al equipo terminal del usuario desde un equipo o dominio gestionado por el propio editor del sitio web y desde el que se presta el servicio solicitado por el usuario.</li>
	<li><strong>Cookies de tercero:</strong> Son aquellas que se envían al equipo terminal del usuario desde un equipo o dominio que no es gestionado por el editor del sitio web, sino por otra entidad que trata los datos obtenidos través de las cookies.</li>
	<li><strong>Cookies de sesión:</strong> Son cookies temporales que permanecen en el archivo de cookies de su navegador hasta que abandone la página web, por lo que ninguna queda registrada en el disco duro del usuario. La información obtenida por medio de estas cookies sirve para analizar pautas de tráfico en la web. Esto permite proporcionar una mejor experiencia para mejorar el contenido y facilitar su uso.</li>
	<li><strong>Cookies permanentes:</strong> Son almacenadas en el disco duro y el sitio web las lee cada vez que el usuario realiza una nueva visita. Una cookie permanente posee una fecha de expiración determinada. La cookie dejará de funcionar después de esa fecha. Se utilizan para facilitar los servicios de compra y registro.</li>
	<li><strong>Cookies técnicas:</strong> Son aquellas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</li>
	<li><strong>Cookies de personalización:</strong> Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</li>
	<li><strong>Cookies de análisis:</strong> Son aquellas que permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los usuarios de los sitios web a los que están vinculadas. La información recogida mediante este tipo de cookies se utiliza en la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles de navegación de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en función del análisis de los datos de uso que hacen los usuarios del servicio.</li>
	<li><strong>Cookies publicitarias:</strong> Son aquellas que permiten la gestión de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios.</li>
	<li><strong>Cookies de publicidad comportamental:</strong> Son aquellas que permiten la gestión de los espacios publicitarios que el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo.</li>
</ul>
<h4 class="azul">¿Qué tipos de cookies utiliza este sitio web?</h4>
  <script id="CookieDeclaration" src="https://consent.cookiebot.com/21c6b120-ae49-4fef-a00e-b311fc23d503/cd.js" type="text/javascript" async></script>
  <br>

 
<h2 class="naranja">Cómo administrar las cookies del navegador</h2>
<p>Algunas personas prefieren no habilitar las cookies. Este es el motivo por el que la mayoría de los navegadores te ofrecen la posibilidad de administrar cookies que sean adecuadas para ti.</p>
<p>En algunos navegadores puedes configurar reglas para administrar cookies por sitio, lo que te ofrece un control más preciso sobre tu privacidad. Esto significa que puedes inhabilitar cookies de todos los sitios salvo de aquellos en los que confías.</p>
<p>El menú de tu navegador deberá existir la opción de borrar las cookies y datos de navegación.  Además si utilizas un navegador web moderno, podrás navegar de forma privada cuando no quieras que tus visitas sean rastreadas, por lo tanto todas las cookies, historial de navegación y descargas creados en dicho modo, se eliminarán por completo al cerrar todas las ventanas navegador.</p>
<p>Por ejemplo puedes encontrar información sobre cómo hacerlo en el caso que uses como navegador:</p>
<p>Firefox desde aquí: <a title="Cookies Mozilla" href="http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank" rel="nofollow">http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a></p>
<p>Chrome desde aquí: <a title="Cookies Chrome" href="http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647" target="_blank" rel="nofollow">http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647</a></p>
<p>Explorer desde aquí: <a title="Cookies Explorer" href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="nofollow">https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies</a></p>
<p>Safari desde aquí: <a title="Cookies Safari" href="http://support.apple.com/kb/ph5042" target="_blank" rel="nofollow">http://support.apple.com/kb/ph5042</a></p>
<p>Opera desde aquí:&nbsp;<a title="Cookies Opera" href="http://help.opera.com/Windows/11.50/es-ES/cookies.html" target="_blank" rel="nofollow">http://help.opera.com/Windows/11.50/es-ES/cookies.html</a></p>
<h3 style="font-size:24px;">Tratamiento de datos personales</h3>
<p>
  Gescobert Correduría de Seguros S.L. es el responsable del tratamiento de los datos personales del Interesado y le informan de que estos datos serán tratados de conformidad con lo dispuesto en el Reglamento (UE) 2016/679, de 27 de abril de 2016 (GDPR), por lo que se le facilita la siguiente información del tratamiento:
</p>
<ul>
  <li><strong>Fines del tratamiento:</strong> según se especifica en el apartado de cookies que se utilizan en este sitio web.</li>
  <li><strong>Legitimación del tratamiento:</strong> por consentimiento del interesado (art. 6.1 GDPR).</li>
  <li><strong>Criterios de conservación de los datos:</strong> los datos se conservarán como máximo durante un año.</li>
  <li><strong>Comunicación de los datos:</strong> Gescobert Correduría de Seguros S.L. podrá ceder los datos de carácter personal del Cliente a la compañía aseguradora y/o a otras Sociedades de Correduría de Seguros, ya sean del Grupo de Gescobert Correduría de Seguros S.L. o ajenas a éste, a los solos efectos de garantizar el pleno desenvolvimiento del contrato de seguro y el cumplimiento de las obligaciones establecidas en dicha Ley y en sus disposiciones de desarrollo.</li>
</ul>
<h4 style="font-size:20px;">
  Derechos que asisten al interesado:
</h4>
<ul>
  <li>Derecho a retirar el consentimiento en cualquier momento.</li>
  <li>Derecho de acceso, rectificación, portabilidad y supresión de sus datos y a la limitación u oposición a su tratamiento.</li>
  <li>Derecho a presentar una reclamación ante la Autoridad de control (www.aepd.es) si considera que el tratamiento no se ajusta a la normativa vigente.</li>
  
</ul>

<h4 style="font-size:20px;">Datos de contacto para ejercer sus derechos:</h4>
<p>
  GESCOBERT S.L., provista de CIF B59191296, con domicilio social en Calle Marie Curie, 5 Edif. Alfa 4º 4.6 (Rivas-Vaciamadrid - Madrid C.P. 28521).
</p>
  
  
  <style>
    table td{vertical-align:top}
  </style>
  </div>
</main>
	<?php
	include ('modulos/footer.php');
	include ('modulos/llamada_lateral.php');
	?>
</body>
</html>