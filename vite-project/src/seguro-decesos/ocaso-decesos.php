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

	$head_title = 'Seguro de Decesos Ocaso ✝   Precios, Coberturas y Teléfono 24 horas';
	$head_descripcion = 'Toda la información de Ocaso Decesos ➞  Opiniones de Clientes, Teléfono de atención 24 horas, Precios, COberturas y Servicios Dentales incluidos ➞ Comparador de Seguros de Decesos.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-ocaso.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Ocaso</h2><hr>
	<p class="text-center titulo-descripcion">
					Asegura tu tranquilidad con Seguros Ocaso, una de las principales compañías de decesos desde 1920.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/ocaso/seguro-de-muertos-ocaso.webp" type="image/webp">
  <source srcset="images/ocaso/seguro-de-muertos-ocaso.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/ocaso/seguro-de-muertos-ocaso.png" alt="seguro de muertos ocaso" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Experiencia y fiabilidad con Ocaso Decesos</h3>
				<p class="description text-muted">
					Ocaso es una de las compañías de decesos más longevas. Lleva ofreciendo servicios y ventajas a sus clientes más de 100 años y sigue siendo una de las aseguradoras más contratadas y con mejores opiniones entre sus asegurados.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-group"></i>
				</div>
				<h3 class="title">Un seguro de decesos para cada persona</h3>
				<p class="description text-muted">
					 Ocaso cuenta con diferentes tipos de póliza para adaptarse a las necesidades personales de cada uno, seguros para mayores, para jóvenes, para familias. Con Ocaso siempre encontrarás el seguro de decesos que buscas.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Coberturas Únicas</h3>
				<p class="description text-muted">
					Los seguros de decesos de Ocaso ofrecen coberturas que ninguna otra aseguradora tiene, como: responsabilidad civil familiar, protección digital del menor o el premio de 300€ por natalidad..
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Servicio Integral de Decesos</h4>
				<p class="description text-muted">
					Ocaso decesos se encarga de todos los gastos asociados al fallecimiento del asegurado para que no tenga que hacerlo la familia. No solo cubre los gastos del sepelio, si no que se hace cargo de toda la parte administrativa, jurídica y de herencias, aliviando la carga a los herederos del fallecido.
				</p>
			</div>			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Ocaso</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-phone-volume"></i>
  <div class="card-body">
    <h3 class="card-title azul">Teléfono 24 horas</h3><hr class="line">
    <p class="card-text">Con Ocaso tendrás siempre a tu disposición un teléfono de atención 24 horas para urgencias, dudas sobre el seguro o gestiones.
    	
    	</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">El asesoramiento legal más completo</h3><hr class="line">
    <p class="card-text">Ocaso incluye en sus seguros la cobertura legal y jurídica más amplia. Asesoramiento legal para situaciones de tu vida privada, contacto directo con abogado, elaboración y revisión de documentos legales.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-regular fa-credit-card"></i>
  <div class="card-body">
    <h3 class="card-title azul">Forma de pago a elegir</h3><hr class="line">
    <p class="card-text">Con Ocaso serás tú quien elija la modalidad de pago; Prima natural, nivelada, mixta o única.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué coberturas nos ofrece el Seguro de Decesos Ocaso?</h2>
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
      <th scope="row"><strong>Servicio de entierro o incineración.</strong> Con Ocaso están cubiertos todos los gastos funerarios (coche fúnebre, sala tanatorio, flores, recordatorios...) así como las gestiones del sepelio (trámites administrativos, jurídicos, pago de impuestos y tasas).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. El asegurado o su familia podrán elegir el cementerio o planta incineradora que quieran para el evento.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos.</strong> Ocaso cubre los gastos del sepelio de hijos menores de 30 días o no natos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Tramitación de gestiones posteriores al fallecimiento.</strong> Ocaso se encarga de tramitar las pensiones de viudedad y orfandad y de obtener el certificado de defunción, convivencia y últimas voluntades.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Traslado funerario desde cualquier punto de España hasta el cementerio elegido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong>. Traslado del cuerpo del fallecido hasta España.</th>
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
      <th scope="row"><strong>Pago de transporte para una una persona</strong> que acompañe al cuerpo hasta el cementerio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Servicio de ambulancia</strong> para traslado del asegurado en España, en caso de accidente o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Pago de transporte</strong> para acompañante hasta el lugar donde esté hospitalizado el asegurado en todo el mundo.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Asistencia a hijos menores</strong> por fallecimiento u hospitalización del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Localización de equipajes </strong> por extravío o pérdida e indemnización en caso de demora de más de 24 horas hasta 300€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Anulación y demora de viaje</strong>. Indemnización hasta 350€ por demora y 750€ por anulación de viaje.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Servicio de intérprete</strong> para traslado funerario por fallecimiento en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
            <tr>
      <th scope="row"><strong>Repatriación sanitaria</strong> por enfermedad o accidente grave sucedido en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Gastos médicos</strong> por urgencia en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
            <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> al extranjero, por imposibilidad de adquirirlos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
                <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong> por convalecencia en el extranjero, hasta 1.750€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
            <tr>
      <th scope="row"><strong>Envío de objetos olvidados</strong> al extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
                    <tr>
      <th scope="row"><strong>Asistencia a domicilio</strong> para la familia en España, si el asegurado está hospitalizado en el extranjero y su cónyuge se hubiera desplazado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
                        <tr>
      <th scope="row"><strong>Anticipo de fondos</strong> por robo en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
            <tr>
      <th scope="row"><strong>Fianzas</strong>. Pago de fianzas para hospitalización y anticipo para casos judiciales en el extranjero.</th>
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
      <th scope="row"><strong>Teleasistencia Domiciliaria:</strong> Como consecuencia de accidente y/o intervención quirúrgica que suponga una inmovilización en domicilio superior a 10 días, según prescripción facultativa.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Atención Médica Telefónica:</strong> Incluye servicios de orientación médica, atención de urgencias 24 horas y programa de vida saludable.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Descuento en otros servicios:</strong> Por ser de Ocaso obtendrás descuentos y precios especiales en otros servicios como veterinarios, balnearios, residencias de ancianos o tratamientos de estética.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Segunda opinión médica:</strong> Derecho a recibir una 2ª opinión médica de algún experto internacional en diagnósticos de enfermedad grave o degenerativa.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Servicios dentales:</strong> Ocaso incluye en su seguro de decesos: una limpieza bucal anual, extracciones, examen inicial, técnicas preventivas, tratamiento de urgencias dentales, plan de salud bucal infantil.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Indemnización por accidente:</strong> Pago de un capital por invalidez o fallecimiento en accidente, doble capital si el accidente es de circulación.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asesoramiento Jurídico:</strong> Prestación de un servicio de información y Orientación Legal extrajudicial ante las situaciones de trascendencia jurídica y administrativa generadas como consecuencia de un fallecimiento</th>
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
<!-----------------------PRODUCTOS----------------------------->
<section class="bg-light">
<div class="container py-5">
	<h2 class="text-center azul pb-5">Descubre los Seguros de Decesos de Ocaso</h2>
  <div class="row tres_ventajas shadow">
    <div class="col-md-4 text-center shadow">
      <img class="mb-5" src="/imagenes/aseguradoras/svg/logo_OCASO.svg" alt="Seguro Decesos Ocaso" width="250" height="110" loading="lazy">
     <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/ocaso/ocaso-decesos.webp" type="image/webp">
  <source srcset="/images/ocaso/ocaso-decesos.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/ocaso/ocaso-decesos.jpg" title="Seguros Ocaso Decesos" alt="Ocaso Asistencia Familiar" width="600" height="300" loading="lazy">
			</picture>
      <p class="pt-5 display4">
        Ideal para familias y personas con menos de 70 años.
      </p>
  </div>
    <div class="col-md-4 text-center d-flex flex-column justify-content-between shadow">
    <h3 class="azul text-center py-4">
      Ocaso Asistencia Familiar Integral
      </h3>
      <ul class="px-5 py-4 text-left">
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Traslado Nacional e Internacional</strong>. </li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Asistencia en Viaje</strong> en España y en el Extranjero.</li>
      <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Asesoramiento legal y abogado de familia</strong> para consultas relacionadas con la vida privada o profesional.</li>
    </ul>
              <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="ocaso"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETA"> <button class="btn btn-secondary btn-lg btn-block btn-verde mb-3" name="button">CALCULAR PRECIOS</button>
			</form>
  </div>
  <div class="col-md-4 text-center d-flex flex-column justify-content-between shadow">
      <h3 class="azul text-center py-4">
      Ocaso Oro Integral
    </h3>
    <ul class="px-5 py-4 text-left">
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Ocaso Oro Integral es igual que Ocaso Asistencia Familiar Integral</strong> pero con muchas más coberturas.</li>
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i><strong> Responsabilidad Civil, Testamento Online y Asistencia en la vida diaria</strong>.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Accidentes, viajes, abogado, asistencia médica</strong> y mucho más. </li>
  </ul>
                  <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="ocaso"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETA"> <button class="btn btn-secondary btn-lg btn-block btn-verde mb-3" name="button">CALCULAR PRECIOS</button>
			</form>
  </div>
    <div class="col-md-4 text-center mt-5 shadow">
      <img class="mb-5" src="/imagenes/aseguradoras/svg/logo_OCASO.svg" alt="Seguro Decesos Ocaso" width="250" height="110" loading="lazy">
      <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/ocaso/ocaso-senior.webp" type="image/webp">
  <source srcset="/images/ocaso/ocaso-senior.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/ocaso/ocaso-senior.jpg" title="Ocaso para mayores de 70 años" alt="Ocaso Decesos Prima Única" width="600" height="300" loading="lazy">
			</picture>
      <p class="pt-5 display4">
        Seguros de Decesos pensados <strong>exclusivamente para personas mayores de 70 años</strong>.
      </p>
  </div>
  <div class="col-md-4 text-center d-flex flex-column justify-content-between mt-5 shadow">
      <h3 class="azul text-center py-4">
      Ocaso Oro Senior
    </h3>
    <ul class="px-5 py-4 text-left">
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Exclusivo para mayores de 71 años y menores de 79 años</strong>.</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> El único seguro de decesos que <strong>combina prima nivelada con prima única</strong> pudiendo pagar en cómodas cuotas.</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Servicio de Decesos:</strong> incluye todos los trámites y gestiones necesarios para realizar la repatriación.</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Incluye servicio de acondicionamiento sanitario legal</strong> o urna de cenizas en caso de incineración.</li>
    <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Asistencia en Viaje en todo el mundo</strong>.</li>
    </ul>
             <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="ocaso"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde mb-3" name="button">CALCULAR PRECIOS</button>
			</form>
  </div>
  <div class="col-md-4 text-center d-flex flex-column justify-content-between mt-5 shadow">
      <h3 class="azul text-center py-4">
      Ocaso Asistencia Prima Única
    </h3>
    <ul class="px-5 py-4 text-left">
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Si tienes <strong>más de 70 años</strong> y todavía no tienes seguro, este seguro de decesos prima única de Ocaso es tu seguro.</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Incluye servicio de acondicionamiento sanitario legal</strong> o urna de cenizas en caso de incineración.</li>
    <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Asesoramiento legal y abogado de familia</strong> para consultas relacionadas con la vida privada o profesional.</li>
    </ul>
    <a class="saber_mas" href="/seguro-decesos/ocaso-decesos/prima-unica" title="Ocaso Decesos Prima única"><i class="fa fa-caret-right" style="font-size: 2.2rem;" aria-hidden="true"></i> Saber más</a>
            <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="ocaso"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde mb-3" name="button">CALCULAR PRECIOS</button>
			</form>
  </div>
  </div>
</div>
</section>
<!-----------------------FIN PRODUCTOS------------------------>
<!-----------------COBERTURAS OPCIONALES------------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul titulo-especial">Ocaso ofrece uno de los seguros de decesos con más prestaciones, y además te ofrece otras opcionales</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Ocaso te trae las siguientes coberturas para completar tu póliza:</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hands-holding-child"></i>
				</div>
				<h4 class="title">Protección digital del menor</h4>
				<p class="description text-muted">
					Servicio de localización móvil del menor con alerta incorporada, borrado datos digitales del menor, peritaje antibullying, asesoramiento jurídico y psicológico para el menor y reclamaciones vía penal por daños y perjucios. 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hand-holding-heart"></i>
				</div>
				<h4 class="title">Asistencia en vida diaria</h4>
				<p class="description text-muted">
					Asistencia a domicilio por inmovilización u hospitalización del asegurado. Incluye ayuda con las tareas básicas diarias (limpieza, planchar, lavar, hacer comida...), ayuda para cuidar a hijos menores, auxilio para cuidar a personas dependientes, cuidado mascotas.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hospital"></i>
				</div>
				<h4 class="title">Indemnización diaria por hospitalización</h4>
				<p class="description text-muted">
					Ocaso proporciona una cantidad de dinero diaria en caso de hospitalización del asegurado. 
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-align">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/ocaso/coberturas-opcionales-ocaso.webp" type="image/webp">
  <source srcset="images/ocaso/coberturas-opcionales-ocaso.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/ocaso/coberturas-opcionales-ocaso.jpg" alt="ocaso seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->


<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre Ocaso Seguros de Decesos</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Ocaso Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar un seguro de decesos con Ocaso ?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es hasta los 70 años.</p>
        <p>Para personas de 71 a 79 años hemos creado Ocaso Senior que combina prima nivelada y con prima única.</p>
        <p>Para los mayores de 70 años en adelante tambien se puede contratar el seguro de decesos de prima única Ocaso</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Puedo elegir entre entierro o incineraciónn con Ocaso Decesos?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, puede elegir cualquiera de las dos opciones.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Qué cubre la Póliza de Decesos de Ocaso?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Ocaso ofrece 4 pólizas de decesos diferentes, dos para mayores de 70 y dos para menores.</p>
        <p>Ocaso Asistencia Familiar Integral y Oro Integral tienen diferencias en las cantidades aseguradas y en la cobertura de RC, pero cubren asistencia, traslado nacional e internacional, asistencia en viaje, asesoramiento legal, atención médica, tratamiento dental o indemnización diaria por accidente.</p>
        <p>En sus seguros para mayores, Ocaso ofrece de igual forma asistencia familiar para el decesos, asistencia en el traslado nacional e internacional, asesoramiento jurídico o ayuda para el traslado o repatriación.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Puedo fraccionar el pago en el seguro de decesos Ocaso?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Claro que sí, podrá pagar de forma mensual, trimestral, semestral o anual, la forma de pago que mejor se ajuste a sus necesidades. (Excepto en la modalidad de prima única)</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué cubre la cobertura de Asesoramiento Legal y Abogado de Familia de Ocaso Decesos?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Esta cobertura ofrece asesoramiento telefónico de índole personal o profesional, así como, asistencia legal urgente con la que tendrás un abogado presencial en situaciones de urgencia o asesoramiento en caso de fallecimiento, entre otras coberturas.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Qué es Ocaso Oro Senior?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Un seguro de decesos de Ocaso pensado para los mayores que estén entre 71 y 79 años. El único que combina las primas única y nivelada, con asistencia médica, dental, por hospitalización y con testamento online.</p>
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