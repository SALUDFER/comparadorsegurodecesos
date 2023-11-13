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

	$head_title = 'Caser Decesos ✝  Calcular Seguro de Decesos Caser ▷Teléfono y Precios';
	$head_descripcion = 'Consulta Precios y Coberturas de Caser Decesos - Comparador precios y coberturas con más de 20 aseguradoras - Consulta aquí teléfono, precios, opiniones de Caser Decesos ';
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
	include ('../modulos/banner-caser.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Caser</h2><hr>
	<p class="text-center titulo-descripcion">
					Con Caser Decesos en los momentos más delicados sólo tendrá que preocuparse de lo realmente importante.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/caser/caser-seguro-decesos.webp" type="image/webp">
  <source srcset="images/caser/caser-seguro-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/caser/caser-seguro-decesos.png" alt="decesos caser" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-3"></i>
				</div>
				<h3 class="title">3 modalidades del seguro a elegir</h3>
				<p class="description text-muted">
					Caser es de las pocas compañías de decesos que ofrece la posibilidad de contratar su seguro en 3 modalidades de prima; prima natural, nivelada o mixta.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Seguro de decesos personalizado</h3>
				<p class="description text-muted">
					Caser ofrece unos seguros modernos, que se adaptan a lo que sus clientes y familiares buscan, sin coberturas accesorias que encarecen el precio.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-face-smile-beam"></i>
				</div>
				<h3 class="title">Opiniones muy positivas entre sus clientes</h3>
				<p class="description text-muted">
					Cada vez son más las personas que nos contratan y nos piden información sobre Caser Decesos, y es que sus asegurados están muy contentos con esta póliza. En particular por la flexibilidad y la tranquilidad que ofrece.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos Caser</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-cane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Contratable hasta los 75 años</h3><hr class="line">
    <p class="card-text">Podrás contratar tu seguro de decesos hasta los 75 años, a partir de esa edad podrás contratar el seguro de prima única Caser.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-church"></i>
  <div class="card-body">
    <h3 class="card-title azul">Nicho temporal o el qué esté disponible</h3><hr class="line">
    <p class="card-text">En el caso de que no hubiera posibilidades de nicho temporal, siendo éste a perpetuidad, CASER garantiza también el nicho a perpetuidad, si no hubiera posibilidad de nicho temporal ni a perpetuidad, Caser garantiza también el coste de la sepultura disponible.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia mundial</h3><hr class="line">
    <p class="card-text">Si falleces en cualquier lugar del mundo, Caser Decesos se encarga de todos los trámites y gestiones para traerte a España.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5 padding_especial">¿Qué coberturas nos ofrece el Seguro de Decesos Caser?</h2><hr>
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
      <th scope="row"><strong>Servicio fúnebre</strong>. Servicio de sepelio completo, ya sea para entierro o incineración, con arca fúnebre, capilla, inhumación o incineración, coronas, lápida, tanatorio o nicho.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Los familiares del asegurado podrán elegir el cementerio o planta incineradora que prefieran para el entierro o incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos no asegurados</strong> Servicio de decesos de los hijos, si fallecieran durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Orientación legal</strong> sobre Impuesto Sucesiones, becas, petición de pensiones, solicitud y tramitación de certificados o altas y bajas en la Seguridad Social...</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>, se cubre el traslado del fallecido desde cualquier parte de España hasta el cementerio o planta incineradora elegido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong> funerario hasta España, para viajes al extranjero no superiores a 90 días</th>
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
      <th scope="row"><strong>Traslado en ambulancia</strong> en caso de accidente producido a mas de 30 km. del domicilio habitual.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Garantía de acompañante</strong> en asegurados fallecidos en islas Canarias, islas Baleares, Ceuta y Melilla (Valor viaje avión (ida y vuelta) y los Gastos de la estancia y manutención 90,15 €/día Máximo 601,01 €)</th>
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
      <th scope="row"><strong>Acompañante para repatriación del cadáver</strong> (Valor traslado o viaje avión (ida y vuelta),Gastos de estancia y manutención 90,15 €/día Máximo 601,01 €).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria</strong> en caso de accidentes o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>   
    <tr>
      <th scope="row"><strong>Pago o reembolso de gastos médicos</strong>, quirúrgicos, farmacéuticos y de hospitalización de urgencia, a consecuencia de enfermedad grave o accidente grave (Arreglos dentales 120,02 € Máximo 12.020 €.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
    <tr>
      <th scope="row"><strong>Prolongación estancia en hotel</strong> por accidente o enfermedad grave (90,15 € / día Máximo 601,01 €).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Envío de medicamentos</strong> de interés vital.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Envío de médico especialista</strong> al extranjero por accidente o enfermedad, cuando en el país de destino no se le pueda dar la mejor atención.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Consulta médica a distancia</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Repatriación sanitaria</strong> en caso de accidentes o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Depósito fianza para hospitalización</strong>. Cuando sea obligatorio para recibir atención médica en el extranjero (Max. 601,01€).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Anticipo fianza judicial</strong> en el extranjero por accidente de circulación (Max. 6.010,12 € por fianza, 601,01 € por gastos procesales).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Anticipo de efectivo</strong> por robo, accidente o enfermedad grave en el extranjero, con un límite de 1502,23€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Localización de equipaje</strong>. Caser te ayuda en la búsqueda de equipaje extraviado y posterior envío al domicilio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
    <tr>
      <th scope="row"><strong>Transmisión de mensajes urgentes</strong> 24 horas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Servicio de intérprete</strong> para recibir asistencia médica, con un máximo cubierto de 180€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
        <tr>
      <th scope="row"><strong>Asistencia a menores de 15 años</strong> (100 % del Valor de regreso a España con o sin acompañantes).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> a España por fallecimiento de familiar o incendio del domicilio habitual. Pago de los billetes de tren o avión.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr><th scope="row"><strong>Desplazamiento de un acompañante familiar</strong> junto al asegurado hospitalizado (Valor de viaje en avión (ida y vuelta), Gastos estancia y manutención 90,15 €/día. Máximo 601,01€).</th>
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
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <table class="table table-striped tabla-coberturas">
          	<tbody>
    
    <tr>
      <th scope="row"><strong>Borrado de la vida digital</strong>. Eliminación de toda la presencia digital del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Orientación veterinaria:</strong> Teléfono de atención para consultas y urgencias veterinarias y ayuda sobre otros temas relacionados(guarderias, adiestramiento, hoteles, cuidadores).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gestión trámites INSS</strong>. Ayuda en la gestión de trámites en el Instituto Nacional de la Seguridad Social(apertura testamento, copia del testamento, carta de pago, auxilio por defunción, baja libro de familia, declaración herederos).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asesoramiento y gestión del testamento:</strong> Asesoría jurídica en la redacción y gestión del testamento. Obtención de certificados(defunción, nacimiento, matrimonio, fe de vida, acto de últimas voluntades, contrato de seguros con cobertura de fallecimiento).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asesoría Jurídica Telefónica.</strong> Servicio integral telefónico de asistencia jurídica para temas personales como multas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asesoría Legal:</strong> Orientación y ayuda sobre: sucesiones, pensiones de viudedad y orfandad, auxilio por defunción, becas de estudio, contratos de seguro, obtención de certificados.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro de Accidentes:</strong> con cobertura para fallecimiento e invalidez abosoluta permanente para asegurados entre 18 y 70 años.</th>
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
        <i class="fa-solid fa-circle-plus"></i>COBERTURAS OPCIONALES
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <table class="table table-striped tabla-coberturas">
          	<tbody>
    
    <tr>
      <th scope="row"><strong>Descuentos en servicios</strong> médicos, dentales, belleza, estetica, viajes, ocio bienestar. Este extra tiene un coste de 16€ por póliza, independientemente del número de asegurados.</th>
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
<section class="bg-light productos">
<div class="container py-5">
	<h2 class="text-center azul mt-5">Descubre los Seguros de Decesos de Caser</h2><hr>
	<div class="d-flex flex-wrap justify-content-between flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Caser Decesos Familiar</strong></h3>		
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/caser/caser-decesos-familiar.webp" type="image/webp">
  <source srcset="/images/caser/caser-decesos-familiar.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/caser/caser-decesos-familiar.jpg" title="Caser Decesos Familiar" alt="Seguro Caser Decesos Familiar" width="375" height="187" loading="lazy">
			</picture>
			
			<p class="display4 px-5 pt-5">La prima del seguro se mantiene constante <strong>(Prima Nivelada)</strong>, independientemente de la edad.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> La prima del seguro solo se verá incrementada anualmente en función de las prestaciones, por lo que, <strong>la variación anual del coste del seguro será muy pequeña</strong>.</li>
			</ul>
			<form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="caser">
      					<input type="hidden" name="tipoSeguroInteresado" value="COMPLETO">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Caser Decesos Creciente</strong></h3>		
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/caser/caser-decesos-creciente.webp" type="image/webp">
  <source srcset="/images/caser/caser-decesos-creciente.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/caser/caser-decesos-creciente.jpg" title="Caser Decesos Creciente" alt="Caser Seguros Decesos" width="375" height="187" loading="lazy">
			</picture>
			
			<p class="display4 px-5 pt-5">La prima del seguro es creciente, lo que le permite pagar menos cuando se es más joven <strong>(Prima Natural)</strong>.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Las primas van creciendo hasta los <strong>66 años</strong>, a partir de este momento <strong>la prima se nivela</strong> y sólo se incrementa anualmente en función de las prestaciones.</li>
			</ul>
			<form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="caser">
     					<input type="hidden" name="tipoSeguroInteresado" value="COMPLETO">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Caser Decesos Prima Única</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/caser/caser-decesos-prima-unica.webp" type="image/webp">
  <source srcset="/images/caser/caser-decesos-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/caser/caser-decesos-prima-unica.jpg" title="Decesos Prima Única Caser" alt="Caser Decesos Prima Única" width="375" height="187" loading="lazy">
			</picture>
			
			<p class="display4 px-5 pt-5">Especialmente diseñado para mayores de 70 años que no tengan seguro <strong>(Prima Única)</strong>.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> El pago de la prima se realiza en un sólo pago, se paga el entierro de forma anticipada.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Este seguro está <strong>dirigido a personas mayores de 70 años o personas que padezcan una enfermedad</strong> que les impida contratar otro tipo de primas.</li>
			</ul><a class="saber_mas" href="/seguro-decesos/caser-decesos/prima-unica" title="Caser Decesos Prima única"><i class="fa fa-caret-right" aria-hidden="true"></i> Saber más</a>
			<form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="caser">
      					<input type="hidden" name="tipoSeguroInteresado" value="UNICA">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>
		</div>
	</div>
</div>
</section>
<!-----------------------FIN PRODUCTOS-------------------->







<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Caser</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Caser Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Caser Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es de 70 años.</p>
		<p>Para personas mayores de 70 años y hasta los 99 años, existe la posibilidad de contratar el <a href="/seguro-decesos/caser-decesos/prima-unica" title="Caser Prima Única">seguro de prima única Caser</a>.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos Caser.</p>
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
        <p>Podrá asegurar en la misma póliza de decesos todos los asegurados que quiera.</p>
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
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Caser automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿En qué consiste la Asesoría Jurídica Telefónica?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Es un servicio adicional donde podrás resolver todas las dudas que tengas en cuestiones de carácter legal, ya sea fiscal, laboral, administrativo o penal.</p>
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