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

	$head_title = 'Seguro Decesos LA FE✝   Precios, Coberturas y Opiniones';
	$head_descripcion = 'Consulta las coberturas del Seguro de Decesos de La Fe - Compara precios y coberturas de más de 20 aseguradoras en 1 minuto - Precio, coberturas, opinioones y teléfono del seguro decesos La Fe';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-fe.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos La Fe</h2><hr>
	<p class="text-center titulo-descripcion">
					Un producto flexible diseñado para superar con tranquilidad el trago más amargo.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/fe/seguro-la-fe-decesos.webp" type="image/webp">
  <source srcset="images/fe/seguro-la-fe-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/fe/seguro-la-fe-decesos.png" alt="seguros la fe decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">La Fe, Un seguro con grandes opiniones</h3>
				<p class="description text-muted">
					Fe Seguros cubre los gastos asociados al sepelio del asegurado. Porque no es nada fácil la perdida de un familiar, FE Seguros no solo gestiona y paga el funeral, si no que simplifica muchos los trámites posteriores al fallecimiento a la familia del asegurado.

				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Seguro de decesos completo</h3>
				<p class="description text-muted">
					FE Decesos es un seguro muy personalizable y que permite completarlo a tu gusto. Puedes escoger coberturas que otras aseguradoras no ofrecen, como: Asistencia para mascotas, tratamientos dentales gratuitos, atención médica y pediátrica 24 horas o descuento en servicios de ocio y bienestar. 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-scale-balanced"></i>
				</div>
				<h3 class="title">Servicio jurídico y administrativo amplio</h3>
				<p class="description text-muted">
					FE Decesos incluye un servicio jurídico 24 horas, además de ayuda para la obtención y gestión de certificados y pensiones como certificado de defunción, partidas de nacimiento, baja del libro de familia, últimas voluntades, pensión de viudedad, orfandad o la obtención de auxilio por defunción.
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos FE Seguros</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-thumbs-up"></i>
  <div class="card-body">
    <h3 class="card-title azul">Especialista en Seguros de Decesos</h3><hr class="line">
    <p class="card-text">FE Seguros es una compañía que se dedica únicamente al seguro de decesos, una gran ventaja pues la especialización le permite ofrecer un servicio más personalizado.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Mundial</h3><hr class="line">
    <p class="card-text">Si falleces en cualquier lugar del mundo, La FE Decesos se encarga de todos los trámites y gestiones para traerte a España.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-award"></i>
  <div class="card-body">
    <h3 class="card-title azul">Acceso al Club FE Servicios</h3><hr class="line">
    <p class="card-text">Grandes descuentos en servicios médicos y dentales, limpieza dental gratuita, servicios para la tercera edad, asistencia jurídica, ocio y cultura.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece FE Decesos?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. FE Decesos ofrece un servicio funerario completo, </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Servicio de decesos para hijos menores de 30 días o en periodo de gestación</strong>.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia jurídica y gestoría</strong>, servicio de asesoramiento en relación a trámites a realizar con motivo del fallecimiento del asegurado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Certificado de defunción,</strong> partida de nacimiento, últimas voluntades, Tramitación de baja en el libro de familia, obtención del auxilio por defunción, tramitación de la pensión de viudedad, pensión de orfandad, etc.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong>, se cubre el traslado del fallecido a cualquier parte de España</th>
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
        <i class="fa-solid fa-earth-anericas"></i>ASISTENCIA EN VIAJE
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Traslado internacional</strong> del asegurado fallecido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación</strong> o transporte de heridos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación</strong> o transporte de los acompañantes heridos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Desplazamiento de un familiar</strong> en caso de hospitalización del asegurado (incluidos gastos de estancia 150 € diarios máximo 10 días).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Regreso anticipado</strong> por fallecimiento de familiar.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Transmisión de mensajes urgentes</strong> y envio de medicamentos.</th>
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
      <th scope="row"><strong> Teleasistencia domiciliaria post-hospitalaria:</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Tramitación de todos documentos</strong> de después del fallecimiento (bajas, pensiones, literales, últimas voluntades....).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong> Acceso al CLUB FE SERVICIOS:</strong> Grandes descuentos en servicios médicos y dentales, limpieza dental gratuita, servicios para la tercera edad, asistencia jurídica, ocio y cultura.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de ayuda legal:</strong> en control de alcoholemia, accidente de tráfico, robo o privación de libertad, etc.…</th>
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
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes LA FE</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de contratar tu Seguro con Fe Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Cáles son las ventajas dentales que ofrece FE Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Este es un aspecto muy importante de este seguro, porque incluye más de 50 servicios dentales sin coste, descuentos de hasta el 40% en el resto de tratamientos, acceso a un cuadro dental con más de 1.900 clínicas y un plan de salud bucal gratuito para los niños.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Cuál es la indemnización máxima si añades la cobertura de accidentes?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si contratas la cobertura de accidentes, Fe Seguros te ofrece indemnizaciones desde 500€ a 15.000€.</p>
      </div>
    </div>
  </div>
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Fe Seguros dispone de atención 24 horas?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, pone a disposición de sus asegurados un teléfonbo de atención 24 horas, 365 días al año para atender imprevistos.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Cuál es la edad máxima para contratar el seguro de decesos de La Fe?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>La edad máxima de contratación de Fe Decesos es de 70 años.</p>
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