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

	$head_title = 'Seguro Ocaso Decesos PRIMA ÚNICA ▷ Calcular Precio';
	$head_descripcion = 'Calcula precios y coberturas del seguro de decesos de prima única Ocaso. Rápido, fácil y sin compromiso.';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-ocaso-prima-unica.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro Ocaso Decesos Prima Única</h2><hr>
	<p class="text-center titulo-descripcion">
		Pensado para personas que tienen más de 70 años y no han podido contratar un seguro de decesos convencional con prima periódica.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5  text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/ocaso/seguro-decesos-prima-unica-ocaso.webp" type="image/webp">
  <source srcset="../../images/ocaso/seguro-decesos-prima-unica-ocaso.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/ocaso/seguro-decesos-prima-unica-ocaso.png" alt="seguro decesos prima unica" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-1"></i>
				</div>
				<h4 class="title">Ocaso Decesos Prima Única</h4>
				<p class="description text-muted">
					El Seguro de Decesos de Prima Única de Ocaso es la modalidad de seguro de decesos que con un pago único que garantiza un servicio de sepelio completo. Tu familia tendrá un apoyo en los momentos más difíciles gracias a esta modalidad de seguro, ya que no tendrán que preocuparse en esos momentos delicados por las gestiones y los trámites.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-file-pen"></i>
				</div>
				<h4 class="title">Sin carencias ni cuestionario de salud</h4>
				<p class="description text-muted">
					 Entre las ventajas de este seguro de decesos vemos que cubre desde el primer día, no tiene periodos de carencia y no se realiza ningún cuestionario de salud, por lo que, puede contratarlo cualquier persona mayor de 70 años, sea cual sea su estado de salud.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h4 class="title">Asistencia médica en todo el mundo</h4>
				<p class="description text-muted">
					Ocaso ofrece un seguro de decesos con asistencia en viaje para cualquier país del mundo. Con la asistencia en viaje disfrutarás de servicios como la asistencia sanitaria, el desplazamiento de familiares si estás hospitalizado y todos los trámites administrativos para la hospitalización en el extranjero.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas de Ocaso Decesos Prima Única</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-heart"></i>
  <div class="card-body">
    <h3 class="card-title azul">Ocaso Prima Única se adapta a ti</h3><hr>
    <p class="card-text">El seguro de decesos, Asistencia Prima Única Integral de Ocaso te ofrece gran variedad de coberturas y servicios, para que lo adaptes a lo que necesites.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-hand-holding-hand"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia psicológica</h3><hr>
    <p class="card-text">Servicio de ayuda psicológica para los familiares, para asistirles en los momentos posteriores al fallecimiento.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asesoramiento legal para asegurado y familia</h3><hr>
    <p class="card-text">Servicio jurídico y legal para consultas privadas durante la vida del asegurado y para los familiares tras el fallecimiento del asegurado.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Ocaso Prima Única?</h2><hr>
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