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

	$head_title = 'Seguro Adeslas Decesos PRIMA ÚNICA ▷ Calcular Precio';
	$head_descripcion = 'Calcula Precios y Coberturas del Seguro de Decesos de Prima única Adeslas. Rápido, fácil y sin compromiso.';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-adeslas-prima-unica.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Adeslas decesos Prima Única</h2><hr>
	<p class="text-center titulo-descripcion">
		El seguro de Segurcaixa Adeslas de Decesos Prima Única está pensado para mayores de 70 años que con esa edad no hayan contratado o no puedan contratar un seguro de decesos convencional.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/adeslas/seguro-decesos-prima-unica-adeslas.webp" type="image/webp">
  <source srcset="../../images/adeslas/seguro-decesos-prima-unica-adeslas.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/adeslas/seguro-decesos-prima-unica-adeslas.png" alt="seguro decesos prima única adeslas" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h4 class="title">Servicio de Decesos Completo</h4>
				<p class="description text-muted">
					Adeslas Decesos Prima Única cubre todos los servicios del entierro, toda la preparación, los gastos y los trámites, para que tus familiares no se tengan que preocupar por nada.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Compañía de referencia</h4>
				<p class="description text-muted">
					 El seguro de decesos prima única Adeslas te permite no tener que preocuparte por nada más en momentos como la pérdida de un familiar, ya que, se encarga por ti una compañía líder, con más de 50 años de experiencia en el sector seguros.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h4 class="title">Repatriación incluida</h4>
				<p class="description text-muted">
					Adeslas te cubre la repatriación funeraria desde cualquier parte del mundo hasta España. Hasta el lugar que hayáis escogido para el entierro o incineración.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas de Adeslas Decesos Prima Única</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-plane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Traslado Internacional</h3><hr>
    <p class="card-text">Repatriación desde el extranjero hasta España del asegurado fallecido.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Jurídica</h3><hr>
    <p class="card-text">Asesoramiento jurídico telefónico en trámites y gestiones legales.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-heart"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Psicológica</h3><hr>
    <p class="card-text">Ayuda a la familia mediante consulta psicológica in situ o telefónica.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Segurcaixa Decesos Prima Única?</h2><hr>
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
      <th scope="row"><strong>Servicios de Sepelio:</strong> Ofrece un servicio fúnebre completo con féretro y urnas cinerarias, acondicionamiento estético y sanitario, servicios religiosos y trámites para el mismo además de todos los trámites y gestiones burocráticas relacionadas.</th>
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
      <th scope="row"><strong>Asistencia Psicológica:</strong> Adeslas Decesos ofrece apoyo emocional a los familiares del asegurado fallecido, mediante asistencia psicologíca in situ o telefónica según las necesidades.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia Jurídica:</strong> Un Equipo de Profesionales prestará asesoramiento telefónico en trámites legales, obtencion de la copia del testamento, solicitud de pensiones de viudedad y/o orfandad, sucesiones, seguros, productos financieros, etc.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Documentación y Trámites:</strong> Certificados del Registro Civil, Actos de Última Voluntad, tramitación de Seguros con cobertura de fallecimiento, baja en el sistema público sanitario...</th>
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
	include ('../../modulos/footer.php');
	include ('../../modulos/llamada_lateral.php');
?>
</html>