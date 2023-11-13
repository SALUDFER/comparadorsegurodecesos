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

	$head_title = ' Seguro Decesos de Preventiva ✝ ▷ Calcular Precios';
	$head_descripcion = 'Todos sobre qué cubre y los precios de Preventiva Decesos - Teléfono de atención 24 horas, Condiciones Generales, Opiniones de Preventiva - Comparador precios y coberturas de más de 20 aseguradoras de decesos en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-preventiva.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Preventiva VIVO</h2><hr>
	<p class="text-center titulo-descripcion">
					Desde el Grupo Preventiva Seguros de Decesos ofrecen tranquilidad y seguridad en momentos tan difíciles como la pérdida de un ser querido.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/preventiva/seguro-decesos-preventiva.webp" type="image/webp">
  <source srcset="images/preventiva/seguro-decesos-preventiva.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/preventiva/seguro-decesos-preventiva.png" alt="la preventiva seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Servicio de decesos completo</h3>
				<p class="description text-muted">
					Preventiva se hace cargo de todos los costes funerarios y adapta el sepelio a los usos y costumbres locales, así como de todos los trámites y gestiones posteriores al fallecimiento. Además, devuelve el capital que no se haya utlizado para el funeral.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-plane"></i>
				</div>
				<h3 class="title">Traslado funerario incluido</h3>
				<p class="description text-muted">
					Preventiva Decesos garantiza el traslado del cuerpo desde cualquier parte del mundo hasta el cementerio o crematorio elegido en España. Incluye los gastos para el desplazamiento de un acompañante, si el fallecimiento se produce fuera de nuestro país.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h3 class="title">Preventiva cubre la repatriación</h3>
				<p class="description text-muted">
					Preventiva ofrece coberturas de repatriación, tanto para los que viven fuera de España como para los extranjeros residentes aquí. Se ocupa de todos los gastos y gestiones para llevar el cuerpo hasta el cementerio o crematorio.
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas de contratar Preventiva Decesos</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-star"></i>
  <div class="card-body">
    <h3 class="card-title azul">Entierro o incineración</h3><hr class="line">
    <p class="card-text">Preventiva Decesos se encarga de gestionar todo lo relacionado con el entierro o incineración para que no tengas que preocuparte por nada.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-umbrella"></i>
  <div class="card-body">
    <h3 class="card-title azul">Amplias coberturas con Preventiva Decesos</h3><hr class="line">
    <p class="card-text">Preventiva te incluye todos los trámites y gestiones jurídicas, descuento en servicios médicos y dentales o ayuda doméstica a familiares.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-phone-volume"></i>
  <div class="card-body">
    <h3 class="card-title azul">Teléfono de atención 24 horas</h3><hr class="line">
    <p class="card-text">Preventiva Decesos pone a disposición de asegurados y familiares un teléfono de atención las 24 horas del día, los 365 días del año.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué cubre el seguro de decesos de Preventiva?</h2>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Servicio completo de decesos adaptado a los usos y costumbres locales.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. El asegurado o sus familiares podrán elegir cualquier lugar de España donde llevar a cabo el entierro.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites de Gestoría:</strong> El equipo de Preventiva se encargará de todos los trámites y gestiones ante los organismos competentes necesarios (asesoramiento legal, redacción de documentos, obtención del certificado de defunción, pension de viudedad, orfandad, jubilación o incapacidad e invalidez....)</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Fallecimiento de menores de 30 días</strong>. Preventiva cubre los gastos de decesos de hijos en periodo de gestación o menores de 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Asistencia psicológica para familiares</strong>. Preventiva pone a disposición de los familiares un servicio de orientación psicológica.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Traslado del fallecido hasta el cementerio o planta incineradora que hayan elegido para el evento.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong> del fallecido, en caso de viajes al extranjero no superiores a 90 días.</th>
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
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado de acompañante para repatriación del fallecido</strong>. Pago de transporte ida y vuelta para acompañante desde España y posterior vuelta a España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria</strong> a España desde el extranjero en caso de accidente o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Ambulancia</strong>. Transporte en ambulancia por accidente ocurrido dentro de España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos de urgencia en el extranjero</strong>. Preventiva Decesos cubre hasta 12.000€ para gastos médicos en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong>. Cubre los gastos de estancia en hotel por convalecencia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> al extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Envío de especialista</strong> médico al extranjero para atender al asegurado, en caso de urgencia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Anticipo de fianzas</strong> en el extranjero, tanto para hospitalización como para hacer frente a procedimiento judicial.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Regreso anticipado</strong>. Pago de billete de vuelta a España por fallecimiento de familiar o cónyuge .</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Servicio de información</strong> sobre pasaportes, visados, vacunas, aduanas...</th> 
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
      <th scope="row"><strong>Responsabilidad Civil Familiar:</strong> En caso de que recibas una reclamación de un tercero por un daño o perjuicio causado involuntariamente, Preventiva VIVO asume la responsabilidad civil extracontractual y la defensa jurídica del asegurado con los límites determinados.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Borrado Vida Digital:</strong> Si la familia así lo desea, Preventiva se encargará de borrar todos los datos personales del asegurado fallecido de internet.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Testamento Abierto Notarial y Vital:</strong> Te proporcionamos asistencia para elaborar y otorgar tu testamento ante notario de forma telefónica o via web.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Legado Genético:</strong> Conservación y ADN, criogenización y almecenamiento para prevenir patologías, enfermedades hereditarias o resolver temas de parentesco.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a vida diaria:</strong> Ayuda en las tareas del hogar o actividades diarias tras el fallecimiento del asegurado. Cuidado hijos menores o discapacitados, cuidado animales...</th>
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
<!----------------------COBERTURAS OPCIONALES------------------->
<div class="container about py-5">
	<h2 class="pb-2 azul titulo-especial">Además, podrás personalizar tu póliza de decesos Preventiva con garantías adicionales</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-6 icon-boxes py-5">
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-user-md"></i>
				</div>
				<h4 class="title">Asistencia Médica</h4>
				<p class="description text-muted">
					 Descuento en servicios médicos y de bienestar, así como servicio 24 horas de orientación médica.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-tooth"></i>
				</div>
				<h4 class="title">Asistencia Dental</h4>
				<p class="description text-muted">
					  Acceso a más de 1.900 clínicas, 14.000 tratamientos dentales con descuento, más de 50 servicios sin coste y un plan de salud bucal infantil gratuito.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-money-bill-1-wave"></i>
				</div>
				<h4 class="title">Protección de Pagos</h4>
				<p class="description text-muted">
					 En caso de desempleo, hospitalización por accidente o incapacidad temporal, Preventiva te exime de los pagos de las cuotas del seguro durante 12 meses.
				</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/preventiva/coberturas-opcionales-preventiva.webp" type="image/webp">
  <source srcset="images/preventiva/coberturas-opcionales-preventiva.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/preventiva/coberturas-opcionales-preventiva.jpg" alt="preventiva seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>	
	</div>
</div>

<!----------------------FIN COBERTURAS OPCIONALES------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Preventiva</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Preventiva Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Preventiva Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Hasta los 70 años de edad.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Tengo que cumplimentar cuestionario de salud para contratar el Seguro de Decesos Preventiva?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos Preventiva.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi póliza de decesos con Preventiva?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Podrá asegurar en la misma póliza todos los asegurados que considere oportuno.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Cuál será el capital asegurado con Preventiva?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Preventiva automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Existe alguna carencia en Preventiva Seguros?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Esta garantía no será de aplicación hasta que hayan transcurrido veinte días desde la entrada en vigor del seguro, salvo que el fallecimiento del asegurado fuese a causa de un accidente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Cómo se llama el Seguro de Decesos de Preventiva Seguros?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos de Preventiva Seguros se llama Preventiva VIVO. Un seguro completo con todas las prestaciones necesarias para el sepelio y con amplios servicios extra como testamento vital, asistencia psicológica, asistencia jurídica, borrado digital...</p>
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