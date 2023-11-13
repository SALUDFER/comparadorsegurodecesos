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

	$head_title = ' Seguro Decesos GENERALI ✝   Precios, Coberturas, Opiniones';
	$head_descripcion = 'Todo sobre Generali Decesos, información y ventajas - Coberturas, Precios, Opiniones, Teléfono, Condicionado y Cuadro médico - Compara precios y coberturas de más de 20 aseguradoras en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-generali.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos y Asistencia Familiar Generali</h2><hr>
	<p class="text-center titulo-descripcion">
					Generali Protección Familiar ofrece asistencia garantizada tanto para usted, como para todos los miembros de su familia.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/generali/generali-seguros-decesos.webp" type="image/webp">
  <source srcset="images/generali/generali-seguros-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/generali/generali-seguros-decesos.png" alt="generali seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Un seguro de cobertura integral</h3>
				<p class="description text-muted">
					Generali ofrece un seguro de decesos que cubre todos los gastos fallecimiento del asegurado y se encarga de toda la gestión y gastos de sepelio como enterramiento o incineración.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Más que un seguro de decesos</h3>
				<p class="description text-muted">
					 Entre sus coberturas opcionales está fallecimiento o invalidez absoluta y permanente por accidente, asistencia en viaje, servicio médico de asistencia familiar, traslado nacional e internacional, servicio de gestoría.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart"></i>
				</div>
				<h3 class="title">La mayor protección para tus seres queridos</h3>
				<p class="description text-muted">
					Contratando un seguro de decesos tienes la tranquilidad que ante cualquier imprevisto grave tu familia no tendrá que afrontar los amplios costes relacionados con un servicio fúnebre y que tu seguro le ayudará y apoyará a la hora de todos los trámites asociados.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Generali</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-6 col-lg-3 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-6"></i>
  <div class="card-body">
    <h3 class="card-title azul">6 modalidades de seguros de decesos</h3><hr class="line">
    <p class="card-text">Seguros de decesos específicos para mayores, para extranjeros o para jóvenes, entre otros.</p>
  </div>
</div>
		</div>
		<div class="col-md-6 col-lg-3 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-cane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Seguro para mayores de 70 años</h3><hr class="line">
    <p class="card-text">Generali ofrece un seguro de prima única, que incluye servicios de ayuda a domicilio, teleasistencia y videoconsulta médica y psicológica.</p>
    <a class="saber_mas text-center" href="/seguro-decesos/generali-decesos/prima-unica" title="Generali Decesos Prima única">Saber más  <span class="verde">→</span></a>
  </div>
</div>
		</div>
		
		<div class="col-md-6 col-lg-3 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Incluye repatriación</h3><hr class="line">
    <p class="card-text">Tanto si eres español y vives fuera como si eres extranjero y vives en España, Generali te cubre la repatriación a cualquier lugar del mundo.</p>
  </div>
</div>
		</div>
		<div class="col-md-6 col-lg-3 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-tooth"></i>
  <div class="card-body">
    <h3 class="card-title azul">Cobertura dental</h3><hr class="line">
    <p class="card-text">Con Generali Decesos podrás disfrutar de servicios dentales sin coste, como una limpieza bucal anual.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->

<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Generali?</h2><hr>
	<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa-solid fa-dove"></i>COBERTURAS DE ENTIERRO O INCINERACIÓN
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Generali te incluye un servicio de sepelio completo, cubre gestiones y gastos de todos los procesos desde el fallecimiento. </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Para la incineración o entierro se puede escoger cualquier cementerio o planta incineradora de España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio Fúnebre Especial Neonatos:</strong> Para los hijos de mujeres aseguradas fallecidos antes de los 30 primeros días de edad.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites de Gestoría</strong> incluyendo toda la gestión y tramitación de los documentos obligados como: certificado de defunción, pensión de viudedad, orfandad, jubilación o incapacidad e invalidez...</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    
  </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="fa-solid fa-plane"></i>ASISTENCIA EN TRASLADOS
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <table class="table table-striped tabla-coberturas">
          	<tbody>
    
    <tr>
      <th scope="row"><strong>Traslado Nacional</strong>, se cubre el traslado del fallecido a cualquier parte de España</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong> para viajes al extranjero no superiores a 90 días</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
  </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="fa-solid fa-earth-americas"></i>ASISTENCIA EN VIAJE
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong> hasta España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a los hijos menores de 15 años o discapacitados.</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria urgente</strong> en caso de accidente o enfermedad urgente en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos y farmacéuticos en el extranjero.</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    
  </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong> Servicio de Orientación Telefónica:</strong> Un servicio telefónico que funciona las 24 horas los 365 días del año donde un equipo de profesionales te aconsejará ante cualquier consulta médica, psicológica, jurídica o social.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Segunda Opinión Médica:</strong> En caso de sufrir una enfermedad grave o compleja podrás consultar un segundo diagnóstico con médicos altamente cualificados.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicios de Ayuda a Domicilio:</strong> En caso de necesitarlo, dispones de 5 visitas del médico y 5 de enfermería al año totalmente gratis. Y además, Telefarmacia, envío de personal de ayuda, servicio doméstico, servicio de catering, peluquería y podología, asistencia a animales domésticos, etc.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acceso a servicios médicos y dentales:</strong> Podrás acceder a un amplio cuadro médico concertado a precios preferentes.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        
  </tbody>
        </table>
      </div>
    </div>
  </div>
  
</div>
</section>

<!----------------------FIN TABLA COBERTURAS------------------->
<!-----------------COBERTURAS OPCIONALES------------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul titulo-especial">Y además, podrás incluir coberturas exclusivas en tu Seguro de Decesos Generali</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Generali ofrece numerosas ventajas adicionales:</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-falling-burst"></i>
				</div>
				<h4 class="title">Seguro de Accidentes</h4>
				<p class="description text-muted">
					Una indemnización en caso de fallecimiento o Invalidez Absoluta y Permanente a consecuencia de un accidente con capitales que van desde los 3.000€ a los 30.000€.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-bed-pulse"></i>
				</div>
				<h4 class="title">Hospitalización</h4>
				<p class="description text-muted">
					Una indemnización diaria en caso de ser hospitalizado por cualquier causa, podrás elegir el capital diario que desees entre 10€ y 50€.
				</p>
			</div>
	
		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/generali/coberturas-opcionales-generali.webp" type="image/webp">
  <source srcset="images/generali/coberturas-opcionales-generali.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/generali/coberturas-opcionales-generali.jpg" alt="fiatc seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Generali</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Generali Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Qué cubre el Seguro de Decesos de Generali?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Generali oferta varios tipos de seguros de decesos. Por lo que, ofrece prodcutos que varían en función de las condiciones del asegurado (edad, capacidades, situación..). Ofrecen servicios como gestión del sepelio o elección de tanatorio en su seguro de Protección Edad Oro, por ejemplo.
		</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Hasta qué edad puedo contratar el Seguro de Decesos de Generali?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Ofrecen el seguro Potección Edad Oro para mayores de 70 años.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        Soy extranjero, ¿si fallezco en España me repatrian a mi país?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, con el Seguro de Protección Extranjeros, Generali llevará estos tramites y gestionará la repatriación y el sepelio</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Qué formas de pago ofrecen?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>De forma regular ofrecen el pago de forma anual, semestral, trimestral o mensual, aunque hay una excepción en el seguro Express que sólo se puede pagar de forma anual.</p>
        <p>También existe una modalidad enfocada en las personas mayores, con un único pago a realizar en la fecha de emisión de la póliza.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Tengo Asistencia 24/7?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, ofrecen asistencia jurídica a sus asegurados 24 horas al día, Generali también pone a disposición un teléfono de atención 24 horas para solucionar todas sus dudas y conflictos</p>
      </div>
    </div>
  </div>
 
  </div>

  </div>
</div>
</section>







	<?php
	include ('../modulos/footer.php');
	include ('../modulos/llamada_lateral.php'); 
?>
</html>