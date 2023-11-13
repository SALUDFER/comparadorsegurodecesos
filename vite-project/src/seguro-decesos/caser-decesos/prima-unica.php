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

	$head_title = 'Seguro Caser Decesos PRIMA ÚNICA ▷ Calcular Precio';
	$head_descripcion = 'Calcula precios y coberturas del seguro de decesos de prima única Cáser. Rápido, fácil y sin compromiso.';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../../modulos/head.php');
	include ('../../modulos/header.php');
	include ('../../modulos/banner-caser-prima-unica.php');
	?>
	
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Decesos Prima Unica Caser para mayores de 70 años</h2><hr>
	<p class="text-center titulo-descripcion">
		El Seguro de Decesos Caser Prima Única está pensado para prestar el servicio a personas mayores de 70 años que no hayan podido contratar un seguro de decesos de prima periódica.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="../../images/caser/seguro-decesos-prima-unica-caser.webp" type="image/webp">
  <source srcset="../../images/caser/seguro-decesos-prima-unica-caser.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="../../images/caser/seguro-decesos-prima-unica-caser.png" alt="mejor seguro decesos prima única" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h4 class="title">Servicio Funerario Completo</h4>
				<p class="description text-muted">
					Este seguro proporciona un servicio funerario completo en caso de fallecimiento del asegurado. No solo ofrece apoyo económico, si no que también incluye toda la ayuda para los trámites y gestiones.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hand-holding-heart"></i>
				</div>
				<h4 class="title">Servicio integral de asistencia y ayuda</h4>
				<p class="description text-muted">
					 La ventaja de contratar con Caser es la de tener la ayuda de una gran compañía en momentos difíciles. Caser te ofrece un servicio de atención 24 horas para solucionar todos lo que tenga que ver con tu seguro de decesos.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Caser Decesos ofrece un sepelio personalizado</h4>
				<p class="description text-muted">
					Contratando el seguro de decesos prima única de Caser tendrás la tranquilidad de que el entierro se hará adaptado a los usos y costumbres locales y de tu familia.
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
  <i class="fa-solid fa-church"></i>
  <div class="card-body">
    <h3 class="card-title azul">Servicio de sepelio</h3><hr>
    <p class="card-text">La tranquilidad de saber que Caser se encarga de todos los trámites y gestiones del fallecimiento del asegurado según los usos y costumbres de cada localidad.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-file-pen"></i>
  <div class="card-body">
    <h3 class="card-title azul">Sin cuestionario de salud</h3><hr>
    <p class="card-text">Caser se encarga de todo el servicio fúnebre hasta el límite del capital contratado, sin necesidad de rellenar un cuestionario de salud en ningún momento.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-scale-balanced"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia jurídica</h3><hr>
    <p class="card-text">Caser Prima única incluye un servicio completo de asesoramiento jurídico, con un servicio telefónico para trámites y gestiones legales.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Caser Prima Única?</h2><hr>
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
      <th scope="row"><strong>Servicio de Sepelio:</strong> Ofrece un servicio de sepelio completo con inhumación (servicios de cementerio, nicho temporal, lápida de mármol o granito, para nicho,) o incineración y urna, corona de flores naturales, sudario, Vehículo de acompañamiento, carroza fúnebre.</th>
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