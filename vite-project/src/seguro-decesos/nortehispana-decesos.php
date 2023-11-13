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

	$head_title = 'Nortehispana Decesos ✝ Seguro Decesos Nortehispana ▷ Calcular Precio';
	$head_descripcion = 'Consulta las coberturas, teléfono, precio y opiniones del Seguro de Decesos de Nortehispana - Compara precios y coberturas de más de 20 aseguradoras de decesos en 1 minuto.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-nortehispana.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Nortehispana</h2><hr>
	<p class="text-center titulo-descripcion">
					Máximas prestaciones y coberturas para asegurar tu tranquilidad y la de su familia.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/nortehispana/seguro-nortehispana-familiar.webp" type="image/webp">
  <source srcset="images/nortehispana/seguro-nortehispana-familiar.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/nortehispana/seguro-nortehispana-familiar.png" alt="seguros nortehispana decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Los Seguros de Decesos más Completos</h3>
				<p class="description text-muted">
					Nortehispana se ocupa de la gestión del sepelio en los momentos más difíciles para la familia. Garantiza la máxima seguridad y tranquilidad, se trata de una compañía experta en este tipo de seguros.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-smile"></i>
				</div>
				<h3 class="title">Grandes opiniones entre sus asegurados</h3>
				<p class="description text-muted">
					 Nortehispana es una de las compañías líderes en decesos, sus más 50 años de experiencia, servicio de atención, amplios recursos y grandes precios la han convertido en una aseguradora de referencia en decesos.
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-roof"></i>
				</div>
				<h3 class="title">Seguro de Decesos Familiar</h3>
				<p class="description text-muted">
					Lo que siempre ha querido Nortehispana es poder asegurar a las familias, darles total protección y seguridad. Así se convirtió NorteHispana en la alternativa perfecta para todos aquellos que buscan esto fundamentalmente, disponen de coberturas y ventajas para todos los miembros de la familia, incluso para las mascotas.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Atención al cliente única</h3>
				<p class="description text-muted">
					 Sus características mas importantes fueron, son y serán la atención personalizada y cercana. Convirtiéndose en una empresa única en su manera de tratar a sus clientes, incluyendo un teléfono de atención 24 horas gratuito.
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Estas son las ventajas que tendrás por contratar el Seguro de Decesos Familiar Nortehispana</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-regular fa-credit-card"></i>
  <div class="card-body">
    <h3 class="card-title azul">Flexiblidad en el pago</h3><hr class="line">
    <p class="card-text">Con Nortehispana podrás elegir tanto la forma de pago  que quieres: mensual, trimestral, semestral o anual. Como la modalidad de pago: natural, semimnatural, mixta o nivelada.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-laptop"></i>
  <div class="card-body">
    <h3 class="card-title azul">Servicios digitales</h3><hr class="line">
    <p class="card-text">Nortehispana incluye en su seguro de decesos, prestaciones novedosas como la redacción del testamento online o el borrado de la vida digital.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-1"></i>
  <div class="card-body">
    <h3 class="card-title azul">Seguro de Decesos de Prima única</h3><hr class="line">
    <p class="card-text">Nortehispana también ofrece una modalidad para los más mayores, con su seguro Decesos Sénior para los mayores de 70 años.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Nortehispana?</h2><hr>
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
      <th scope="row"><strong> Servicio funerario</strong>. Servicio completo de entierro o incineración, incluyendo coche fúnebre, corona, esquela en periódicos, recordatorios, traslado, velatorio, tanatorio.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Libre elección de cementerio</strong>. El asegurado y los familiares pueden escoger cualquier cementerio en España para el entierro o incineración.</th>
     <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Traslado, velatorio, nicho</strong>. Nortehispana Decesos cubre el traslado funerario, la sala para la celebración y permite elegir entre nicho alquilado o en propiedad.</th>
     <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos no asegurados</strong> si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días, Nortehispana cubre los gastos de decesos.</th>
     <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Orientación legal</strong> sobre sucesiones, testamentos, solicitud de certificados (nacimiento, matrimonio, defunción) y tramitación de pensiones (viudedad, orfandad).</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
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
      <th scope="row"><strong>Traslado Nacional:</strong> Traslado del fallecido desde cualquier punto de España hasta el cementerio elegido por los familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional:</strong> Traslado funerario del cuerpo desde el país de fallecimiento hasta el cementerio elegido por los familiares.</th>
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
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="col"><strong>Orientación médica</strong>. Servicio telefónico de atención médica 24 horas.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Servicios médicos y dentales</strong> a precios reducidos.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
        <tr>
      <th scope="col"><strong>Testamento online</strong>. Redacción del testamento desde casa, con ayuda de abogados expertos.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Borrado de vida digital</strong>del asegurado. Eliminación de toda la presencia digital, blogs, redes sociales, foros.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
            <tr>
      <th scope="col"><strong>Mi legado digital</strong>. Servicio digital de homenaje al fallecido.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>2ª opinión médica</strong> en clínica internacional.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
                <tr>
      <th scope="col"><strong>Asistencia hospitalaria avanzada</strong>. Tratamiento médico, quirúrgico y cirugía de alta especialización en clínica privada para tratamiento de cáncer.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Asistencia a mascotas</strong>. Acceso a red de veterinarios y precios especiales en tratamientos y consultas para tu mascota.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
                <tr>
      <th scope="col"><strong>Indemnización diaria por hospitalización</strong>. Nortehispana te abona un capital diario en caso de hospitalización.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Atención en el hogar</strong>. Asistencia a domicilio para gente impedida temporalmente. Ayuda para lavar, planchar, cocinar u ordenar la casa.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
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
      <th scope="col"><strong>Garantía acompañante para repatriación</strong>. del cadáver (Valor traslado o viaje avión (ida y vuelta),Gastos de estancia y manutención 90,15 €/día Máximo 601,01 €)</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Repatriación sanitaria</strong>. en caso de accidentes o enfermedad grave</th>
     <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Envío de medicamentos</strong> de interés vital al extranjero.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Envío de médico especialista</strong> por accidente o enfermedad</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Consulta médica a distancia</strong></th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
        <tr>
      <th scope="col"><strong>Asistencia a menores de 15 años</strong> (100 % del Valor de regreso a España con o sin acompañantes)</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
        <tr>
      <th scope="col"><strong>Regreso anticipado</strong> en viaje por fallecimiento de familiar o incendio del domicilio habitual (100 % del Valor de regreso a España)	</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
        <tr>
      <th scope="col"><strong>Desplazamiento de un acompañante familiar</strong> junto al asegurado hospitalizado (Valor de viaje en avión (ida y vuelta)</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Información viajes al extranjero</strong>	y Transmisión de mensajes urgentes</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
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
	<h2 class="pb-2 text-center azul titulo-especial">Con Nortehispana Decesos tendrás acceso a estas otras coberturas:</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Nortehispana ofrece algo más que un seguro de decesos.</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-house-user"></i>
				</div>
				<h4 class="title">Atención a domicilio</h4>
				<p class="description text-muted">
					Servicio de atención a domicilio para convalecientes, incluye servicios de limpieza, planchar o cocinar.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-percent"></i>
				</div>
				<h4 class="title">Descuentos en tratamientos médicos</h4>
				<p class="description text-muted">
					Podrás disfrutar de descuento en servicios médicos, dentales y de bienestar.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-bed-pulse"></i>
				</div>
				<h4 class="title">Indemnización diaria por hospitalización</h4>
				<p class="description text-muted">
					Nortehispana Decesos ofrece hasta un capital diario en caso de hospitalización, hasta 90 días.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-paw"></i>
				</div>
				<h4 class="title">Mascotas</h4>
				<p class="description text-muted">
					Acceso a cuadro veterinario Nortehispana con descuento en tratamientos y consultas. Incluye la incineración de tu mascota.
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/nortehispana/coberturas-opcionales-nortehispana.webp" type="image/webp">
  <source srcset="images/nortehispana/coberturas-opcionales-nortehispana.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/nortehispana/coberturas-opcionales-nortehispana.jpg" alt="nortehispana seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->

<!----------------------PRODUCTOS------------------->
<section class="bg-light">
<div class="container py-5">
  <h2 class="text-center azul mt-5 titulo-especial">
    Descubre los Seguros de Decesos de Nortehispana
  </h2><hr>
  <div class="d-flex flex-wrap justify-content-between flex3 pt-5">
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title"><strong> Nortehispana<br> Universal Previsión</strong></h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/nortehispana/nortehispana-universal-prevision.webp" type="image/webp">
  <source srcset="/images/nortehispana/nortehispana-universal-prevision.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/nortehispana/nortehispana-universal-prevision.jpg" title="Nortehispana Universal Previsión" alt="Seguro de Decesos Nortehispana"  width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Contratable hasta los 70 años</li>
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Universal previsión cubre las necesidades esenciales del servicio funerario como son los gastos de traslado del fallecido dentro o fuera del territorio español así como el servicio completo de inhumación e incineración.</li>
    </ul>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
<div class="border d-flex flex-column justify-content-between">
   <h3 class="azul text-center py-2 height-title"><strong>Nortehispana<br> Prima Única</strong></h3>
  <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/nortehispana/nortehispana-prima-unica.webp" type="image/webp">
  <source srcset="/images/nortehispana/nortehispana-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/nortehispana/nortehispana-prima-unica.jpg" title="Nortehispana Prima Única" alt="Seguro de Decesos Prima Única Nortehispana"  width="375" height="187" loading="lazy">
			</picture>
  <ul class="px-5 py-4">
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Para personas mayores de 70 años</li>
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Las personas mayores de 70 años tiene un servicio completo de decesos con Universal prima única que proporciona la máxima cobertura en servicios, gestiones y gastos de traslado del fallecido mediante el pago de una prima única al momento de la contratación.</li>
  </ul>
  <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title"><strong>Nortehispana<br> Repatriación Extranjeros</strong></h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/nortehispana/nortehispana-repatriacion-extranjeros.webp" type="image/webp">
  <source srcset="/images/nortehispana/nortehispana-repatriacion-extranjeros.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/nortehispana/nortehispana-repatriacion-extranjeros.jpg" title="Nortehispana Repatriación Extranjeros" alt="Seguro de Repatriación Nortehispana" width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Exclusivo para extranjeros residentes en España</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Si deseas volver al país de origen en caso de defunción Nortehispana decesos con Universal Previsión Repatriación tiene cobertura gastos de traslado del fallecido, dentro y fuera del territorio español y repatriación del féretro.</li>
    </ul>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
  </div>
  </div>
</div>
</section>
<!----------------------FIN PRODUCTOS------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre Nortehispana Seguros de Decesos</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Nortehispana Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar un seguro de decesos de Nortehispana?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación es hasta los 70 años.</p>
        <p>Para los mayores de 70 años se puede contratar el seguro de decesos de prima única de Nortehispana.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Cómo se cubren los gastos de servicio de sepelio?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Nortehispana garantiza la cobertura total del servicio funerario hasta el límite del valor asegurado.</p>
      </div>
    </div>
  </div>
  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
	<div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿El Seguro de Decesos Nortehispana cubre la incineración?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, la incineración está incluida.</p>
      </div>
    </div>
  </div>  
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Si fallezco en el extranjero está cubierto el traslado?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, a través de la cobertura de Asistencia en Viaje están garantizados los gastos de traslado del asegurado fallecido hasta el cementerio nacional que comtemple el seguro.</p>
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