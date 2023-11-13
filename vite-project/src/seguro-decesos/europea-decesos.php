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

	$head_title = 'Asociación Europea Seguro de Decesos ▷ Precios y Coberturas';
	$head_descripcion = 'Consulta toda la información sobre Asociación Europea Decesos - Precios, Coberturas, Opiniones - Compara precios y coberturas de más de 20 aseguradoras en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>


<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-europea.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Asociación Europea</h2><hr>
	<p class="text-center titulo-descripcion">Europea de Seguros te ofrece un seguro completo e innovador.</p>
	
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/europea/seguro-decesos-europea.webp" type="image/webp">
  <source srcset="images/europea/seguro-decesos-europea.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/europea/seguro-decesos-europea.png" alt="Seguro Europea Decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Seguro de decesos completo</h3>
				<p class="description text-muted">
					 Asociación Europea asumirá todos los gastos derivados del fallecimiento, además de incluir la mayor cobertura jurídica y administrativa para solucionar todos los trámites posteriores.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Servicio integral de sepelio</h3>
				<p class="description text-muted">
					 Se basa en la prestación del servicio de entierro o incineración, con los correspondientes complementos, tanatorio, flores, coches de acompañamiento, nicho, lápida, certificado de defunción…. que lo realizan empresas funerarias.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Amplias coberturas</h3>
				<p class="description text-muted">
					 También ofrece coberturas como: traslado del asegurado fallecido, asistencia en viaje cubriendo los gastos médicos, asistencia y defensa jurídica, entre otros.

				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos Europea Seguros</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-skull-crossbones"></i>
  <div class="card-body">
    <h3 class="card-title azul">Entierro o Incineración</h3><hr class="line">
    <p class="card-text">Con una sóla llamada Asociación Europea se hará cargo de todos los gastos y trámites necesarios para la prestación del servicio funerario.
</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia en Viaje</h3><hr class="line">
    <p class="card-text">Podrás viajar con total tranquilidad a cualquier parte del mundo, Asociación Europea se hace cargo de la asistencia y los gastos médicos.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plus"></i>
  <div class="card-body">
    <h3 class="card-title azul">Eurosalud Plus</h3><hr class="line">
    <p class="card-text">Podrás acceder a multitud de servicios de medicina privada y servicios odontológicos a precios especiales.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->



<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece el seguro Europea Decesos?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong> completo hasta los límites que se expongan en la póliza, aquí se incluyen todos los gastos del sepelio (arca, coche fúnebre, flores, sala tanatorio...).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. El asegurado o su familia podrán elegir el lugar donde quieren que se lleve a cabo el entierro.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Nicho o sepultura</strong> a perpetuidad o en alquiler.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
       	<tr>
      <th scope="row"><strong>Lápida</strong> personalizada a elección de la familia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos</strong> no asegurados si ocurriese durante el periodo de gestación o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de gestoría y jurídico</strong> Tratamición y obetención de: Certificado de defunción, pensiones de viudedad y orfandad, certificado convivencia, partida defunción, actualización del libro de familia, declaración de fallecimiento, últimas voluntades, copia compulsada del testamento.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong> desde cualquier punto de España hasta el lugar elegido para el entierro o incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong> a España para viajes al extranjero no superiores a 150 días.</th>
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
        <i class="fa-solid fa-car"></i>ASISTENCIA EN VIAJE EN ESPAÑA
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"> Gastos médicos de urgencia por enfermedad grave o accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"> Gastos justificados de alojamiento manutención de una persona 75€ max. 10 dias. Billete por fallecimiento, accidente o enfermedad grave.</th>
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
        <i class="fa-solid fa-earth-americas"></i>ASISTENCIA EN VIAJE EN EL EXTRANJERO
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"> <strong>Garantía acompañante para repatriación</strong> del cadáver, incluye los gastos de los billetes de ida y vuelta y los gastos de estancia y manutención 100 €/dÍa Máximo 10 días).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria</strong> en caso de accidente o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Viaje y estancia</strong> de acompañante por hospitalización del asegurado en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Pago o reembolso de gastos médicos</strong>, quirúrgicos, farmacéuticos y de hospitalización por enfermedad grave o accidente grave, con un máximo de 15.000€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong> por prescripción médica, con un máximo de 150€/día.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
    <tr>
      <th scope="row"><strong>Asistencia psicológica</strong> cuando el fallecimiento sea a consecuencia de un accidente y/o el fallecido sea menor de 18 años.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> de interés vital al extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Envío de médico especialista</strong> por accidente o enfermedad.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado por fallecimiento en España de un familiar o por siniestro en su domicilio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Consulta médica a distancia</strong>. Servicio telefónico de atención médica.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Búsqueda de equipaje</strong> extraviado durante el viaje.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Indemnización por démora del equipaje</strong> hasta 200€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
                <tr>
      <th scope="row"><strong>Adelanto para fianzas</strong> en caso de resolución judicial por accidente de circulación.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Depósito fianza para hospitalización</strong>. Europea te adelanta un capital para la hospitalización en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Información viajes al extranjero y transmisión de mensajes urgentes.</strong> </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>     
  </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <i class="fa-solid fa-circle-plus"></i>COBERTURA DE SERVICIOS MÉDICOS (EUROSALUD PLUS)
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <table class="table table-striped tabla-coberturas">
          	<tbody>
    
    <tr>
      <th scope="row"><strong>Póliza Dental:</strong> con acceso a una amplia red de odontólogos en todo el territorio español.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acceso a especialistas médicos</strong>, asistencia primaria, pruebas de diagnóstico e intervenciones quirúrgicas con descuentos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Segunda Opinión Médica</strong> por especialistas de reconocido prestigio nacional e internacional en caso de padecer una enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Videoconsulta médica</strong>. Servicio de telemedicina que incluye Europea Decesos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
  </tbody>
          </table>
      </div>
    </div>
  </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <table class="table table-striped tabla-coberturas">
          	<tbody>
    
    <tr>
      <th scope="row"><strong>Asistencia jurídica:</strong> Se incluyen los gastos judiciales, notariales, peritos, honorarios de abogados, fianzas en los siguientes temas: reclamaciones a terceros, derechos como propietario, revisión y redacción de documentos y contratos, compraventa de viviendas, sanciones administrativas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Accidentes</strong>. Indemnización por fallecimiento o invalidez provocadas por un accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Subsidio por hospitalización:</strong> Pago de una indemnziación diaria por hospitalización.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
        <tr>
      <th scope="row"><strong>Extensión de asistencia en viaje</strong>. Podrás ampliar la duración de la validez de esta cobertura de 150 a 240 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
            <tr>
      <th scope="row"><strong>Servicio de gstoría en vida</strong>. Ayuda para la gestión de trámites como: tarjeta sanitaria europea, pensión de jubilación, testamento vital, certificado matrimonio...</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
                <tr>
      <th scope="row"><strong>Videoconsulta jurídica</strong>. Podrás solicitar asistencia de abogados profesionales desde casa para asuntos jurídicos personales.</th>
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

<!-------------------------------PRODUCTOS------------------------>
<section class="bg-light productos">
<div class="container py-5">
	<h2 class="text-center azul  mt-5">Descubre los Seguros de Decesos de Europea</h2><hr>
	<div class="d-flex flex-wrap justify-content-around flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Europea Eurodecesos</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/europea/asociacion-europea-decesos.webp" type="image/webp">
  <source srcset="/images/europea/asociacion-europea-decesos.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/europea/asociacion-europea-decesos.jpg" title="Asociación Europea Decesos" alt="Asociacion Europea Decesos Opiniones"  width="375" height="187" loading="lazy">
			</picture>		
			
			
			<p class="display4 px-5 pt-5">La mayor <strong>asistencia para tu familia</strong> en los momentos más díficiles.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Las primas van creciendo hasta los <strong>70 años</strong>, a partir de este momento <strong>la prima se nivela</strong> y sólo se incrementa anualmente en función de las prestaciones.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="europea">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Europea Seguros Prima única</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/europea/seguros-prima-unica.webp" type="image/webp">
  <source srcset="/images/europea/seguros-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/europea/seguros-prima-unica.jpg" title="Seguros Prima Única" alt="Seguro Decesos Prima Única Precios"  width="375" height="187" loading="lazy">
			</picture>	
			
			<p class="display4 px-5 pt-5">Euroúnica<strong>, un seguro de decesos para los mayores de 70 años</strong>.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Paga el seguro de decesos en una única cuota, sin preocupaciones.</li>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="europea"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
	</div>
</div>
</section>

<!--------------------------------FIN PRODUCTOS--------------------------------->

<!-----------------COBERTURAS OPCIONALES------------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul titulo-especial">Y además, podrás incluir coberturas exclusivas en tu Seguro de Decesos Europea</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Asociación Europea pone a tu disposición las siguientes prestaciones:</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-falling-burst"></i>
				</div>
				<h4 class="title">Seguro de Accidentes</h4>
				<p class="description text-muted">
					Podrás contratar una indemnización de hasta 60.000€ en caso de muerte o invalidez por accidente.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hospital"></i>
				</div>
				<h4 class="title">Hospitalización y Parto</h4>
				<p class="description text-muted">
					Un subsidio diario en caso de hospitalización y una indemnización por parto.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-plane"></i>
				</div>
				<h4 class="title">Repatriación de Emigrantes y Extranjeros</h4>
				<p class="description text-muted">
					Cubrimos todos los gastos y trámites necesarios para la repatriación de los restos mortales del asegurado hasta su lugar de origen.
				</p>
			</div>
			
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/europea/coberturas-opcionales-europea.webp" type="image/webp">
  <source srcset="images/europea/coberturas-opcionales-europea.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/europea/coberturas-opcionales-europea.jpg" alt="Europea seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre Asociación Europea de Seguros de Decesos</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Asociación Europea Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Asociación Europea Decesos Protección Familiar?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es hasta los 70 años.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Tengo que cumplimentar cuestionario de salud?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos Asociación Europea.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Puedo fraccionar el pago?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Claro que sí, podrá pagar de forma mensual, trimestral, semestral o anual, la forma de pago que mejor se ajuste a sus necesidades.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Qué cubre la cobertura Eurosalud Plus?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Eurosalud Plus le proporciona acceso inmediato a medicina privada en toda España con descuentos exclusivos en todas las consultas, pruebas o intervenciones.</p>
        <p>Además incluye una póliza dental con acceso a una amplia red de dentistas con servicios gratuitos y descuentos en el resto de tratamientos.</p>
        <p>Segunda Opinión Médica nacional e internacional en caso de enfermedad grave.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Vivo en el extranjero, si fallezco fuera de España ¿Me cubre el seguro?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>En ese caso, tiene que contratar la cobertura de repatriación de emigrantes, se puede añadir en cualquier momento. El coste es de 1,50€ más al mes por persona.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        Soy extranjero, ¿si fallezco en España me llevan a mi país?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Tendría que contratar la cobertura de repatriación de extranjeros. El coste es de 1,50€ más al mes por persona.</p>
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