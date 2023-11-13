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

	$head_title = 'Seguro Decesos Prima Nivelada de Helvetia ▷ Compara Precios y Coberturas';
	$head_descripcion = 'Calcula Precios y Coberturas del Seguro de Decesos de Prima Nivelada de Helvetia - Comparador de Seguros de Decesos - Contratación Online.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-helvetia-prima-nivelada.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Helvetia Decesos de Prima Nivelada</h2><hr>
	<p class="text-center titulo-descripcion">
		Con este seguro de Helvetia podrás disfrutar de servicios únicos, amplias coberturas y sin sobresaltos..
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/helvetia/seguro-decesos-prima-unica-helvetia.webp" type="image/webp">
  <source srcset="../../images/helvetia/seguro-decesos-prima-unica-helvetia.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/helvetia/seguro-decesos-prima-unica-helvetia.png" alt="seguro de decesos pago unico" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h4 class="title">Cubre todos los gastos relacionados con el funeral</h4>
				<p class="description text-muted">
					El seguro de decesos de Helvetia de prima nivelada cubre gastoscomo el ataúd, la sala de velatorio, el transporte del cuerpo, la ceremonia, las flores, etc. Esto supone un gran ahorro para los familiares.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hand-holding-hand"></i>
				</div>
				<h4 class="title">Apoyo y orientación psicológica</h4>
				<p class="description text-muted">
				Helvetia con su plan de asistencia familiar también ofrece asistencia psicológica para los seres queridos del fallecido en los posteriores al fallecimiento, algo imprescindible en momentos tan complicados.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Prima constante toda la vida</h4>
				<p class="description text-muted">
					El asegurado paga la misma cuota todos los meses o años, sin cambios por la edad o el tiempo, como en otras modalidades. Un seguro que proporciona estabilidad, facilitando la planificación financiera de la familia.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Helvetia Decesos Prima Nivelada cuenta con más coberturas</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-paw"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia a mascotas</h3><hr>
    <p class="card-text">Helvetia incluye servicios como recogida e incineración de tu mascota o descuento en su cuadro veterinario.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Repatriación internacional</h3><hr>
    <p class="card-text">Tanto para expatriados como para extranjeros residentes en España, Helvetia permite la repatriación funeraria.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-falling-burst"></i>
  <div class="card-body">
    <h3 class="card-title azul">Indemnización por accidente</h3><hr>
    <p class="card-text">Helvetia te da la posibilidad de contratar una indemnización extra en caso de que el fallecimiento sea accidental.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Helvetia Prima Nivelada?</h2><hr>
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


<!-----------------------MODULOS----------------------->
	<?php
	include ('../modulos/footer.php');
	include ('../modulos/llamada_lateral.php');
?>
</html>