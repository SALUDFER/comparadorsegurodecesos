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

	$head_title = 'Santa Lucía Decesos ✝ Seguro de Decesos Santalucía ▷  Qué cubre y Precios';
	$head_descripcion = 'Consulta toda la información sobre el Seguro de Decesos de Santalucia ➞ Precio, Coberturas, Indemnizaciones, Teléfono, Opiniones de Clientes y Cuadro Médico ➞  Comparador Precios y Coberturas de Seguros de Decesos.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-santalucia.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Santa Lucía</h2><hr>
	<p class="text-center titulo-descripcion">
					El Seguro de Asistencia Familiar Plus de Santa Lucía que garantiza la máxima tranquilidad en los momentos más difíciles.
	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/santalucia/seguro-de-decesos-santalucia.webp" type="image/webp">
  <source srcset="images/santalucia/seguro-de-decesos-santalucia.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/santalucia/seguro-de-decesos-santalucia.png" alt="seguro decesos santa lucia coberturas" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-plane"></i>
				</div>
				<h3 class="title">La más amplia cobertura de asistencia en viaje</h3>
				<p class="description text-muted">
					Santa Lucía Decesos te ofrece las mayores coberturas en tus viajes. Compensación por anulación de viaje, localización de equipajes, pago de estancia y viaje para acompañante o repatriación por enfermedad.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-umbrella"></i>
				</div>
				<h3 class="title">Asistencia para pequeños y mayores</h3>
				<p class="description text-muted">
					Santa Lucía se preocupa por el bienestar de toda tu familia, por eso su seguro de decesos ofrece ventajas y coberturas únicas para los mayores de 65 años y los menores de 17.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h3 class="title">Repatriación</h3>
				<p class="description text-muted">
					Santa Lucía ofrece cobertura de repatriación funeraria, tanto si estás expatriado, como si eres un extranjero residente en España..
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos de Santalucía</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-6"></i>
  <div class="card-body">
    <h3 class="card-title azul">6 modalidades de seguro de decesos</h3><hr class="line">
    <p class="card-text">Seguros para emigrantes, para inmigrantes, para mayores de 65 años, para menores de 40, con más o menos coberturas. Santa Lucía tiene un seguro de decesos para cada persona.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-percent"></i>
  <div class="card-body">
    <h3 class="card-title azul">Descuento en otros servicios</h3><hr class="line">
    <p class="card-text">Por ser asegurado de Santa Lucía tendrás entre un 10% y un 30% de descuento en bares, restaurantes, ocio, centros de belleza, alquiler de oches y más.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-dna"></i>
  <div class="card-body">
    <h3 class="card-title azul">Farmacogenética</h3><hr class="line">
    <p class="card-text">Santa Lucía te ofrece un análisis genético para personalizar tu tratamiento contra cáncer o trombosis </p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>

<!----------------------FIN VENTAJAS------------------->
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul pt-5 pb-5 padding_especial">¿Qué cubre el Seguro de Decesos Santa Lucía?</h2>
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
      <th scope="row"><strong>Servicio de entierro o incineración.</strong> Santa Lucía te cubre todos los gastos del servicio de sepelio.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>  
      <th scope="row"><strong>Libre elección de cementerio</strong>. Tú o tus familiares podréis elegir cualquier cementerio dentro de España para el entierro.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
   	<tr>
      <th scope="row"><strong>Traslado y estancia en velatorio (tanatorio)</strong></th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio fúnebre de hijos menores de 30 días.</strong> Cubre los gastos del Fallecimiento de hijos no asegurados si ocurriese durante el periodo de gestacion o antes de cumplir los 30 días.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia jurídica.</strong> Santa Lucía gestiona la de obtención de los certificados de: defunción, matrimonio, convivencia, nacimiento, del Registro de Contratos de Seguros de Cobertura de Fallecimiento. Gestiona la baja del Libro de Familia, la declaración de herederos y tramita la solictud de pensiones de viudedad, orfandad, invalidez y el auxilio por defunción.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Asesoramiento extrajudicial.</strong> Asesoramiento para ti y tus familiares sobre: sucesiones, seguros, productos financieros, contratos de arrendamiento, cambios de tiularidad y reclamaciones a terceros.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong>Asistencia psicológica.</strong>. Servicio de atención psicológica para los familiares supervivientes.</th>
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
      <th scope="row"><strong>Traslado Nacional.</strong> Traslado del cuerpo hasta el cementerio o crematorio que hayas designado.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Transporte de acompañante nacional.</strong> Pago de billetes de transporte y de estancia (si fuera necesaria) para un acompañante del cuerpo, hasta el lugar del siniestro y al lugar de la inhumación o incineración.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
    <tr>
      <th scope="row"><strong>Traslado Internacional.</strong> Traslado funerario desde cualquier país hasta el cementerio o crematorio que hayas designado en España.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>

      <th scope="row"><strong>Transporte de acompañante internacional.</strong> Pago de billetes de transporte y de estancia (si fuera necesaria) para una persona designada que acompañe al cuerpo, hasta el lugar del siniestro y al lugar de la inhumación o incineración.</th>
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
      <th scope="row"><strong>Traslado en ambulancia.</strong> En caso de accidente o enfermedad ocurrido en España, Santa Lucía paga los gastos del transporte has el centro médico.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Compensación por anulación de viaje.</strong> Santa Lucía te devuelve hasta 600€ en caso de que tengas que anular un viaje por hospitalización o fallecimiento tuyo, de tu cónyuge o de tus hijos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Compensación por pérdida de conexiones.</strong> Santa Lucía te devuelve hasta 200€ en caso de cancelación o retraso de una conexión entre 2 trayectos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de documentos y objetos olvidados.</strong> Se incluye el envío de objetos y documentos a la dirección que elijas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Reembolso por demora de equipajes.</strong> Si hubiera una demora de más de 24 horas en la entrega del equipaje, Santa Lucía te reembolsará el precio de los artículos.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Localización de equipaje.</strong> Santa Lucía gestiona la búsqueda de tu equipaje, en caso de pérdida.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Pago de viaje y estancia para acompañante por hospitalización.</strong> Si sufres un accidente estando en el extranjero y tienes que ser hospitalizado, Santa Lucía le pagará los billetes de ida y vuelta y la estancia a la persona que quieras que te acompañe.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Cuidado de pequeños y mayores.</strong> Si por hospitalización en el extranjero, la persona con la que convives tuviera que desplazarse y dejara solo en casa a un hijo menor o alguien mayor, Santa Lucía te reembolsa los gastos por la contratación de servicios de ayuda.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia a hijos menores.</strong> En caso de hospilización en el extranjero, si viajas con algún hijo menor, Santa Lucía les pagará el billete de vuelta y con un acompañante.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong><strong>Regreso anticipado.</strong> Santa Lucía te reembolsa los gastos del viaje de vuelta, si tuvieras que interrumpir tu viaje por fallecimiento de un familiar o cónyuge.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos médicos en el extranjero.</strong> Con este seguro tendrás garantizados hasta 15.000€ para gastos médicos de urgencia en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Gastos de prolongación de estancia en hotel.</strong> Si por asuntos médicos debes quedarte más tiempo en el extranjero, Santa Lucía se hace cargo del pago del hotel en esos días adicionales.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
            <tr>
      <th scope="row"><strong><strong>Anticipo de fondos.</strong> Santa Lucía te anticipa dinero en caso de accidente, enferemdad, robo, honorarios de abogado y fianzas en el extranjero.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicio de intérprete.</strong> Si fuera necesario, Santa Lucía pone a tu disposición un servicio de intérprete para cubrir tus necesidades médicas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de especialista a domicilio.</strong> Si no pudieras acudir al hospital estando en el extranjero por imposibilidad física, Santa Lucía gestiona el envío de un especialista médico a tu lugar de estancia.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
          <th scope="row"><strong><strong>Transmisión de mensajes urgentes.</strong> Servicio de información 24 horas para comunicación con la aseguradora o familiares.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Repatriación sanitaria urgente</strong>. Santa Lucía se hace cargo de la repatriación a España, en caso de que tuvieras un accidente grave estando en el extranjero </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Envío de medicamentos al extranjero.</strong> Gestión del envío de los medicamentos necesarios a la dirección que indiques.</th>
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
        <i class="fa-solid fa-children"></i>ASISTENCIA A HIJOS MENORES
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Gestión de conexiones para ayuda a menores.</strong> Santa Lucía te pone en contacto con servicios de cuidado de menores, enfermería o profesores a domicilio para tu hijo/a menor de 17 años.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Seguro de vida para recién nacidos.</strong> Si tienes un hijo, Santa Lucía hará un ingreso de 300€ en un seguro de vida ahorro para el recién nacido.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicios médicos y bienestar para tu hijo.</strong> Santa Lucía te asegura el reembolso de los siguientes servicios médicos y de bienestar anuales para tu hijo: 2 consultas pediátricas, 1 consulta oftalmológica, 1 revisión auditiva, 1 consulta logopédica y 1 consulta psicológica.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Segundo diagnóstico psicológico.</strong> Acceso a un 2º diagnóstico psicológico en caso de fracaso escolar.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Formación asistencial.</strong> Acceso a programa especial de formación para familias cuyos hijos padezcan asma, diabetes, hiperactividad, eneuresis, trastornos alimenticios o alergias. </th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    
  </tbody>
        </table>
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <i class="fa-solid fa-person-cane"></i>ASISTENCIA A MAYORES
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    
    <tr>
      <th scope="row"><strong>Chequeo anual.</strong> Santa Lucía ofrece una evaluación geriátrica integral anual.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Teleasistencia.</strong> Instalación de transmisor en domicilio para asistencia 24 horas.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia 24 horas.</strong> A través del transmisor, Santa Lucía podrá enviar asistencia a casa, localizar al asegurado, realizar un seguimiento para poder ayudarle a cualquier hora del día, los 365 días del año.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Formación para cuidador.</strong> Santa Lucía instruirá un cuidador, que elija el asegurado, en el cuidado de personas mayores y/o dependientes.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Ingreso en residencia.</strong> Santa Lucía ofrece 10 días anuales de ingreso en centro Ballesol, si la dependencia de la persona es de grado III.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Consultas médicas.</strong> Acceso al cuadro médico de especialitas geriátricos de Santa Lucía, con 2 consultas médico-geriátricas incluidas, sin coste.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Servicios médicos.</strong> Con este seguro de decesos se incluyen una serie de servicios médicos anualmente: 1 consulta médico-geriátrica, 1 consulta oftalmológica, 1 revisión auditiva y 1 consulta psicológica.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Conexión con centros de 3ª edad.</strong>Facilidades en el acceso a centros residenciales para la 3ª con los que Santa Lucía tiene conexión.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
        <tr>
      <th scope="row"><strong>Conexión con reparadores.</strong> Servicio de conexión con profesionales como jardineros, albañiles, marmolista... para arreglos en casa.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Inspección técnica y limpieza de la vivienda.</strong> Diagnóstico preventivo de la vivienda y conexión con servicio de limpieza profesional.</th>
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
<!---------------------PRODUCTOS--------------------------------->
<section class="bg-light productos">
<div class="container py-5">
  <h2 class="text-center azul">
    Descubra los Seguros de Decesos de Santalucía
  </h2>
  <div class="d-flex flex-wrap justify-content-between flex3 pt-5">
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
     <strong> Santalucía<br>Asistencia Familiar Plus</strong>
    </h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/santalucia/santalucia-familiar-plus.webp" type="image/webp">
  <source srcset="/images/santalucia/santalucia-familiar-plus.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/santalucia/santalucia-familiar-plus.jpg" title="Asistencia Familiar Plus Santa Lucia" alt="Santa Lucia Asistencia Familiar Plus" width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Contratable hasta los 75 años</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Prima Nivelada</strong>, evitando aumentos significativos en el precio de la prima al llegar a edades avanzadas </li>
     <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Traslado Nacional e Internacional. </li>
  	<li><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia en Viaje en todo el mundo.</li>
      <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Coberturas Opcionales:</strong> Peque Asistencia, Asistencia Senior, SOS Salud y Bienenestar con acceso a medicina privada a precios especiales</li>
    </ul>
    <a class="saber_mas" href="/articulos/prima-nivelada-santalucia" title="Prima Nivelada Santalucía"><i class="fa fa-caret-right" aria-hidden="true"></i> Saber más</a>
  			<form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="santalucia">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
			</form>
  </div>
<div class="border d-flex flex-column justify-content-between">
   <h3 class="azul text-center py-2 height-title">
      <strong>Santalucía<br>Asistencia Familiar iPlus</strong>
    </h3>
  <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/santalucia/santalucia-familiar-iplus.webp" type="image/webp">
  <source srcset="/images/santalucia/santalucia-familiar-iplus.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/santalucia/santalucia-familiar-iplus.jpg" title="Santa Lucia Decesos" alt="Seguro de Decesos Santa Lucia" width="375" height="187" loading="lazy">
			</picture>
  <ul class="px-5 py-4">
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Contratable hasta los 75 años</li>
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Prima Natural</strong>, cuotas más reducidos al principio.</li>
    <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Entierro o incineración: </strong>Servicio de decesos completo adaptado al deseo de cada asegurado y a las costumbres locales.</li>
  	<li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Traslado Nacional e Internacional. </li>
  	<li><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia en Viaje en todo el mundo.</li>
    <li><i class="fa fa-caret-right verde" aria-hidden="true"></i> <strong>Coberturas Opcionales:</strong> Accidentes, Peque Asistencia, Asistencia Senior, Médico-Asistencial para consultas telefónicas y con acceso a servicios sanitarios y dentales a precios especiales</li>
  </ul>
  <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="santalucia">
              <input name="tipoSeguroInteresado" type="hidden" value="COMPLETO"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
              </form>
  </div>
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
      <strong>Santalucía<br> Asistencia Senior Prima Única</strong>
    </h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/santalucia/santalucia-decesos-prima-unica.webp" type="image/webp">
  <source srcset="/images/santalucia/santalucia-decesos-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/santalucia/santalucia-decesos-prima-unica.jpg" title="Seguro Decesos Prima Unica Santa Lucia" alt="seguro decesos prima única santa lucia" width="375" height="187" loading="lazy">
			</picture>
    <ul class="px-5 py-4">
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Exclusivo para mayores de 70 años que no tengan seguro de decesos</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Precios únicos para un seguro de decesos de prima única</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Un seguro individual con Modalidad de Prima Única</li>
      <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Válido en cualquier lugar del mundo donde se produzca el fallecimiento</li> <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Otorgamiento de testamento notarial en España</li>
       <li class="mb-4"><i class="fa fa-caret-right verde" aria-hidden="true"></i> Asistencia jurídica en caso de fallecimiento</li>
    </ul>
    <a class="saber_mas" href="/seguro-decesos/santa-lucia-decesos/prima-unica" title="Santalucía Decesos Prima única"><i class="fa fa-caret-right" aria-hidden="true"></i> Saber más</a>
    <form action="/comparador-compania" method="post">
				<input name="compa_temp" type="hidden" value="santalucia">
              <input name="tipoSeguroInteresado" type="hidden" value="UNICA"><button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">CALCULAR PRECIOS</button>
              </form>
  </div>
  </div>
</div>
</section>
<!------------------------FIN PRODUCTOS------------------------>
<!----------------------COBERTURAS OPCIONALES------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul mt-5">Además, podrás ampliar tu póliza de decesos Santalucía con las mejores coberturas opcionales</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-6 icon-boxes py-5">
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-scale-balanced"></i>
				</div>
				<h4 class="title">Protección jurídica integral</h4>
				<p class="description text-muted">
					Con la que podrás resolver cualquier duda legal de índole personal de la vida privada o profesional como: multas, arrendamientos, problemas con profesionales o comercios, etc. Cubre gastos judiciales y extrajudiciales.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-percent"></i>
				</div>
				<h4 class="title">Descuento en servicios médicos</h4>
				<p class="description text-muted">
					 Con Santa Lucía Decesos tendrás acceso a más de 20.000 profesionales y centros médicos por toda España con descuentos especiales.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-hospital"></i>
				</div>
				<h4 class="title">Indemnización por hospitalización</h4>
				<p class="description text-muted">
					Y en caso de estar hospitalizado, el seguro de decesos de Santa Lucía te ofrece una indemnización diaria.
				</p>
			</div>
		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/santalucia/coberturas-opcionales-santalucia.webp" type="image/webp">
  <source srcset="images/santalucia/coberturas-opcionales-santalucia.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/santalucia/coberturas-opcionales-santalucia.jpg" alt="santalucia seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>
<!---------------------FIN COBERTURAS OPCIONALES----------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos Santalucía</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Santalucía Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar el seguro de decesos Santalucía?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Santalucía Asistencia Plus e iPlus:</strong> Hasta los 75 años.</p>
		<p><strong>Santalucía Senior a Prima Única:</strong> Desde los 65 años en adelante.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar el seguro de decesos.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi póliza de decesos?
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
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Santa Lucía automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        ¿Qué carencias tiene Santalucía Decesos?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Santalucía Asistencia Familiar Plus e iPlus :</strong></p>
           <ul>
           	<li><i class="fa fa-caret-right" aria-hidden="true"></i> 2 meses para la garantía de decesos</li>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i> 3 meses para la cobertura de protección jurídica integral, excepto el servicio telefónico y la reclamación de multas que no tiene carencia.</li>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i> 3 meses para la garantía de Residentes en España (extranjeros)</li>
           </ul>
		<p><strong>Santalucía Asistencia Senior Prima Única:</strong> No tiene carencias.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        ¿Qué es el Testamento Online que ofrece Santalucía Decesos?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       	<p>El <a href="/articulos/testamento-online" title="Testamento Online" target="_blank">testamento online</a> es una herramienta gratuita que ofrecen para sus asegurados, donde podrás gestionar tu testamento con cobertura legal, asesoría personalizada y continua. Una manera vinculante y sencilla de gestionar algo tan importante.</p>
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