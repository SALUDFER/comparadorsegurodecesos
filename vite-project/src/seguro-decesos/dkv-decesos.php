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

	$head_title = 'DKV Decesos ✝ recios y Coberturas del Seguro de Decesos DKV';
	$head_descripcion = 'Toda la información del Seguro de Decesos de DKV ➞  Opiniones de clientes, teléfono, precios y coberturas de DKV Decesos ➞  Compara precios y coberturas con más de 20 aseguradoras➞';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-dkv.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos DKV Protección Familiar</h2><hr>
	<p class="text-center titulo-descripcion">
					DKV ofrece las mejores coberturas y servicios en seguros de decesos, para que tú y tu familia no tengáis que preocuparos por nada.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">		
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/dkv/seguro-proteccion-familiar-dkv.webp" type="image/webp">
  <source srcset="images/dkv/seguro-proteccion-familiar-dkv.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/dkv/seguro-proteccion-familiar-dkv.png" alt="dkv seguros decesos" width="386" height="375" loading="lazy">
			</picture>

		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-roof"></i>
				</div>
				<h3 class="title">DKV Protección Familiar</h3>
				<p class="description text-muted">
					DKV protección familiar es el seguro global de decesos que cuida de los tuyos sin periodos de carencia ni límites de edad, y que incluye el gasto y gestión de todos los servicios funerarios, para tu tranquilidad y la de los tuyos.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Amplias coberturas opcionales</h3>
				<p class="description text-muted">
					 DKV Decesos te da la oportunidad de incluir numerosas prestaciones opcionales para hacer tu seguro más personalizado, ofrece coberturas como indemnización por accidente, por hospitalización, chat médico 24 horas o asistencia para mascotas.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart"></i>
				</div>
				<h3 class="title">Coberturas para tus seres queridos</h3>
				<p class="description text-muted">
					 Las mayores comodidades para tus seres queridos, para que en un momento tan difícil no tengan que encargarse de los trámites y gestiones que conlleva. Además tendrán importantes descuentos en servicios de bienestar como estética, dietética o podología.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de DKV</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-children"></i>
  <div class="card-body">
    <h3 class="card-title azul">Menores de 4 años Gratis</h3><hr class="line">
    <p class="card-text">Los menores de cuatro años gratis al incluirlos en tu seguro de decesos de DKV junto con un adulto.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-fingerprint"></i>
  <div class="card-body">
    <h3 class="card-title azul">Borrado de la huella Digital</h3><hr class="line">
    <p class="card-text">DKV Decesos se encarga de la gestión final de la vida digital del asegurado, borrando sus datos de las redes sociales, correos electrónicos, etc.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Mundial</h3><hr class="line">
    <p class="card-text">Con el seguro de decesos de DKV estarás cubierto también cuando viajas al extranjero con hasta 18.000€ para gastos médicos de urgencia.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos DKV?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Servicio de sepelio completo, a elegir entre incineración o entierro. En esta cobertura se incluyen, entre otros, el coche fúnebre, las flores, el tanatorio... </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio post-mortem de atención familiar</strong> para facilitar las gestiones necesarias para la prestación del servicio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong> para el entierro o incineración del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos no asegurados</strong> si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días. Incluye los gastos de inhumación o incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gestiones para la obtención y tramitación</strong> de los documentos oficiales tras el fallecimiento (certificado de defunción, pension de viudedad, orfandad, jubilación o incapacidad e invalidez....).</th>
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
      <th scope="row"><strong>Traslado Internacional</strong> para viajes al extranjero no superiores a 90 días</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
    <tr>
      <th scope="row"><strong>Traslado del asegurado</strong> extranjero residente en España hasta el aeropuerto internacional más cercano al lugar de la inhumación, en el país de origen del asegurado. Se incluye billete de ida y vuelta de un acompañante.</th>
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
      <th scope="row"><strong>Traslado o repatriación sanitaria</strong> en caso de enfermedad o accidente ocurrido fuera de la provincia de residencia del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicosy odontológicos</strong> de urgencia en el extranjero (Límite 6000 € por asegurado).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de un familiar</strong> junto al titular hospitalizado en caso de que el asegurado viaje solo al extranjero y este hospitalizado más de 5 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acompañamiento familiar</strong> en caso de fallecimiento (Billete de ida y vuelta).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong> (60€/día Máximo 300€).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a menores</strong> en caso de enfermedad o accidente del asegurado se pagarán los gastos de regreso a España del menor, con acompañante si es necesario.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado a España en caso de fallecimiento de un familiar o por siniestro en su hogar.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> y consulta médica a distancia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Búsqueda de equipajes</strong>. Ayuda para la localización de equipaje extraviado</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Envío de documentos</strong> olvidados al extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de información</strong>, de orden administrativo o médico antes del inicio del viaje.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prestación y/o adelanto de fianzas</strong> penales exigidas al asegurado como conductor de un vehículo, para garantizar las costas procesales en un procedimiento criminal en el extranjero a consecuencia de un accidente de circulación (Límite 1.500€).</th>
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
      <th scope="row"><strong>Asesoramiento Jurídico Telefónico:</strong> para consultas relacionadas con sus derechos particulares, herencias o tramitación sucesoria.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Testamento Online:</strong> A través de un formulario, podrán dejar sus últimas voluntades en tan solo unos minutos y nuestro equipo de abogados se encargará de citarle para la firma en la notaria más cercana. Para todas aquellas dudas que les puedan surgir durante el proceso, tendrán la posibilidad de contactar con un abogado a través de un teléfono o un correo electrónico.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Atención al Duelo:</strong> Si la familia acepta el servicio presencial, un psicólogo especializado en duelo realizará hasta 3 sesiones a aquellos familiares que más las necesiten. Estas tres visitas presenciales irán a cargo de la compañía, sin ningún coste adicional para el asegurado. (Si la familia no requiere el servicio en el primer momento, la compañía volverá a contactar con ellos entre el segundo y el tercer mes después de la defunción. El servicio podrá ser utilizado hasta un año después de la defunción.)</th>
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
	<h2 class="pb-2 text-center azul titulo-especial">Y además, podrás incluir coberturas exclusivas en tu Seguro de Decesos DKV</h2><hr>
	<div class="row px-2 px-md-5  align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Indemnización por accidente</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-falling-burst"></i>
				</div>
				<h4 class="title">Cobertura de Accidentes</h4>
				<p class="description text-muted">
					Podrás contratar un seguro de accidentes con una indemnización de entre 600€ a 60.000€ ante cualquier tipo de accidente que tenga como consecuencia un fallecimiento o una invalidez.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-globe"></i>
				</div>
				<h4 class="title">Asistencia Mundial Complementaria</h4>
				<p class="description text-muted">
					Cobertura de repatriación a España por fallecimiento en el extranjero en estancias superiores a 60 días (incluye cobertura para expatriados).
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-brands fa-pagelines"></i>
				</div>
				<h4 class="title">Ecofuneral, el seguro de decesos ecológico:</h4>
				<p class="description text-muted">
					Ahora tu última huella puede contribuir con el medio ambiente con un servicio funerario ecológico, ataudes de madera certificada y sin barnices tóxicos, incineración libre de tóxicos, urnas biodegradables, tanatorios con gestión ambiental, etc.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hospital"></i>
				</div>
				<h4 class="title">Indemnización por Hospitalización</h4>
				<p class="description text-muted">
					En caso de que seas hospitalizado por cualquier causa podrás recibir una indemnización de hasta 30€ díarios por cada día que pases en el hospital..
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-paw"></i>
				</div>
				<h4 class="title">Asistencia para Mascotas</h4>
				<p class="description text-muted">
					Podrás contratar esta garantía para cubrir los gastos de sacrificio e incineración de tu mascota y además, te ofrecemos un servico de información y asesoramiento gratuito permanente paa perros y gatos..
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/dkv/coberturas-opcionales-dkv.webp" type="image/webp">
  <source srcset="images/dkv/coberturas-opcionales-dkv.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/dkv/coberturas-opcionales-dkv.jpg" alt="dkv seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos DKV</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con DKV Decesos Protección Familiar
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar DKV Protección Familiar?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sin límites en la edad de contratación.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos DKV.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi póliza con Segurcaixa Decesos?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Todas las personas que necesite asegurar.</p>
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
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza DKV automáticamente.</p>
        <p>Además puede cubrir cualquier sobrecoste inesperado contratando un capital regulador de hasta un 20% de capital adicional.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Soy Extranjero y resido en España ¿Si fallezco me repatrian a mi país?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, DKV decesos cubre la repatriación de extranjeros a tu país de origen sin ningún coste adicional. Se encargará de la repatriación del cuerpo y cubrirá el viaje de ida y vuelta de un acompañante.</p>
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