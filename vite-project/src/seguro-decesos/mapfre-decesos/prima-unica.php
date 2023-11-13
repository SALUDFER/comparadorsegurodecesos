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

	$head_title = 'Seguro Mapfre Decesos PRIMA ÚNICA ▷ Calcular Precio';
	$head_descripcion = 'Calcula precios y coberturas del Seguro de Decesos de Prima única Mapfre. Rápido, fácil y sin compromiso.';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-mapfre-prima-unica.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Prima Única Mapfre</h2><hr>
	<p class="text-center titulo-descripcion">
		Mapfre Decesos Prima Única, un seguro enfocado a las personas mayores de 70 años que por el motivo que sea no han podido contratar un seguro de prima periódica.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/mapfre/seguro-decesos-prima-unica-mapfre.webp" type="image/webp">
  <source srcset="../../images/mapfre/seguro-decesos-prima-unica-mapfre.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/mapfre/seguro-decesos-prima-unica-mapfre.png" alt="seguro decesos prima unica precio" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Un seguro completo y eficaz</h4>
				<p class="description text-muted">
					Mapfre Decesos Pago Único se encarga de todas las gestiones y trámites legales y burocráticos relacionados con el fallecimiento del asegurado. Se realiza mediante un pago único al contratar el seguro, no tiene carencias y no hay que realizar ningún cuestionario de salud.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-award"></i>
				</div>
				<h4 class="title">La confianza de una aseguradora líder</h4>
				<p class="description text-muted">
					 Tener el seguro de decesos con Mapfre, además de ofrecerte el apoyo de una compañía líder en decesos, te proporciona más ventajas como son la disponibilidad 24 horas, contratación sin límites de edad o un servicio administrativo ágil y que soluciona todos tus trámites.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-roof"></i>
				</div>
				<h4 class="title">Tranquilidad y seguridad para tus familiares</h4>
				<p class="description text-muted">
					Disfruta de la tranquilidad de tener todo cubierto en caso de imprevisto, evitando que en momentos tan complicados tu familia tenga que lidiar con los gastos y papeleos que conlleva un fallecimiento, libérales de esa responsabilidad.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas de Mapfre Decesos Prima Única</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-dove"></i>
  <div class="card-body">
    <h3 class="card-title azul">Sepelio adaptado a ti</h3><hr>
    <p class="card-text">Mapfre Decesos Prima Única te adapta el funeral y entierro a los usos y costumbres de tu localidad.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-church"></i>
  <div class="card-body">
    <h3 class="card-title azul">Libre elección de cementerio</h3><hr>
    <p class="card-text">La familia podrá escoger el cementerio de España que prefieran para el entierro o incineración del asegurado.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-dna"></i>
  <div class="card-body">
    <h3 class="card-title azul">Conservación ADN</h3><hr>
    <p class="card-text">Como cobertura opcional, Mapfre ofrece un servicio de conservación del ADN y de criopreservación de células madre del cordón umbilical.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Mapfre Prima Única?</h2><hr>
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
      <th scope="row"><strong>Asistencia Jurídica:</strong>  Asistencia legal para trámites relacionados con el fallecimiento y Servicio de Orientacion telefonica sobre Impuesto Sucesiones, Becas, Altas y bajas en la Seguridad Social...</th>
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


  </div>
</div>
</section>




<!-----------------------MODULOS----------------------->
	<?php
	include ('../../modulos/footer.php');
	include ('../../modulos/llamada_lateral.php');
?>
</html>