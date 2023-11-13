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

	$head_title = 'Seguro de Decesos AXA ▷ Calcular Precios y Coberturas';
	$head_descripcion = 'Consulta las coberturas del Seguro de Decesos de Axa ➞  Compara AXA Decesos con otras 20 aseguradoras y consigue el mejor precio ➞  Teléfono, opiniones y precios de AXA';
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
	include ('../modulos/banner-axa.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos AXA</h2><hr>
	<p class="text-center titulo-descripcion">AXA te ofrece un seguro de decesos con todo lo necesario para que tú y tu familia estéis tranquilos.</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/axa/seguro-decesos-axa.webp" type="image/webp">
  <source srcset="images/axa/seguro-decesos-axa.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/axa/seguro-decesos-axa.png" alt="decesos axa" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-thumbs-up"></i>
				</div>
				<h3 class="title">Un seguro con grandes opiniones</h3>
				<p class="description text-muted">
					Sus asegurados siempre nos dicen lo mismo, que AXA ofrece un seguro con el que despreocuparse. Porque se encarga de todos los gastos asociados al sepelio, la preparación del funeral, el traslado del fallecido y acompañantes, todas las gestiones jurídicas y administrativas, la herencia y sucesión.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Incineración o entierro</h3>
				<p class="description text-muted">
					Podrás elegir, sin coste, la opción que prefieras. Inhumación en nicho o sepultura propio o en nicho concedido con la mínima temporal o incineración y urna.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-church"></i>
				</div>
				<h3 class="title">Traslado a cualquier cementerio</h3>
				<p class="description text-muted">
					Podrás elegir el cementerio de España que prefieras para el entierro. 
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Las ventajas más destacadas de AXA Decesos</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
 <i class="fa-solid fa-hands-holding-child"></i>
  <div class="card-body">
    <h3 class="card-title azul">Menores de 4 años Gratis</h3><hr class="line">
    <p class="card-text">Con el seguro de decesos AXA los niños menores de 4 años no pagan.
</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Repatriación de Extranjeros</h3><hr class="line">
    <p class="card-text">Incluida la cobertura de repatriación a tu país de origen sin coste adicional.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-tags"></i>
  <div class="card-body">
    <h3 class="card-title azul">Precio especial para mayores de 90 años</h3><hr class="line">
    <p class="card-text">Supresión de prima para los mayores de 90 años que lleven más de 30 años asegurados con AXA.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué coberturas nos ofrece el Seguro de Decesos AXA?</h2>
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
      <th scope="row"><strong>Prestación del servicio funerario completo</strong> con enterramiento o incineración. Incluye arca, coche fúnebre, corona de flores, coche, recordatorios, ceremonia, pago de impuestos y tasas, velatorio, acondicionamiento, nicho o urna.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong> dentro de España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de gestoria</strong>. AXA cubre todos los gastos y tratamición de todos los documentos necesarios (certificado de defunción, matrimonio, nacimiento, incapacidad e invalidez....)y de solicitar las pensiones posibles(viudedad, orfandad, jubilación)</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>, se cubre el traslado del fallecido a cualquier parte de España hasta el cementerio elegido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong> para viajes al extranjero no superiores a 60 días.</th>
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
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong> hasta el cementerio que hayan elegido el asegurado o sus familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado o repatriación sanitaria</strong> por enfermedad o accidente	</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria urgente</strong> por enfermedad o accidente en el extranjero</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos y farmacéuticos en el extranjero</strong>. Tendrás hasta 15.000€ para gastos médicos y farmacéuticos urgentes en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de un familiar</strong> junto al titular hospitalizado, si hubiera viajado solo al extranjero y si está hospitalizado más de 5 día</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong>nternacional por orden médica (hasta 60 €/día y máximo 300 €)</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a menores</strong>, en caso de enfermedad o accidente del asegurado se pagarán los gastos de regreso a España del menor y un acompañante</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado a España en caso de fallecimiento de un familiar</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> si no pueden obtenerse en el país donde se encuentre el enfermo o herido</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Consulta médica a distancia</strong></th>
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
      <th scope="row"><strong>Repatriación Extranjeros:</strong> Repatriación al país de origen de residentes extranjeros sin coste adicional.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia psicológica presencial:</strong> 3 sesiones presenciales y teléfono permanente 24 h/365 días para consultas telefónicas de psicología derivadas de la defunción.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asesoramiento jurídico familiar:</strong>Para solicitar consejo legal para temas familiares, de vivienda, de extranjería, penales, de consumo, etc.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Testamento Online Gratis:</strong> Contarás, además, con asesoramiento de un abogado especializado para la redacción del testamento.</th>
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
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos AXA</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con AXA Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar un seguro de decesos de AXA?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Se puede contratar desde los 0 años hasta los 70 años.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos AXA.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi Póliza Decesos?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Podrá asegurar en la misma póliza todos los asegurados que desee.</p>
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
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza AXA automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Soy Extranjero ¿Si fallezco me llevan a mi país?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, AXA Decesos incluye sin ningún coste adicional la garantía de repatriación para extranjeros, por lo que, si fallece, repatriaremos sus restos mortales a su país acompañado de un familiar.</p>
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
</html>