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

	$head_title = 'Adeslas Decesos ✝ Seguros Decesos Adeslas ▷ Precios y Coberturas';
	$head_descripcion = 'Segurcaixa Adeslas Decesos ▷ Compara precios y coberturas con más de 20 aseguradoras ▷ Teléfono, precios, opiniones Adeslas Decesos.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>




<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-adeslas.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos SegurCaixa</h2><hr>
	<p class="text-center titulo-descripcion">
					Adeslas Todo Previsto te ofrece toda la ayuda que necesitas para garantizar los gastos y trámites necesarios ante el fallecimiento de un ser querido.

	</p>
	<div class="row px-2 px-md-5  align-items-center">
		<div class="col-lg-5 text-center">	
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/adeslas/segurcaixa-decesos.webp" type="image/webp">
  <source srcset="images/adeslas/segurcaixa-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/adeslas/segurcaixa-decesos.png" alt="seguro decesos la caixa" width="386" height="375" loading="lazy">
			</picture>		
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Con Segurcaixa cuentas con la garantía de una gran compañía líder en el sector</h3>
				<p class="description text-muted">
					Si bien es una compañía “recién entrada” en el mercado de los seguros de decesos, pero no por eso menos fiable.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart"></i>
				</div>
				<h3 class="title">Ofrece un seguro completo adaptado a las necesidades de cada persona</h3>
				<p class="description text-muted">
					 Cubre los costes del servicio funerario de forma integral , además de darte la opción de añadir muchas coberturas opcionales, que lo hacen uno de los seguros más completos del mercado.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-clock"></i>
				</div>
				<h3 class="title">Atención al cliente 24 horas</h3>
				<p class="description text-muted">
					Adeslas te ofrece también un teléfono de atención al cliente 24 horas, para solucionar todas tus dudas sobre su seguro, precios, modalidades. Descubre todas las coberturas y posibilidades que ofrece este seguro
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Adeslas</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-dove"></i>
  <div class="card-body">
    <h3 class="card-title azul">Entierro o Incineración</h3><hr class="line">
    <p class="card-text">Segurcaixa Adeslas Decesos se encarga de gestionar todo lo relacionado con el entierro o incineración para que no tengas que preocuparte por nada.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-percent"></i>
  <div class="card-body">
    <h3 class="card-title azul">Descuentos Adicionales</h3><hr class="line">
    <p class="card-text">Descuento de un 10% para pólizas con 3 o más asegurados y descuentos por forma de pago trimestral, semestral o anual.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-regular fa-folder-open"></i>
  <div class="card-body">
    <h3 class="card-title azul">Gestoría y Trámites</h3><hr class="line">
    <p class="card-text">El seguro de decesos Adeslas se encarga de la obtención de documentos para la tramitación ante el organismo que corresponda como certificados y pensiones.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el seguro Segurcaixa Adeslas Decesos?</h2><hr>
	<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa-solid fa-dove"></i> COBERTURAS DE ENTIERRO O INCINERACIÓN
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Se incluyen todos los gastos de un servicio de sepelio completo (lápida, coche fúnebre, flores, sala tanatorio, arca...)</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Nicho temporal</strong> por el tiempo estipulado por las normativas municipales</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row">Cubre el <strong>servicio funerario de los hijos</strong> no asegurados, si fallecen durante el periodo de gestacion, en caso de aborto, o antes de cumplir los 30 días</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"> <strong>Trámites de Gestoría</strong> y adquisición de todos los documentos necesarios (certificado de defunción, pensión de viudedad, orfandad, jubilación o incapacidad e invalidez....)</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>, se cubre el traslado del fallecido desde cualquier parte de España hasta el cementerio elegido por la familia</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong> para viajes al extranjero no superiores a 60 días</th>
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
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong>, el seguro de Decesos de Adeslas te ofrece un servicio de repatriación a España del fallecido</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Acompañante restos mortales</strong>. Pago del transporte para una persona designada que acompañe el cuerpo</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a los hijos</strong> menores de 15 años o discapacitados por hospitalización del asegurado</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria urgente</strong> hasta España por enfermedad o accidente grave sucedido en el extranjero</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos y farmacéuticos</strong> por emergencias en el extranjero, con un límite de 3.000€</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong> en el extranjero por convalecencia, hasta 1.000€</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de acompañante</strong>. Pago de transporte y estancia (hasta 1.000€) para acompañar al asegurado hospitalizado</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado por fallecimiento de cónyuge o familiar. </th>
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
      <th scope="row"><strong>Asesoramiento médico telefónico:</strong> Segurcaixa Adelas Decesos pone a tu disposición un teléfono de atención al cliente 24 horas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Segunda Opinión Médica:</strong> en caso de enfermedad grave</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asesoramiento jurídico familiar:</strong> asistencia jurídica telefónica para solicitar consejo legal para temas familiares, de vivienda, de extranjería, penales, de consumo, etc	</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia psicológica:</strong> cuando el fallecimiento sea a consecuencia de un accidente y/o el fallecido sea menor de 18 años	</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Pack de apoyo:</strong> orientación psicológica, gestión de duelo y asesoramiento en nutrición</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro de muerte:</strong> Adeslas proporciona una indemnización a los beneficiarios en caso de fallecimiento del asegurado en un accidente.</th>
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
	<h2 class="pb-2 text-center azul titulo-especial">Y además, podrás incluir coberturas exclusivas en tu Seguro de Decesos Adeslas</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Porque Adeslas quiere ofrecerte algo más que un seguro de decesos</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dna"></i>
				</div>
				<h4 class="title">Pack de ADN</h4>
				<p class="description text-muted">
					Extracción, cuantificación y purificación de ADN post morten, asi como mantenimiento en el banco de ADN durante 10 años.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-graduation-cap"></i>
				</div>
				<h4 class="title">Pack de Estudios</h4>
				<p class="description text-muted">
					Indemización de 6.000€ para becas de estudio para los hijos del tomador menores de 18 años en caso de fallecimiento.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-laptop"></i>
				</div>
				<h4 class="title">Pack Digital</h4>
				<p class="description text-muted">
					Gestión de huella digital y protección de la identidad del fallecido.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-plus"></i>
				</div>
				<h4 class="title">Servicio Plus</h4>
				<p class="description text-muted">
					1.000 € adicionales de capital cubierto.
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/adeslas/coberturas-opcionales-adeslas.webp" type="image/webp">
  <source srcset="/images/adeslas/coberturas-opcionales-adeslas.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/adeslas/coberturas-opcionales-adeslas.jpg" alt="seguro decesos la caixa" width="386" height="375" loading="lazy">
			</picture>	
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->

<!-------------------------------PRODUCTOS------------------------>
<section class="bg-light productos">
<div class="container py-5">
	<h2 class="text-center azul">Descubre los Seguros de Decesos de Adeslas</h2><hr>
	<div class="d-flex flex-wrap justify-content-between flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Adeslas Todo Previsto</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/adeslas/adeslas-decesos-todo-previsto.webp" type="image/webp">
  <source srcset="/images/adeslas/adeslas-decesos-todo-previsto.jpg" type="image/jpg">
  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/adeslas/adeslas-decesos-todo-previsto.jpg" title="Adeslas Decesos Todo Previsto" width="375" height="187" loading="lazy">
			</picture>				
			<p class="display4 px-5 pt-5">El Seguro de Segurcaixa Adeslas <strong>ideal para familias y personas con menos de 70 años</strong> que quieran tener todo previsto.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Las primas van creciendo hasta los <strong>70 años</strong>, a partir de este momento <strong>la prima se nivela</strong> y sólo se incrementa anualmente en función de las prestaciones.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="adeslas">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Segurcaixa Decesos Completo</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/adeslas/segurcaixa-decesos-completo.webp" type="image/webp">
  <source srcset="/images/adeslas/segurcaixa-decesos-completo.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/adeslas/segurcaixa-decesos-completo.jpg" title="Adeslas Seguro Decesos Completo" alt="Adeslas Decesos Completo" width="375" height="187" loading="lazy">
			</picture>
			
			
			<p class="display4 px-5 pt-5"><strong>Esta póliza de Adeslas</strong> es igual que el seguro Todo Previsto pero <strong>con prima nivelada</strong>.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> La prima del seguro es nivelada, por lo que, <strong>la variación anual del coste del seguro será muy pequeña</strong>.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="adeslas"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Prima Única Adeslas</strong></h3>
			<picture>
			<!--Aqui van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/adeslas/adeslas-prima-unica.webp" type="image/webp">
  <source srcset="/images/adeslas/adeslas-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/adeslas/adeslas-prima-unica.jpg" title="Adeslas Seguor Decesos Completo" alt="Seguro Decesos Prima Única Adeslas" width="375" height="187" loading="lazy">
			</picture>
			
			
			
			<p class="display4 px-5 pt-5">El Seguro Decesos Prima Única Adeslas es un seguro <strong>dirigido a personas mayores de 70 años</strong> que aún no tienen contratado un seguro de decesos.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> El pago de la prima se realiza en un sólo pago, se paga el entierro de forma anticipada.</li>
			</ul><a class="saber_mas text-center" href="/seguro-decesos/adeslas-decesos/prima-unica" title="Adeslas Decesos Prima única"><i aria-hidden="true" class="fa fa-caret-right"></i> Saber más</a>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="adeslas"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
	</div>
</div>
</section>

<!--------------------------------FIN PRODUCTOS--------------------------------->




<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Adeslas</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de contratar tu Seguro de Segurcaixa Adeslas
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar un seguro de decesos con Adeslas ?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>En segurcaixa Adeslas la edad máxima de contratación es de 70 años aunque cuando la media de edad de los asegurados de la póliza no supere los 50 años se podrá realizar la contratación de una persona de hasta 75 años.</p>
		<p>Para personas mayores de 65 años y hasta los 99 años, existe la posibilidad de contratar el <a href="/seguro-decesos/adeslas-decesos/prima-unica" title="Adeslas Prima Única">seguro de prima única Adeslas</a>.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Tengo que cumplimentar cuestionario de salud?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos Segurcaixa Adeslas.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi póliza con Segurcaixa Decesos?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>Podrá asegurar en la misma póliza hasta 15 asegurados.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Cuál será el capital asegurado?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>El capital asegurado dependerá de la localidad donde resida o quiera ser enterrado, este cálculo lo realiza Adeslas automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Tiene carencia este seguro?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>Dependerá del motivo del fallecimiento del asegurado; en general tiene 2 meses, si el fallecimiento es por suicidio es de un año y si es por accidente no habrá carencia.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Qué es SC Repatriación?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <p>Es un seguro de SegurCaixa Adeslas enfocado para las personas que viven en España y que quieren ser enterrados en su país de origen. Incluye la repatriación del cuerpo hasta donde tenga lugar el sepelio. </p>
      </div>
    </div>
  </div>
  </div>

  </div>
</div>
</section>



<!-----------------------MODULOS----------------------->
	<?php
	include ('../modulos/footer.php');
	include ('../modulos/llamada_lateral.php');
?>
</body>
</html>