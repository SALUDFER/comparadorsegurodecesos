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

	$head_title = 'Allianz Decesos ▷ Calcular Seguro de Decesos Allianz ';
	$head_descripcion = 'Seguro de Decesos Allianz ▷ Compara Allianz Decesos con otras 20 aseguradoras y consigue el mejor precio ▷ Teléfono, opiniones y condiciones de Allianz';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-allianz.php');
	?>
<div class="container about py-5">
	<h2 class="pb-4 text-center azul">Seguro de Decesos Allianz</h2><hr>
	<p class="text-center titulo-descripcion">
					El seguro de decesos Allianz es un seguro flexible con varias opciones de contratación para cuidar de ti y de tu familia.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">			
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/allianz/decesos-allianz.webp" type="image/webp">
  <source srcset="images/allianz/decesos-allianz.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/allianz/decesos-allianz.png" alt="decesos allianz" width="386" height="375" loading="lazy">
			</picture>		
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Cobertura integral con este seguro de decesos</h3>
				<p class="description text-muted">
					En Allianz Decesos saben lo difícil que es afrontar la pérdida de un familiar, además de todos los trámites y gestiones administrativas que ello conlleva. Por eso, Allianz te ofrece un seguro de decesos integral.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-4"></i>
				</div>
				<h3 class="title">4 modalidades a elegir</h3>
				<p class="description text-muted">
					Allianz te da a elegir 4 modalidades de su seguro de decesos, para que elijas el tipo de prima, el precio y las coberturas que más se ajusten a tus necesidades.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-plane"></i>
				</div>
				<h3 class="title">Repatriación incluida</h3>
				<p class="description text-muted">
					Alianz ofrece un seguro de decesos especial para los extranjeros residentes en España.
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!------------------------VENTAJAS----------------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Allianz</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-dove"></i>
  <div class="card-body">
    <h3 class="card-title azul">Entierro o Incineración</h3><hr class="line">
    <p class="card-text">El seguro de decesos de Allianz se encarga de asumir todos los gastos asociados al fallecimiento del asegurado para que la familia no tenga que hacerlo.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-eraser"></i>
  <div class="card-body">
    <h3 class="card-title azul">Borrado Huella Digital</h3><hr class="line">
    <p class="card-text">Para una mayor protección ofrecen borrado de huella digital que se encarga de eliminar todo el contenido personal del asegurado de las redes e internet.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-regular fa-heart"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia Psicológica y Jurídica</h3><hr class="line">
    <p class="card-text">Además de asumir los gastos asociados también ofrece asistencia psicológica y asistencia jurídica para dar el mayor apoyo a la familia.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>
<!------------------------FIN VENTAJAS----------------------------->

<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul padding_especial mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Allianz?</h2><hr>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Allianz te cubre todos los gastos que supone un entierro o incineración(arca, coche fúnebre, tanatorio, velatorio...)</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Los familiares del asegurado podrán elegir cualquier cementerio de España para el entierro</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos</strong> no asegurados si ocurriese durante el periodo de gestacion, en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites de Gestoría</strong> y adquisición de todos los documentos necesarios (certificado de defunción, pensión de viudedad, orfandad, jubilación o incapacidad e invalidez....)</th>
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
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Testamento Vital y Notarial Online:</strong> Asesoramiento jurídico para la elaboración del testamento notarial online.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"> <strong>Borrado de la vida digital:</strong> Eliminación de todos los datos personales de la persona fallecida en internet, correos electrónicos, perfiles en redes sociales o blogs, así como cualquier dato personal que figure en internet.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Segunda Opinión Médica</strong> en caso de enfermedad grave por médicos a nivel nacional e internacional de reconocido prestigio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia vida diaria por fallecimiento</strong>. Allianz ofrece una serie de servicios a domicilio el cónyuge o familiares del fallecido: ayuda para hijos menores de 16 años o discapacitados, cuidado de mascotas, asistencia en tareas diarias, traslado, transmisión de mensajes urgentes.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia psicológica</strong> para los familiares del fallecido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro Dental</strong> con acceso a una amplia red de odontólogos en toda España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia Médica:</strong> podrás acceder a especialistas y pruebas médicas a precios especiales.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Hospitalización:</strong> recibe una indemnización diaría por cada día que pases hospitalizado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatrición de Extranjeros:</strong> Si eres extranjero y resides en España con esta garantía en caso de fallecimiento podrás regresar a tu país de origen acompañado de un familiar.</th>
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
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Allianz</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de contratar tu Seguro con Allianz Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar Allianz Decesos?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Hasta los 70 años.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Tengo que cumplimentar cuestionario de salud?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos de Allianz.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi póliza con Segurcaixa Decesos?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Podrá asegurar en la misma póliza todos los asegurados que necesite.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿Cuál será el capital asegurado?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Allianz automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Existe algún descuento por número de asegurados?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><p>No, no existe ningún descuento.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Qué incluye el Borrado de Huella Digital de Allianz Decesos?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Con este servicio se tramita la desaparición de toda la imagen digital del fallecido; sus emails, sus perfiles en las redes sociales o blogs. Y todos sus datos personales que pudieran estar online como el teléfono, imágenes, DNI, transacciones, etc... Contratando esto, la familia del asegurado se ahorrará todo este tedioso proceso.</p>
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