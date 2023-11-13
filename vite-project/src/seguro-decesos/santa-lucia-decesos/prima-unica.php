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

	$head_title = 'Seguro Decesos PRIMA ÚNICA Santa Lucía ▷ Precios y Coberturas';
	$head_descripcion = 'Seguro de Decesos de Prima Única de Santalucía - Precio y Coberturas de Santalucía Decesos para los mayores de 70 años.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-santalucia-prima-unica.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Prima Única Santalucía</h2><hr>
	<p class="text-center titulo-descripcion">
		Pensado para personas mayores de 70 años, sin carencias y sin necesidad de cumplimentar cuestionario de salud.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/santalucia/seguro-decesos-prima-unica-santalucia.webp" type="image/webp">
  <source srcset="../../images/santalucia/seguro-decesos-prima-unica-santalucia.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/santalucia/seguro-decesos-prima-unica-santalucia.png" alt="seguro de decesos prima unica" width="386" height="375" loading="lazy">
			</picture>	
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-cane"></i>
				</div>
				<h4 class="title">Seguro para mayores de 70 años</h4>
				<p class="description text-muted">
					El Seguro de Asistencia Senior Prima Única de Santalucia es un seguro pensado para personas mayores de 70 años. Ventajas y servicios especiales para los mayores 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h4 class="title">Seguro de decesos completo</h4>
				<p class="description text-muted">
					Con Santalucía Decesos Prima Única, ni tú ni tu familia tendréis que preocuparos por nada. Todo el servicio fúnebre, el traslado del cuerpo, asistencia psicológica para familiares o toda la asistencia jurídica y legal están incluídos en su seguro de decesos.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-1"></i>
				</div>
				<h4 class="title">Una única cuota</h4>
				<p class="description text-muted">
					Tu seguro individual mediante un pago único, con una sola cuota cuentas con la cobertura de decesos y asistencia proporcionada por una gran compañía. Con cobertura completa de fallecimiento y prestaciones adicionales como asistencia en viajes y asistencia senior.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas de Santalucía Decesos Prima Única</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia en viaje</h3><hr>
    <p class="card-text">Contarás con atención sanitaria, repatriación o servicio de ambulancia para accidentes en el extranjero.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-umbrella"></i>
  <div class="card-body">
    <h3 class="card-title azul">Coberturas opcionales</h3><hr>
    <p class="card-text">Santalucía te permite contratar servicios adicionales como asistencia a domicilio, teleasistencia o videconsulta médica.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">Protección jurídica</h3><hr>
    <p class="card-text">Santalucía ofrece un servicio que te proporciona asistencia jurídica judicial y extrajudicial, así como cubre todos los gastos administrativos y judiciales.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Santalucía Prima Única?</h2><hr>
	<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        DESCRIPCIÓN DEL SERVICIO
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="row"><strong>Servicio de Sepelio:</strong> Ofrece un servicio de sepelio completo con inhumación o incineración (Arca, coche fúnebre, acondicionamiento sanitario, tanatorio, corona y centro de flores, recordatorios, servicio religioso, derechos de tramitación, derechos de inhumación nicho de alquiler temporal).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicios Religiosos:</strong> Sala de velatorio (tanatorio), capilla ardiente, servicio religioso, derechos de cementerio, tasas municipales…</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Entierro o Incineración:</strong> Sus familiares podrán elegir la opción que deseén.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado Nacional:</strong> Traslado del asegurado fallecido dentro de España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional:</strong> Cubre el traslado o la repatriación de los restos mortales del asegurado desde el extranjero hasta España, incluye costes del billete de avión o cualquier otro transporte del acompañante y su estancia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia Jurídica:</strong> Asistencia legal para trámites relacionados con el fallecimiento y Servicio de Orientacion telefonica sobre Impuesto Sucesiones, Becas, Altas y bajas en la Seguridad Social...</th>
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






<!-----------------------MODULOS----------------------->
	<?php
	include ('../../modulos/footer.php');
	include ('../../modulos/llamada_lateral.php');
?>
</html>