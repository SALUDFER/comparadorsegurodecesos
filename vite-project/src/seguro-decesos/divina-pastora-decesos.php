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

	$head_title = 'Seguro de Decesos Divina Pastora ▷ Precios, Coberturas y Teléfono';
	$head_descripcion = 'Precios y coberturas del Seguro de Decesos de Divina Pastora ➞  Comparativa Divina Pastora con otras 20 aseguradoras de decesos ➞ Todo sobre Divina Decesos (precio, coberturas, opiniones, teléfono).';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-divina.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos de Divina Pastora</h2><hr>
	<p class="text-center titulo-descripcion">
					Un Seguro de Decesos que cuenta con grandes opiniones y amplias coberturas.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/divina-pastora/seguro-asistencia-familiar-decesos.webp" type="image/webp">
  <source srcset="images/divina-pastora/seguro-asistencia-familiar-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/divina-pastora/seguro-asistencia-familiar-decesos.png" alt="seguro de decesos divina pastora" width="386" height="375" loading="lazy">
			</picture>
			
			
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-face-smile"></i>
				</div>
				<h3 class="title">Divina Decesos cuenta con grandes opiniones</h3>
				<p class="description text-muted">
					Con Divina Pastora puede conseguir ahora un seguro de decesos de los más económicos, con grandes opiniones entre sus clientes y que cuenta con un servicio de atención telefónica que lo hace destacar, teniendo siempre a alguien dispuesto a ayudarte con su seguro y con los trámites.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-people-roof"></i>
				</div>
				<h3 class="title">La mayor ayuda para tus familiares</h3>
				<p class="description text-muted">
					 Contratando su Póliza Asistencia Familiar Decesos contará con un servicio de sepelio completo, donde podrá elegir el lugar del entierro, si incineración o inhumación, la urna o lápida y el tono completo del evento.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-file-signature"></i>
				</div>
				<h3 class="title">Asistencia completa en sucesiones y testamento</h3>
				<p class="description text-muted">
					 Además, para los momentos posteriores al fallecimiento, los herederos tendrán una asistencia completa para la gestión y tramitación del testamento, del Impuesto de Sucesiones o de las pensiones de viudedad u orfandad.
				</p>
			</div>
			

		</div>
		
	</div>
</div>

<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Divina Pastora</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-cane"></i>
  <div class="card-body">
    <h3 class="card-title azul">Contratable hasta los 75 años</h3><hr class="line">
    <p class="card-text">Divina Pastora permite contratar su seguro de decesos hasta los 75 años.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-star"></i>
  <div class="card-body">
    <h3 class="card-title azul">Servicio personalizado</h3><hr class="line">
    <p class="card-text">Divina Pastora garantiza a los herederos un servicio único y personalizado para la gestión de la inhumación o incineración.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Mundial</h3><hr class="line">
    <p class="card-text">Si falleces en cualquier lugar del mundo, Divina Decesos se encarga de todos los trámites y gestiones para traerte a España.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el seguro Divina Pastora Decesos?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Divina Pastora Decesos te ofrece una asistencia funeraria completa, tanto si eliges inhumación como si eliges incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de lugar para entierro</strong>. Los familiares del fallecido podrán elegir libremente el lugar para la inhumación y celebración del evento dentro del territorio nacional.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong> </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos</strong>  no asegurados si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia legal</strong>. Para cuestiones relacionadas con el fallecimiento: sucesiones y pensiones de viudedad y/u orfandad y asistencia jurídica de índole personal.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>. Divina Pastora cubre los gastos y gestiones para el transporte del fallecido hasta el cementerio o crematorio en España que hayan elegido los familiares</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional</strong> para viajes al extranjero no superiores a 90 días</th>
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
      <th scope="row"><strong>Traslado o repatriación de restos mortales</strong>. Divina Pastora cubre los gastos del traslado del cuerpo hasta el cementerio elegido por los familiares.</th>
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
         <i class="fa-solid fa-circle-plus"></i>COBERTURAS OPCIONALES
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Cobertura de Expatriación:</strong> Para Españoles residentes en el extranjero, traslado internacional de los restos mortales hasta el lugar del entierro en España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Orientación Legal:</strong> Asesoría profesional sobre los siguientes temas_ sucesiones, pensiones de viudedad y orfandad, otros contratos de seguro, contrato de arrendamiento y reclamaciones a terceros.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
     
  </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</section>





<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Divina Pastora
</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de contratar tu Seguro de Decesos con Divina Pastora 
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿La prima del seguro Divina decesos puede variar?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Sí, al tratarse de una prima natural, el precio del seguro se actualiza cada año en función de la edad del asegurado. También puede variar la prima dependiendo del incremento del coste de los servicios fúnebres.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Hasta qué edad es contratable Divina Decesos?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima para contratar este seguro es 75 años.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Qué pensiones te ayuda a gestionar y solicitar Divina Seguros?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos Divina gestiona y tramita las pensiones de viudedad, orfandad y de auxilio por defunción.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Se puede rescatar el seguro de decesos de Divina Pastora?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, no ofrece la posibilidad de rescate.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué modalidad de pago tiene Divina Seguros?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos de Divina Seguros se ofrece con modalidad natural.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Cuál es la forma de pago de Divina Decesos?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos de Divina Pastora se paga de forma anual.</p>
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