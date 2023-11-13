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

	$head_title = 'Asisa Decesos ✝ Precios y Coberturas del Seguro de Decesos Asisa';
	$head_descripcion = 'Seguro de Decesos Asisa ¿Qué coberturas ofrece? ¿Cuánto vale? Toda la información aquí ▷ Consulta opiniones, teléfono o condiciones generales de Asia';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-asisa.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Asisa</h2><hr>
	<p class="text-center titulo-descripcion">
		El seguro decesos Asisa se encargará de asumir todos los gastos asociados al fallecimiento del asegurado, así como, traslado nacional e internacional y los trámites y gestiones legales y burocráticos.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">	
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/asisa/seguro-decesos-asisa.webp" type="image/webp">
  <source srcset="images/asisa/seguro-decesos-asisa.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/asisa/seguro-decesos-asisa.png" alt="decesos asisa" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Asisa decesos ofrece un seguro único</h3>
				<p class="description text-muted">
					Asisa sabe lo dura que es la pérdida de un familiar y por ello te ofrecen todo su apoyo y ayuda tras el fallecimiento, por eso la familia del asegurado no tendrá que afrontar los gastos asociados al funeral.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart"></i>
				</div>
				<h3 class="title">Las Mejores coberturas con Asisa Decesos</h3>
				<p class="description text-muted">
					Asisa ofrece asistencia en viajes al extranjero y a España, asistencia legal por fallecimiento, asistencia jurídica, además de ofrecerte un teléfono de atención 24 horas para todas las consultas sobre el seguro, coberturas, precios, sucesiones... 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h3 class="title">Asistencia en viaje</h3>
				<p class="description text-muted">
					Asisa incluye una de las coberturas de asistencia en viaje más completas del mercado. Tendrás incluidos los gastos médicos, farmacéuticos, odontológicos en el extranjero, gastos de estancia y traslado de un acompañante o el adelanto de fondos par fianzas.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!------------------------VENTAJAS----------------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Asisa</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-laptop-medical"></i>
  <div class="card-body">
    <h3 class="card-title azul">Chat médico incluido por 1 año</h3><hr class="line">
    <p class="card-text">Con el Chat Médico Asisa podrás contactar de forma directa con profesionales de Medicina General cuando y donde quieras, respuesta en menos de 4 minutos las 24 horas del día.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-earth-americas"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Mundial</h3><hr class="line">
    <p class="card-text">Si falleces en cualquier lugar del mundo, Asisa Decesos se encarga de todos los trámites y gestiones para traerte a España.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-user-doctor"></i>
  <div class="card-body">
    <h3 class="card-title azul">Doctor Virtual</h3><hr class="line">
    <p class="card-text">Un servicio de consultas médicas totalmente gratuito para aclarar pequeñas dudas relacionadas con la salud.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>
<!------------------------FIN VENTAJAS----------------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el seguro Asisa Decesos?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Asisa Decesos te ofrece una asistencia funeraria completa, tanto si eliges inhumación como si eliges incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Los familiares del fallecido podrán elegir libremente el cementerio o planta incineradora en España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong> </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos</strong>  no asegurados si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia legal</strong>. Para cuestiones relacionadas con el fallecimiento: sucesiones y pensiones de viudedad y/u orfandad y asistencia jurídica de índole personal.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Unidad de enterramiento en mínima temporalidad</strong> con lápida e inscripción o derechos de inhumación si el enterramiento se efectúa en una propiedad familiar.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Asisa cubre los gastos y gestiones para el transporte del fallecido hasta el cementerio o crematorio en España que hayan elegido los familiares</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong> para viajes al extranjero no superiores a 90 días</th>
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
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong>. Asisa cubre los gastos del traslado del cuerpo hasta el cementerio elegido por los familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acompañamiento de hijos menores</strong> en caso de fallecimiento, enfermedad o accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento y gastos de estancia para acompañante</strong> para viajar con los restos mortales del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado sanitario</strong> hasta España del asegurado por enfermedad o accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos y dentales</strong> de urgencia por enfermedad o accidente (Hasta 15.000€, Máx. 500 dental).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prolongación de estancia</strong> en hotel del asegurado por enfermedad o accidente (150€ diarios. Máx. 10 días).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de medicamentos vitales</strong> al lugar donde esté alojado el asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Envío de médico especialista</strong> para atender al asegurado en el país donde se encuentre.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Consulta médica a distancia</strong> cuando fuera imposible ser atendido en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
                <tr>
      <th scope="row"><strong>Servicio de intérprete</strong> para recibir atención médica en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de una persona</strong> para acompañar al asegurado hospitalizado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos de alojamiento y manutención</strong> del familiar o acompañante (150€ diarios. Máx. 10 días) por hospitalización del asegurado en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Defensa jurídica</strong> automovilística en el extranjero, como consecuencia de accidente de circulación (Máx. 7.500€).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Adelanto de fianzas</strong> penales en el extranjero, como consecuencia de accidente de circulación (Costas hasta 902€, fianza penal hasta 15.000€).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado a España por fallecimiento de cónyuge o familiar o por siniestro grave en el domicilio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Equipajes</strong> Asisa te ayuda en la búsqueda de tu equipaje por demora o pérdida, y si tarda más de 24 horas, te abona hasta 1.200€ como compensación.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Anulación de viaje</strong>. Asisa te indemniza con hasta 600€ en caso de anulación del viaje por hospitalización.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de documentos y objetos</strong> personales olvidados hasta tu localización en el extranjero.</th>
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
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS OPCIONALES
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Cobertura de Expatriación:</strong> Para Españoles residentes en el extranjero, traslado internacional de los restos mortales hasta el lugar del entierro en España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Consejo Legal:</strong> Consultas con especialistas jurídicos cualquier tema legal y una consulta gratis presencial en el despacho(de los despachos colaboradores de Asisa) más cercano a tu casa.</th>
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
	<h2 class="pb-2 text-center azul titulo-especial">Y además, sólo por ser asegurado de Asisa tendrás acceso exclusivo al Club Asisa</h2><hr>
	<div class="row px-2 px-md-5  align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Asisa te ofrece descuentos exclusivos en servicios de bienestar, ocio, alimentación.</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart-pulse"></i>
				</div>
				<h4 class="title">Servicios de Bienestar</h4>
				<p class="description text-muted">
					Red de centros y servicios a precios concertados: reproducción asistida, cirugía ocular refractiva con láser, audiología, estética y nutrición, conservación de células madre, vacunación internacional...
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-apple-whole"></i>
				</div>
				<h4 class="title">Salud y Belleza</h4>
				<p class="description text-muted">
					Ofertas especiales en parafarmacia, fisioterapia y pilates y mucho más.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-breastfeeding"></i>
				</div>
				<h4 class="title">Familia y Bebé</h4>
				<p class="description text-muted">
					Podrás encontrar ofertas en artículos para el cuidado en el embarazo, desarrollo del bebe, juguetes, guarderías y colegios, Campamentos y actividades, moda niños, conciliación familiar y más.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-futbol"></i>
				</div>
				<h4 class="title">Deportes</h4>
				<p class="description text-muted">
					Ofertas preferenciales en Gimnasios, actividades deportivas, ropa y accesorios, nutrición deportiva y más.
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/asisa/coberturas-opcionales-asisa.webp" type="image/webp">
  <source srcset="/images/asisa/coberturas-opcionales-asisa.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/asisa/coberturas-opcionales-asisa.jpg" alt="seguro decesos la caixa" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Asisa</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Asisa Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Asisa Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es de 70 años</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Con el Seguro de Decesos Asisa tengo cobertura en el extranjero?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, este seguro te ofrece cobertura más allá de nuestras fronteras, mientras la estancia no sea superior a 90 días. Te dará cobertura ante enfermedades o accidentes.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Puedo elegir tanatorio y cementerio?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, con el seguro de decesos Asisa podrás elegir el tanatorio, cementerio o crematorio que quieras dentro del territorio nacional.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Si fallezco en el extranjero tengo cobertura?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, estaría cubierto en cualquier lugar del mundo.</p>
        <p>En caso de permanecer o residir fuera de España durante más de 90 días tendría que contratar la cobertura de residencia en el extranjero por 38,92€ por asegurado y año.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué cubre el Seguro de los Muertos?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Es como se conoce de forma coloquial al seguro de decesos. Un seguro destinado a cubrir los servicios y gestiones funerarias, todo lo relacionado con el sepelio y el entierro. Flores, traslado, entierro, incineración, coche fúnebre, tanatorio, elegir nicho, lugar para ser enterrado...</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Con Asisa Decesos estoy cubierto fuera de España?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, esta póliza cubre cualquier accidente fuera de España, hasta un límite gasto hospitalario de 15.000€.</p>
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