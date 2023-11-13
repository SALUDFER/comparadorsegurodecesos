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

	$head_title = 'Seguro Decesos Mapfre✝  ▷ Precios, Coberturas y Teléfono de atención';
	$head_descripcion = 'Mapfre Decesos - Consultar Coberturas, Precios, Teléfono 24 horas, Opiniones de Clientes de Mapfre Decesos - Compara precios y coberturas de más de 20 aseguradoras de decesos en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-mapfre.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Mapfre Siempre</h2><hr>
	<p class="text-center titulo-descripcion">
					El seguro de decesos Mapfre ofrece una solución para resolver todas las cuestiones de un fallecimiento.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">		
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/mapfre/mapfre-seguro-muertos.webp" type="image/webp">
  <source srcset="images/mapfre/mapfre-seguro-muertos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/mapfre/mapfre-seguro-muertos.png" alt="mapfre seguro muertos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Empresa líder en seguros de decesos</h3>
				<p class="description text-muted">
					Mapfre es una empresa líder en el sector de los seguros y también en los de decesos, ha sabido enfrentarse desde el primer momento a cada uno de los retos que el sector le ha ido planteando,  esa ha sido una de sus mayores bazas para mantenerse en lo más alto. En los seguros de decesos, desde su llegada a nuestro país han sabido ofrecer lo que necesitaba nuestro mercado.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-heart"></i>
				</div>
				<h3 class="title">Un seguro de decesos pensado para sus clientes</h3>
				<p class="description text-muted">
					El seguro de decesos Mapfre ofrece seguros de decesos únicos, proporcionan a sus clientes un servicio completo para tramitar el fallecimiento de un ser querido, garantizan la prestación del servicio funerario, con entierro o incineración. Además de su gran servicio de atención 24 horas.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Precio y coberturas adaptables</h3>
				<p class="description text-muted">
					Mapfre ofrece una póliza flexible con la posibilidad de ampliar o reducir coberturas, adaptable a las necesidades de cada familia, usos y costumbres de cada localidad.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-smile"></i>
				</div>
				<h3 class="title">Diferentes modalidades y soluciones</h3>
				<p class="description text-muted">
					Mapfre Decesos también ofrece soluciones para las personas mayores de 55 años, con su seguro de prima única, y para los extranjeros residentes en España, con su seguro de repatriación.
				</p>
			</div>
			
			

		</div>
		
	</div>
</div>




<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Mapfre</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-regular fa-calendar-days"></i>
  <div class="card-body">
    <h3 class="card-title azul">Sin carencias</h3><hr class="line">
    <p class="card-text">Mapfre Decesos te permite usar sus coberturas desde el primer día.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-tooth"></i>
  <div class="card-body">
    <h3 class="card-title azul">Cobertura dental</h3><hr class="line">
    <p class="card-text">Podrás incorporar prestaciones dentales a tu seguro. Odontología preventiva, general, cirugía estomatológica o radiología.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-phone-volume"></i>
  <div class="card-body">
    <h3 class="card-title azul">Teléfono de atención 24 horas</h3><hr class="line">
    <p class="card-text">Mapfre dispone de asistencia 24 horas para sus clientes y sus familiares.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué coberturas nos ofrece el Seguro de Decesos Mapfre?</h2>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Servicio completo de sepelio, con nicho o sepultura, lápida y/o incineración y tanatorio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. La familia podrá elegir el cementerio que quieran, dentro de España. </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong> Fallecimiento de hijos no asegurados</strong> si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gestión y tramitación de documentación</strong>. Mapfre se encarga de gestionar y tramitar: certificado de defunción, pensión viudedad, pensión orfandad, certificado convivencia, certificado últimas voluntades, baja libro de familia o pedir copia testamento.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong> desde el lugar de fallecimiento del asegurado hasta el lugar de inhumación.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row">Internacional para viajes al extranjero no superiores a 60 días</th>
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
      <th scope="row"><strong>Repatriación</strong> funeraria desde cualquier país hasta el cementerio español elegido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Traslado en ambulancia</strong> dentro de España por accidente o enfermedad.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
        <tr>
      <th scope="row"><strong>Gastos médicos en el extranjero</strong>. Mapfre Decesos te cubre hasta 12.000€ de gastos médicos por accidente o enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Envio de especialista</strong> a domicilio, por casos muy graves.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
        <tr>
      <th scope="row"><strong>Prolongación de estancia en hotel</strong> por convalencencia, hasta 1.500€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Repatriación sanitaria</strong> hasta España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
            <tr>
      <th scope="row"><strong>Estancia y viaje para acompañante</strong> en caso de hospitalización o fallecimiento del asegurado, cubre hasta 1.500€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Asistencia a menores</strong> que quedaran desamparados por accidente o enfermedad del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
                <tr>
      <th scope="row"><strong>Regreso anticipado</strong> a casa por siniestro grave en domicilio o por fallecimiento o accidente grave de un familiar.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Localización de equipajes.</strong> Mapfre gestiona la búsqueda del equipaje extraviado, y si no apareciese te reembolsa hasta 1.200€.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>  
                    <tr>
      <th scope="row"><strong>Préstamo</strong>. Mapfre presta al asegurado hasta 900€, si este por robo o enfermedad se quedara sin recursos en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> <strong>Anticipo de fondos</strong>. Mapfre Decesos te anticipa hasta 12.000€ para hacer frente a gastos de hospitalización, accidente o robo.</th>
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
      <th scope="row"><strong>Transporte de padres, cónyuge e hijos hasta lugar de de inhumación en territorio nacional</strong>. </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Invalidez permanente</strong>. Si añades esta cobertura, Mapfre te pagará una indemnización en caso de invalidez permanente provacda por un accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Fallecimiento en accidente</strong>. Pago de un capital adicional si el fallecimiento se produce en un accidente.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Ayuda psicológica</strong> para los familiares del fallecido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Teleasistencia</strong>. Instalación de un transmisor en el domicilio para solicitar asistencia rápida en caso de problema.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row">Segunda opinión médica en caso de enfermedad grave.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asesoramiento jurídico familiar</strong> para consultas laborales, administrativas, vivienda, sucesiones o derecho penal.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asistencia a domicilio</strong>. Ayuda para tareas cotidianas en el hogar por convalecencia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row">Pack de apoyo, orientación psicológica, gestión de duelo y asesoramiento en nutrición.</th>
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
<!---------------------------------PRODUCTOS------------------------------->
<section class="bg-light productos">
<div class="container py-5">
   <h2 class="text-center azul pt-4">
    Descubre los Seguros de Decesos de Mapfre
  </h2>
  <div class="d-flex flex-wrap justify-content-between flex3 pt-5">
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
      <strong>Mapfre<br> Decesos Siempre</strong>
    </h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/mapfre/mapfre-decesos-siempre.webp" type="image/webp">
  <source srcset="/images/mapfre/mapfre-decesos-siempre.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/mapfre/mapfre-decesos-siempre.jpg" title="Mapfre Seguro Decesos" alt="Seguro de Decesos Mapfre Precio"  width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Contratable hasta los 70 años</li>
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Traslado Nacional e Internacional. </li>
  	<li><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia en Viaje en todo el mundo.</li>
    </ul>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
<div class="border d-flex flex-column justify-content-between">
   <h3 class="azul text-center py-2 height-title">
      <strong>Mapfre<br> Pago Único</strong>
    </h3>
  <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/mapfre/mapfre-pago-unico.webp" type="image/webp">
  <source srcset="/images/mapfre/mapfre-pago-unico.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/mapfre/mapfre-pago-unico.jpg" title="Decesos Prima Única Mapfre" alt="Mapfre Decesos Prima Única" width="375" height="187" loading="lazy">
			</picture>
  <ul class="px-5 py-4">
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Para personas mayores de 70 años</li>
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Traslado Nacional e Internacional. </li>
  	<li><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia en Viaje en todo el mundo.</li>
  </ul>
  <a class="saber_mas" href="/seguro-decesos/mapfre-decesos/prima-unica" title="Mapfre Decesos Prima única"><i class="fa fa-caret-right" aria-hidden="true"></i> Saber más</a>
  <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
      <strong>Mapfre<br> Residentes Extranjeros</strong>
    </h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/mapfre/mapfre-residentes-extranjeros.webp" type="image/webp">
  <source srcset="/images/mapfre/mapfre-residentes-extranjeros.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/mapfre/mapfre-residentes-extranjeros.jpg" title="Mapfre Residentes Extranjeros" alt="Seguro de Repatriación Mapfre"  width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Exclusivo para extranjeros residentes en España</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Servicio de Decesos:</strong> incluye todos los trámites y gestiones necesarios para realizar la <a href="/articulos/seguro-decesos-repatriacion-extranjeros" title="Seguro de Decesos con Repatriacion" target="_blank">repatriación.</a></li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Incluye servicio de acondicionamiento sanitario legal o urna de cenizas en caso de incineración.</li>
    <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia en Viaje en todo el mundo.</li>
    </ul>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
  </div>
</div>
</section>
<!------------------FIN PRODUCTOS-------------------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Mapfre</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Mapfre Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Mapfre Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es hasta los 70 años.</p>
		<p>Para los mayores de 70 años existe la posibilidad de contratar el <a href="/seguro-decesos/mapfre-decesos/prima-unica" title="Mapfre Pago Único">seguro de decesos de prima única Mapfre</a>.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Puedo elegir entre entierro o incineración con el Seguro de Decesos Mapfre?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Por supuesto que si, puedes tomar esta decisión en cualquier momento si contratas el seguro de decesos de Mapfre.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Puedo fraccionar el pago en el Seguro de Decesos Mapfre?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Claro que sí, con Mapfre Decesos podrás pagar de forma mensual, trimestral, semestral o anual, la forma de pago que mejor se ajuste a tus necesidades.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Mapfre Decesos tiene carencias?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, Mapfre Decesos no tiene carencias, la póliza tiene cobertura desde el primer momento.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué cubre el Seguro de Decesos de Mapfre?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Los seguros de decesos de Mapfre ofrecen de forma común: el traslado nacional e internacional, la posibilidad de entierro o incineración, repatriación, asesoría administrativa y jurídica, servicio de gestiones, gastos del entierro y asistencia en el viaje. Luego ofrecen pólizas específicas orientadas a extranjeros (Mapfre Residentes Extranjeros), mayores de 70 (Mapfre Pago único) o menores (Mapfre Decesos Siempre), pero las coberturas comunes a todos son esas. Por todo ello, Mapfre Decesos cuenta con tan grandes opiniones.
</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Cuál es el Seguro de Mapfre Decesos Prima Única?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Es la póliza llamada Mapfre Pago Único. Que se ofrece para todas las edades, con servicio funerario completo, libertad para elegir cementerio y asistencia en viaje y a familiares (psicológica y legalmente).
</p>
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