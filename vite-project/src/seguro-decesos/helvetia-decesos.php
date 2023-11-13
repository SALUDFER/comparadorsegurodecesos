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

	$head_title = 'Helvetia Decesos ✝ Seguro Decesos Helvetia ▷ Calcular';
	$head_descripcion = 'Consulta toda la información sobre el Seguro de Decesos Helvetia - Opiniones de sus clientes, teléfono de atención, precios y coberturas.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>

<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-helvetia.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Helvetia</h2><hr>
	<p class="text-center titulo-descripcion">
					Helvetia Decesos, a tu lado y al de tu familia en los momentos más difíciles.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">	
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/helvetia/seguro-decesos-helvetia.webp" type="image/webp">
  <source srcset="images/helvetia/seguro-decesos-helvetia.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/helvetia/seguro-decesos-helvetia.png" alt="seguro de decesos helvetia" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-roof"></i>
				</div>
				<h3 class="title">Protección para toda la familia</h3>
				<p class="description text-muted">
					Helvetia ofrece uno de los seguros de decesos más completos, con coberturas para el asegurado, su familia y para la mascota, prestaciones médicas, dentales y de bienestar.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Amplias coberturas</h3>
				<p class="description text-muted">
					 Helvetia ofrece un seguro con coberturas únicas, no solo prestaciones orientadas al fallecimiento. Incluye coberturas como una limpieza dental anual, asesoría nutricional o trámites de gestoría en vida.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-face-smile"></i>
				</div>
				<h3 class="title">Opiniones muy positivas entre sus clientes</h3>
				<p class="description text-muted">
					En el seguro de decesos de Helvetia destaca, especialmente, las grandes opiniones que hay entre sus clientes. Valoran el gran servicio al cliente que tiene y la rápidez en las gestiones. 
				</p>
			</div>			
		</div>		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Helvetia</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-hands-holding-child"></i>
  <div class="card-body">
    <h3 class="card-title azul">Niños Gratis</h3><hr class="line">
    <p class="card-text">Los niños menores de 6 años que vayan asegurados con un adulto no pagan.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-cane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Contratable hasta los 80 años</h3><hr class="line">
    <p class="card-text">El único seguro de decesos que asegura hasta los 80 años de edad.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Mundial</h3><hr class="line">
    <p class="card-text">Si falleces en cualquier lugar del mundo, Helvetia Decesos se encarga de todos los trámites y gestiones para traerte a España.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->

<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué cubre el Seguro de Decesos Helvetia?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Se incluye el servicio de sepelio completo con arca, coche fúnebre, capilla, coronas, esquelas, sepultura, nicho, lápida...</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Posibilidad de elegir cualquier cementerio en España para el entierro.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong>. Helvetia Decesos cubre los gastos del traslado funerario y de la sala tanatorio para el evento.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro de decesos para hijos no asegurados </strong>. Cubre los gastos del fallecimiento de hijo si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites de Gestoría</strong> y adquisición de todos los documentos necesarios (certificado de defunción, pension de viudedad, orfandad, jubilación o incapacidad e invalidez....).</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Traslado del cuerpo hasta el lugar lugar elegido por la familia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong> para viajes al extranjero no superiores a 90 días.</th>
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
      <th scope="row"><strong>Regreso anticipado</strong> del asegurado por defunción de un familiar de primer grado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> de los acompañantes asegurados por fallecimiento de asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acompañamiento de menores</strong> en caso de fallecimiento en otro país.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado sanitario</strong> del asegurado por enfermedad o accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos y odontológicos</strong> de urgencia por enfermedad o accidente (Hasta 6.000€, 180€ para gastos dentales).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Prolongación de estancia</strong> en hotel del asegurado por enfermedad o accidente (90€ por día, máximo 10 días).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> de los asegurados por enfermedad o accidente del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de medicamentos vitales</strong> hasta el lugar donde resida el asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Envío de objetos olvidados</strong> al lugar de residencia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de una persona</strong> para acompañar al asegurado hospitalizado (Gastos de ida y vuelta).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos de alojamiento y manutención del familiar</strong> o acompañante (Hasta 90€/día máximo 10 días).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Acompañamiento de menor</strong> en caso de enfermedad o accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Localización de equipaje extraviado.</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Servicio de intérprete</strong> por enfermedad o accidente en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
                <tr>
      <th scope="row"><strong>Anticipo de efectivo</strong> por enfermedad, accidente o robo en el extranjero.</th>
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
      <th scope="row"><strong> Asistencia Psicológica:</strong> Servicio de orientación psicológica al duelo para los familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia legal:</strong> Para trámites relacionados con el fallecimiento.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong> Servicio de asistencia jurídica y gestoría:</strong> </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de Orientación Médica</strong> por videollamada, incluyendo consultas de medicina general, pediatría y psicología.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro dental y Servicios médicos:</strong> Con cuadro médico a precios preferentes.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Limpieza dental:</strong> Con Helvetia Decesos tendrás derecho a una limpieza bucal anual.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>2ª opinión médica internacional</strong> con especialistas reconocidos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gestión fin vida digital:</strong> Helvetia elimina toda la información del fallecido que pueda haber en internet.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Testamento Online:</strong> Podrás realizar tu testamento desde casa, con asesoramiento de un abogado en derecho succesorio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Orientación dietética y nutricional</strong> con especialista por teléfono.</th>
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
	<h2 class="pb-2 text-center azul titulo-especial">Y además, Helvetia te ofrece las siguientes coberturas opcionales:</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Porque Helvetia quiere ofrecerte algo más que un seguro de decesos</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-suitcase-rolling"></i>
				</div>
				<h4 class="title">Asistencia en viaje premium</h4>
				<p class="description text-muted">
					Helvetia te ofrece ampliar la cobertura de asistencia en viaje de 6 a 12 meses.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-falling-burst"></i>
				</div>
				<h4 class="title">Accidentes</h4>
				<p class="description text-muted">
					Helvetia Decesos te ofrece una indemnización en caso de fallecimiento o invalidez a causa de un accidente.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hospital"></i>
				</div>
				<h4 class="title">Indemnización por hospitalización</h4>
				<p class="description text-muted">
					Helvetia te ofrece el pago de un subsidio diario por hospitalización.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h4 class="title">Repatriación</h4>
				<p class="description text-muted">
					Servicio de repatriación para funeraria para extranjeros residentes en España y para españoles expatriados.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-paw"></i>
				</div>
				<h4 class="title">Asistencia a mascotas</h4>
				<p class="description text-muted">
					Un servicio que incluye el acceso a red de veterinarios a precios especiales, descuento en residencia y cuidadores o los gastos de incineración del animal.
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/helvetia/coberturas-opcionales-helvetia.webp" type="image/webp">
  <source srcset="images/helvetia/coberturas-opcionales-helvetia.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/helvetia/coberturas-opcionales-helvetia.jpg" alt="helvetia seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-------------------------------PRODUCTOS------------------------>
<section class="bg-light productos">
<div class="container py-5">
	<h2 class="text-center azul">Descubre los Seguros de Decesos de Helvetia</h2><hr>
	<div class="d-flex flex-wrap justify-content-between flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Plan Asistencia Familiar Helvetia</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/helvetia/helvetia-plan-asistencia-familiar.webp" type="image/webp">
  <source srcset="/images/helvetia/helvetia-plan-asistencia-familiar.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/helvetia/helvetia-plan-asistencia-familiar.jpg" title="Helvetia Asistencia Familiar" alt="Seguros Helvetia Decesos Opiniones"  width="375" height="187" loading="lazy">
			</picture>	
			<p class="display4 px-5 pt-5">El seguro de decesos de Helvetia, perfecto para toda la familia</p>
			<ul class="px-5 py-4">
								<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Las primas van creciendo hasta los <strong>70 años</strong>, a partir de este momento <strong>la prima se nivela</strong> y sólo se incrementa anualmente en función de las prestaciones.</li>
			</ul>
			
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="helvetia"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Helvetia Decesos Prima Nivelada</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/helvetia/helvetia-prima-nivelada.webp" type="image/webp">
  <source srcset="/images/helvetia/helvetia-prima-nivelada.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/helvetia/helvetia-prima-nivelada.jpg" title="Prima Nivelada Decesos" alt="Helvetia Decesos Prima Nivelada"  width="375" height="187" loading="lazy">
			</picture>	
			<p class="display4 px-5 pt-5">Con esta modalidad <strong> se mantiene constante la prima</strong> sin importar tu edad.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Tendrás un<strong>precio estable</strong> durante toda la vida de la póliza.</li>
				</ul><a class="saber_mas text-center" href="/seguro-decesos/helvetia-decesos/prima-nivelada" title="Helvetia Prima única"><i aria-hidden="true" class="fa fa-caret-right"></i> Saber más</a>
			
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="helvetia">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Prima Única Helvetia</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/helvetia/helvetia-seguro-prima-unica.webp" type="image/webp">
  <source srcset="/images/helvetia/helvetia-seguro-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/helvetia/helvetia-seguro-prima-unica.jpg" title="Seguro Decesos Prima Única Helvetia" alt="Prima Unica"  width="375" height="187" loading="lazy">
			</picture>	
			<p class="display4 px-5 pt-5">Seguro de decesos<strong> dirigido a personas mayores de 70 años</strong> que aún no tienen contratado un seguro de decesos.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> El pago de la prima se realiza en un sólo pago, se paga el entierro de forma anticipada.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="helvetia"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
	</div>
</div>
</section>

<!--------------------------------FIN PRODUCTOS--------------------------------->



<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Helvetia</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Helvetia Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Helvetia Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Lo puede contratar cualquier persona hasta los 80 años de edad.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos de Helvetia.</p>
      </div>
    </div>
  </div>
  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Cuántas personas puedo asegurar en mi póliza de decesos?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Todas las que sean necesarias.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Cuál será el capital asegurado?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Helvetia automáticamente.</p>
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