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

	$head_title = 'Sanitas Seguros Decesos ▷ Calcular Precios y Coberturas';
	$head_descripcion = 'Consulta las coberturas del Seguro de Decesos de Sanitas - Compara precios y coberturas Sanitas Decesos con más de 20 aseguradoras en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-sanitas.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Sanitas</h2><hr>
	<p class="text-center titulo-descripcion">
					Amplias coberturas con una compañía de referencia
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-6">
			<img class="img-thumbnail rounded" src="images/comparativa-seguro-decesos.jpg" alt="Comparativa seguro decesos">
		</div>
		<div class="col-lg-6 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Seguro de Decesos con gran precio</h3>
				<p class="description text-muted">
					  Sanitas te ofrece el seguro de decesos que mejor se adapta a tu familia con un presupuesto muy ajustado..
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Coberturas para todas edades</h3>
				<p class="description text-muted">
					 Sanitas ofrece un seguro para toda la familia, con coberturas que afectan a los mayores y a los pequeños de la casa.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-face-sad-tear"></i>
				</div>
				<h3 class="title">Asistencia psicológica</h3>
				<p class="description text-muted">
					Sanitas ofrece asistencia psicológica para los familiares, porque en esos duros momentos es muy importante y Sanitas quiere que dispongan de todo el apoyo de estos especialistas .
				</p>
			</div>			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Sanitas</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia jurídica integral</h3><hr class="line">
    <p class="card-text">Sanitas ofrece una amplia cobertura jurídica, con asistencia laboral, civil, familiar, personal o fiscal.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Repatriación</h3><hr class="line">
    <p class="card-text">Sanitas ofrece la posibilidad a los extranjeros residentes en España de contratar una cobertura de repatriación a su pais de origen.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-breastfeeding"></i>
  <div class="card-body">
    <h3 class="card-title azul">Servicio de guarderia</h3><hr class="line">
    <p class="card-text">Sanitas Asistencia Familiar Iplus incluye entre sus coberturas el servicio de guardería para los menores de 7 años.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Sanitas?</h2><hr>
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
      <th scope="row"><strong> Servicio de enterramiento o incineración</strong>. Cubre el servicio funerario completo. Arca, carroza fúnebre, traslado y estancia en velatorio, una corona y centro de flores, recordatorios, vehículo de acompañamiento, recordatorios, servicio religioso.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. El asegurado y/o su familia pueden el cementerio que quieran para el entierro incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Inhumación o incineración</strong>. El asegurado y/o su familia pueden elegir libremente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites de Gestoría </strong>. Tramitación y obtención de todos los documentos, certificados y pensiones posibles y necesarios (certificado de defunción, pension de viudedad, orfandad, jubilación o incapacidad e invalidez....).</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Cubre los gastos del desplazamiento hasta el cementerio elegido.</th> 
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional </strong> para viajes al extranjero no superiores a 90 días</th>
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
        <i class="fa-solid fa-hand-holding-heart"></i>ASISTENCIA A LOS FAMILIARES
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="row"><strong>Asistencia a los hijos menores de 15 años o discapacitados.</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Repatriacion sanitaria urgente</strong>. En caso de accidente o enfermedad grave, Sanitas te trae de vuelta a España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Gastos médicos en el extranjero</strong>. Con la cobertura de asistencia en viaje, tendrás cubiertos los gastos médicos urgentes en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"><strong>Asesoramiento médico telefónico 24 horas</strong>. Línea telefónica con especialistas para tratar cualquier dolencia o duda médica.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asesoramiento Jurídico</strong> para los familiares en todos los trámites posteriores al fallecimiento.</th>
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
        <i class="fa-solid fa-umbrella"></i>COBERTURAS OPCIONALES
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Protección Jurídica Integral:</strong> Con la que podrás resolver cualquier duda legal de índole personal de la vida privada o profesional como: recursos de multas, contratos de arrendamiento, problemas con servicios profesionales o en comercios, etc. Cubre gastos judiciales y extrajudiciales..</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia en viaje:</strong> Sanitas cubre los gastos médicos y de hospitalización en el extranjero, los gastos de traslado de acompañantes, el envío de medicamentos o la pérdida de maletas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Accidentes:</strong> Indemnización por fallecimiento invalidez en accidente. Con opción de doble capital por fallecimiento en accidente de circulación.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación para extranjeros:</strong> Si eres extranjero y resides en España con esta garantía podrás ser repatriado a tu país de origen en caso de fallecimiento en compañía de un familiar..</th>
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
	<h2 class="text-center azul">Descubre los Seguros de Decesos de Sanitas</h2><hr>
	<div class="d-flex flex-wrap justify-content-between flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Sanitas Asistencia Familiar Iplus</strong></h3><img alt="Sanitas Asistencia Familiar Iplus" src="/images/adeslas/adeslas-decesos-todo-previsto.webp" title="Sanitas Asistencia Familiar Iplus" width="600" height="300">
			<p class="display4 px-5 pt-5">El Seguro de ** <strong>ideal para familias y personas con menos de 70 años</strong> que quieran tener todo previsto.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Las primas van creciendo hasta los <strong>70 años</strong>, a partir de este momento <strong>la prima se nivela</strong> y sólo se incrementa anualmente en función de las prestaciones.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="sanitas">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Sanitas </strong></h3><img alt="Sanitas" src="/images/caser/caser-decesos-creciente.webp" title="Adeslas Decesos Completo" width="600" height="300">
			<p class="display4 px-5 pt-5"><strong>Esta póliza de Sanitas</strong> es igual que el seguro Todo Previsto pero <strong>con prima nivelada</strong>.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> La prima del seguro es nivelada, por lo que, <strong>la variación anual del coste del seguro será muy pequeña</strong>.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="sanitas"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Prima Única Sanitas</strong></h3><img alt="Adeslas Decesos Prima Única" src="/images/europea/seguros-prima-unica.webp" title="Seguro Decesos Prima Única Adeslas" width="600" height="300">
			<p class="display4 px-5 pt-5">El Seguro Decesos Prima Única Adeslas es un seguro <strong>dirigido a personas mayores de 70 años</strong> que aún no tienen contratado un seguro de decesos.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> El pago de la prima se realiza en un sólo pago, se paga el entierro de forma anticipada.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="sanitas"><input name="tipoSeguroInteresado" type="hidden" value="UNICA"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
	</div>
</div>
</section>

<!-----------------------FIN PRODUCTOS------------------------>


<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre Sanitas Seguros de Decesos</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Sanitas
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Cuál es la edad máxima de contratación de Sanitas Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima para contratar su seguro Asistencia Familiar iPlus es de 75 años.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Y tiene edad máxima de permanencia?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, este seguro no tiene edad máxima de permanencia.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Qué modalidad de prima tiene Asistencia Familiar iPlus?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Este seguro de decesos de Sanitas es de prima mixta.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿En la obtención de qué trámites te ayuda Sanitas?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sanitas gestiona la obtención y tramitación de certificado de: Registro Civil, defunción, nacimiento, matrimonio, nacimiento de sus hijos, fe de vida, municipal de convivencia, del Registro General de Actos de Última Voluntad, del Registro de Contratos de Seguros de Cobertura de Fallecimiento y la baja como usuario del Sistema Público Sanitario y como pensionista.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué tratamientos dentales incluye este seguro de decesos?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Con Sanitas Decesos tendrás cubierto sin coste: Una revisión dental anual, radiografías, fluorizaciones, pulido de amalgama, retirada de puntos de sutura, periodoncia y un programa de educación de higiene bucal.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Cuál es la edad mínima para poder contratar Sanitas Decesos Prima Única?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos de Sanitas de prima única, Asistencia Senior, es para las personas mayores de 65 años.</p>
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









