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

	$head_title = 'Reale Seguros Decesos ▷ Calcular Precios y Coberturas';
	$head_descripcion = 'Consulta las coberturas del Seguro de Decesos de Reale - Compara precios y coberturas de Reale Decesos con otras 20 aseguradoras y consigue tu precio personalizado.';
	$head_keywords = '';
	$noindex = false;
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-reale.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Reale</h2><hr>
	<p class="text-center titulo-descripcion">
					Un seguro de decesos con los precios más ajustados
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/reale/reale-seguro-decesos.webp" type="image/webp">
  <source srcset="images/reale/reale-seguro-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/reale/reale-seguro-decesos.png" alt="reale seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Servicio Completo de Decesos y Asistencia</h3>
				<p class="description text-muted">
					Con Reale Decesos tendrás cubiertos todos los gastos del sepelio, toda la asistencia jurídica y documental posterior al fallecimiento, el traslado funerario y la repatriación a España.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-2"></i>
				</div>
				<h3 class="title">2 modalidades de seguro de decesos</h3>
				<p class="description text-muted">
					 Reale te ofrece 2 modalidades de su seguro de decesos para que elijas el que más se adapte a lo que buscas y a tu economía. Ofrece Reale Decesos Completo y Básico.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-person-cane"></i>
				</div>
				<h3 class="title">Seguro de Decesos, tambien para los mayores</h3>
				<p class="description text-muted">
					Reale también tiene un seguro de decesos para los mayores. Ofrece un seguro de prima única para los mayores de 65 años.
				</p>
			</div>			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Reale</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-bed-pulse"></i>
  <div class="card-body">
    <h3 class="card-title azul">Indemnización diaria por hospitalización</h3><hr class="line">
    <p class="card-text">Si contratas el seguro de decesos completo de Reale, tendrás la garantía de recibir hasta 60€/día en caso de hospitalización.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-hand-holding-hand"></i>
  <div class="card-body">
    <h3 class="card-title azul">Ayuda a la dependencia</h3><hr class="line">
    <p class="card-text">Asistencia en actividades diarias a personas que necistan ayuda por enfermedad o discapacidad.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-person-falling-burst"></i>
  <div class="card-body">
    <h3 class="card-title azul">Cobertura de accidentes</h3><hr class="line">
    <p class="card-text">Con la modalidad Completa tendrás incluida una indemnización en caso de fallecimiento o incapacidad permanente absoluta provocada por un accidente.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué coberturas nos ofrece el Seguro de Decesos Ocaso?</h2>
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
      <th scope="row"><strong>Servicio de entierro o incineración</strong>. Con Reale tendrás cubiertos todos los gastos de la organización del funeral (flores, coche fúnebre, tanatorio, féretro o urna...).</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Podréis elegir el cementerio que quieras de España para ser enterrado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Fallecimiento de hijos no asegurados</strong>. Reale cubre los gastos del funeral de los hijos, si ocurriese durante el periodo de gestacion en caso de aborto o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Trámites y Certificados</strong>. Reale se encarga de gestionar y pedir los certificado de defunción, convivencia, últimas voluntades, actualizar el Libro de Familia y de tramitar las pensiones de viudedad y orfandad..</th>
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
      <th scope="row"><strong>Traslado Funerario</strong>. Traslado del cuerpo desde cualquier lugar de España hasta el cementerio elegido.</th> 
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong> para viajes al extranjero no superiores a 90 días</th>
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
      <th scope="row">Gestiones y gastos necesarios para el traslado del fallecido en cualquier lugar de España o del resto del mundo, hasta el cementerio o planta incineradora del territorio español elegida por los familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr> 
    <tr>
      <th scope="row"> Prestaciones como consecuencia de accidente o enfermedad grave, en el transcurso de un viaje en el extranjero.</th>
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
      <th scope="row"><strong>Asistencia a acompañantes:</strong> Reale ofrece para los acompañantes servicios como coche o catering.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia Psicológica:</strong> Teléfono 24 horas de asistencia psicológica para el asegurado y para sus familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Ayuda testamentaria:</strong> Servicio de ayuda para la gestión del testamento y sucesiones.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asesoramiento Jurídico:</strong> Servicio completo de asistencia jurídica para los familiares y así realizar correctamente todos los trámites posteriores al fallecimiento.</th>
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

<!------------------PRODUCTOS-------------------------->
<section class="bg-light productos">
<div class="container py-2 height-title">
	<h2 class="text-center azul">Descubre los Seguros de Decesos de Decesos de Reale</h2><hr>
	<div class="d-flex flex-wrap justify-content-around flex3 pt-5">
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Reale Contigo Decesos</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/reale/reale-decesos-contigo.webp" type="image/webp">
  <source srcset="/images/reale/reale-decesos-contigo.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/reale/reale-decesos-contigo.jpg" title="Reale Decesos" alt="Reale seguros decesos" width="375" height="187" loading="lazy">
			</picture>
			<p class="display4 px-5 pt-5">Las coberturas más destacadas y ventajas únicas para tu familia.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>Entierro o incineración:</strong> Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Traslado funerario Nacional e Internacional.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>Gestión y tramitación de certificados:</strong> Certificado de defunción, últimas voluntades o matrimonio.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>Asistencia en Viaje</strong> en todo el mundo.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>2 modalidades a elegir:</strong> Completa o Básica.</li>
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="reale">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		<div class="border d-flex flex-column justify-content-between">
			<h3 class="azul text-center py-2 height-title"><strong>Prima Única Reale</strong></h3>
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/reale/reale-decesos-prima-unica.webp" type="image/webp">
  <source srcset="/images/reale/reale-decesos-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/reale/reale-decesos-prima-unica.jpg" title="Precio Seguro Decesos Prima Unica" alt="Reale Decesos Prima Única" width="375" height="187" loading="lazy">
			</picture>
			<p class="display4 px-5 pt-5">Exclusivo para mayores de 65 años.</p>
			<ul class="px-5 py-4">
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> La prima del seguro es nivelada, por lo que, <strong>la variación anual del coste del seguro será muy pequeña</strong>.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> Paga tu seguro de decesos <strong>en una única cuota</strong>.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>Repatriación:</strong> Con este seguro tienes cubierta la repatriación a España desde cualqueir país del mundo.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong>Asistencia psicológica</strong> para el asegurado y sus familiares.</li>
				<li><i aria-hidden="true" class="fa fa-caret-right verde"></i> <strong></strong> en todo el mundo.</li>	
			</ul>
			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="reale"><input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"> <button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
		</div>
		
	</div>
</div>
</section>
<!-----------------FIN PRODUCTOS----------------------->








<!----------------------COBERTURAS OPCIONALES------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul mt-5">Además, podrás completar tu seguro de decesos Reale con las siguientes coberturas:</h2><hr>
	<div class="row px-2 px-md-5  align-items-center">
		<div class="col-lg-6 icon-boxes py-5">
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-scale-balanced"></i>
				</div>
				<h4 class="title">Pack Legal</h4>
				<p class="description text-muted">
					Si contratas este pack disfrutarás de asesoramiento completo para la redacción y firma del testamento hereditario y vital.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h4 class="title">Pack Asistencia</h4>
				<p class="description text-muted">
					 Coberturas adicionales de apoyo para ti y tu familia, como asistencia psicológica, asistencia post-hospitalaria y apoyo para hijos menores o personas dependientes y ayuda. 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-briefcase-medical"></i>
				</div>
				<h4 class="title">Pack Salud</h4>
				<p class="description text-muted">
					Descuentos en tratamientos e intervenciones médicas, atención médica 24 horas por teléfono y precios especiales en servicios de podología o acupuntura.
				</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/reale/coberturas-opcionales-reale.webp" type="image/webp">
  <source srcset="images/reale/coberturas-opcionales-reale.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/reale/coberturas-opcionales-reale.jpg" alt="reale seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>
<!---------------------FIN COBERTURAS OPCIONALES----------------->


<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre Reale Seguros de Decesos</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Reale Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Cuál es la edad máxima para contratar Reale Decesos?
      </button>
    </h3>
        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Este seguro es contratable hasta los 75 años de edad actuarial, esa es la edad límite.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        ¿Reale Decesos permite el entierro en cualquier lugar?
      </button>
    </h3>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, contratando este seguro, tú o tu familia podréis elegir el lugar que queráis dentro de España para el entierro o incineración, cualquier cementerio o planta incineradora.</p>
      </div>
    </div>
  </div>  
  </div>
  <!----------------------------------------------------------------------------->
<div class="col-md-6"> 
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Se puede fraccionar el pago en el seguro de decesos Reale?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Claro que sí, podrás pagar de forma trimestral, semestral o anual, puedes eleigr la forma de pago que mejor se ajuste a sus necesidades, salvo que se trate del seguro de prima única.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        ¿A partir de qué edad se puede contratar el seguro de decesos de prima única de Reale?
      </button>
    </h3>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Este seguro es contratable para las personas mayores de 65 años.</p>
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







