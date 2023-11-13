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

	$head_title = 'Seguro Fiatc Decesos ▷ Calcular Precio Personalizado ';
	$head_descripcion = 'FIATC Decesos ▷ Opiniones, Precios, Coberturas, Cuadro médico ▷ Encuentra aquí toda la información sobre el seguro de decesos de FIATC.';
	$head_keywords = '';
?>
<html lang="es">
	<?php
	include ('../modulos/head.php');
	?>
<body>
	<?php
	include ('../modulos/header.php');
	include ('../modulos/banner-fiatc.php');
	?>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul">Seguro de Decesos Fiatc</h2><hr>
	<p class="text-center titulo-descripcion">
					Fiatc, Seguros de asistencia familiar y decesos, con diferentes modalidades que se adaptan a tus necesidades y las de tus seres queridos.

	</p>
	<div class="row px-2 px-md-5 align-items-center">
		<div class="col-lg-5 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/fiatc/fiatc-seguro-decesos.webp" type="image/webp">
  <source srcset="images/fiatc/fiatc-seguro-decesos.png" type="image/png">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/fiatc/fiatc-seguro-decesos.png" alt="fiatc seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		<div class="col-lg-7 icon-boxes py-5">
			
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-dove"></i>
				</div>
				<h3 class="title">Un seguro de decesos completo y fiable</h3>
				<p class="description text-muted">
					Con Fiatc tendrás la seguridad de tener cubiertos todos los gastos funerarios y además realizan todas las gestiones posteriores a la defunción, es decir, está cuando lo necesitas. 
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h3 class="title">Grandes opiniones entre sus asegurados</h3>
				<p class="description text-muted">
					 Sus asegurados valoran muy postiivamente la gran tranquilidad que ofrece Fiatc a los familiares, ya que en los momentos más complicados se encarga en todo momento de la protección del fallecido.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-earth-americas"></i>
				</div>
				<h3 class="title">Repatriación para extranjeros y para expatriados</h3>
				<p class="description text-muted">
					Fiatc ofrece coberturas de repatriación, tanto para los extranjeros residentes en España, como para los españoles que viven en otro país.
				</p>
			</div>
			

		</div>
		
	</div>
</div>
<!--------------------------VENTAJAS------------------->
<section class="bg-light py-5 ventajas3">
	<div class="container">
		<div class="section-title mt-4 text-center pb-md-5">
          <h2 class="azul titulo-especial">Todas las ventajas del Seguro de Decesos Fiatc</h2><hr>
        </div>
	<div class="row justify-content-center cobertura-producto pb-5">
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-heart"></i>
  <div class="card-body">
    <h3 class="card-title azul">Prima mixta o nivelada</h3><hr class="line">
    <p class="card-text">Con Fiatc Decesos puedes elegir entre las modalidades de prima mixta o nivelada.</p>
  </div>
</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-money-bill-transfer"></i>
  <div class="card-body">
    <h3 class="card-title azul">Devolución del capital sobrante</h3><hr class="line">
    <p class="card-text">Si el sepelio vale menos que el capital asegurado, Fiatc devolverá la diferencia a los familiares.</p>
  </div>
</div>
		</div>
		
		<div class="col-md-4 d-flex">
			<div class="card shadow text-center">
  <i class="fa-solid fa-globe"></i>
  <div class="card-body">
    <h3 class="card-title azul">Asistencia en el extranjero</h3><hr class="line">
    <p class="card-text">Con este seguro tendrás cubierta la repatriación, la asistencia médica internacional o el desplazamiento de un familiar a otro país por hospitalización.</p>
  </div>
</div>
		</div>
		
	</div>
	</div>
</section>
<!----------------------TABLA COBERTURAS------------------->
<section class="container py-5 mb-5 coberturas-cia">
	<h2 class="text-center titulo-especial azul mt-5">¿Qué coberturas nos ofrece el Seguro de Decesos Fiatc?</h2><hr>
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
      <th scope="row"><strong>Servicio de sepelio</strong>. Fiatc ofrece un servicio completo de entierro o incineración. Arca, coche fúnebre, capilla o tanatorio, libro firmas, flores, coronas, recordatorios...</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Libre elección de funeraria y cementerio</strong>. La familia o el fallecido podrán elegir cualquier cementerio en España para el entierro. </th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Servicio fúnebre especial Neonatos</strong>, se garantiza la prestación del servicio fúnebre en caso de fallecimiento de los hijos del asegurado durante el periodo de gestación o antes de cumplir los 30 días de vida</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Traslado nacional e internacional</strong> del fallecido hasta el cementerio o planta incineradora de España elegido por el asegurado o sus familiares.</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
     <tr>
      <th scope="row"><strong>Asesoría jurídica</strong> para todos los trámites a realizar con motivo del fallecimiento del asegurado, como el testamento o la herencia.</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Asistencia administrativa y gestoría</strong> Tratamitación y gestión de: certificado de defunción, partida de nacimiento, últimas voluntades, baja en el libro de familia, obtención del auxilio por defunción, pensión de viudedad, pensión de orfandad, etc.</th>
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
      <th scope="row"><strong>Traslado Nacional</strong> hasta el lugar que hayan elegido para la incineración o entierro.</th>
      <td><i class="fa-solid fa-circle-check"></i></td>
    </tr>
    <tr>
      <th scope="row"><strong>Internacional</strong>  para viajes al extranjero no superiores a 90 días.</th>
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
      <th scope="col"><strong>Traslado internacional</strong> del asegurado fallecido hasta su país de origen.</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Asistencia sanitaria</strong> del asegurado herido o enfermo	(Hasta 12.000€) en el extranjero.</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Repatriación o transporte de heridos</strong> hasta centro médico. </th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Repatriación o transporte de menores de 15 años</strong></th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Desplazamiento de familiar en caso de hospitalización del asegurado</strong>. Incluidos gastos de estancia, hasta 150€/día</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Regreso anticipado por fallecimiento de familiar</strong>. Fiatc se encarga de gestionar y pagar el transporte para el asegurado. </th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Ampliación de estancia en hotel</strong> internacional por convalecencia.</th>
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
        <i class="fa-solid fa-umbrella"></i>OTRAS COBERTURAS
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table class="table table-striped tabla-coberturas">
        	<tbody>
    <tr>
      <th scope="col"><strong>Trámites de Gestoría:</strong> Tramitación de los papeles de después del fallecimiento (pensiones, bajas, literales, libro de familia, últimas voluntades…).</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Descuentos Dentales</strong> en una amplia red de odontólogos en toda España, incluye una limpieza bucodental gratuita anual.</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
         <th scope="col"><strong>Testamento vital y online:</strong> Asistencia para la gestión y elaboración del testamento, y los trámites notariales.</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Gestion del final de la vida digital:</strong> Fiatc se encarga de borrar de internet todo los datos personales que puedan aparecer del asegurado en internet, redes sociales, foros...</th>
       <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>
       <tr>
      <th scope="col"><strong>Servicio de ayuda legal</strong> en control de alcoholemia, accidente de tráfico, robo o privación de libertad, etc.…	</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>      
           <tr>
      <th scope="col"><strong>Ayuda a dependientes:</strong> Teléfono de asistencia para personas dependientes</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>      
           <tr>
      <th scope="col"><strong>Revisión y elaboración de contratos:</strong> Ayuda profesional para la revisión y elaboración de contratos de compraventas, hipotecas, seguros...</th>
      <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
    </tr>      
               <tr>
      <th scope="col"><strong>Servicios médicos:</strong> Servicio digital para consultas médicas, teléfono de atención 24 horas, 2ª opinión médica, asistencia psicológica.</th>
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
<!---------------------PRODUCTOS------------------------------------>
<section class="bg-light productos">
<div class="container py-5">
  <h2 class="text-center azul mt-5">
    Descubre los Seguros de Decesos de Fiatc
  </h2><hr>
  <p>
    Fiatc cuenta con diferentes tipos de modalidades para adaptarse a cada persona por ello tiene los siguientes tipos en sus diferentes pólizas de los seguros de decesos:
  </p>
  <div class="d-flex flex-wrap justify-content-between flex3 pt-3">
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
      <strong>Fiatc Decesos Prima Mixta</strong>
    </h3> 
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/fiatc/fiatc-decesos-prima-mixta.webp" type="image/webp">
  <source srcset="/images/fiatc/fiatc-decesos-prima-mixta.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/fiatc/fiatc-decesos-prima-mixta.jpg" alt="Seguro Decesos Fiatc"  width="375" height="187" loading="lazy">
			</picture>	
    
    
    <p class="display4 px-5 pt-5">Un seguro de decesos que se nivela a los 70 años para las personas más jóvenes que quieran tener este riesgo asegurado y pagando una prima muy asequible.</p>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
   <!-- <form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="fiatc">
      					<input type="hidden" name="tipoSeguroInteresado" value="COMPLETO">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>-->
  </div>
<div class="border d-flex flex-column justify-content-between">
   <h3 class="azul text-center py-2 height-title">
      <strong>Fiatc Decesos Prima Nivelada</strong>
    </h3>
  <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/fiatc/fiatc-decesos-prima-nivelada.webp" type="image/webp">
  <source srcset="/images/fiatc/fiatc-decesos-prima-nivelada.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/fiatc/fiatc-decesos-prima-nivelada.jpg" title="Fiatc Decesos Prima Nivelada" alt="Fiatc Seguros Decesos" width="375" height="187" loading="lazy">
			</picture>	
			
			
  <p class="display4 px-5 pt-5">
    Para las personas que prefieran prima nivelada, Fiatc ofrece una de las primas más competitivas del mercado estando por debajo en precio de compañías como Santalucía, Ocaso o Mapfre.
  </p>
  <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
   <!--<form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="fiatc">
     					<input type="hidden" name="tipoSeguroInteresado" value="COMPLETO">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>-->
  </div>
  <div class="border d-flex flex-column justify-content-between">
    <h3 class="azul text-center py-2 height-title">
      <strong>Fiatc Decesos Prima Única</strong>
    </h3>
    <picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="/images/fiatc/fiatc-decesos-prima-unica.webp" type="image/webp">
  <source srcset="/images/fiatc/fiatc-decesos-prima-unica.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="/images/fiatc/fiatc-decesos-prima-unica.jpg" title="Fiatc Decesos Prima Única" alt="Seguro de Decesos Pago Unico"  width="375" height="187" loading="lazy">
			</picture>	
    <p class="display4 px-5 pt-5">Un seguro de decesos exclusivo para los mayores de 65 años. Fiatc ofrece el seguro de prima única que también es uno de los más asequibles del mercado.
</p>
    <a href="/comparador-compania" class="btn btn-secondary btn-lg btn-block btn-verde" title="Comparar Seguros de Decesos">CALCULAR PRECIOS</a>
    <!--<form action="/comparador-compania" method="POST">
						<input type="hidden" name="compa_temp" value="fiatc">
      					<input type="hidden" name="tipoSeguroInteresado" value="UNICA">
						<button class="btn btn-secondary btn-lg btn-block btn-verde" name="button">
							CALCULAR PRECIOS
						</button>
					</form>-->
  </div>
  </div>
</div>
</section>
<!---------------------FIN PRODUCTOS------------------------------------>
<!-----------------COBERTURAS OPCIONALES------------------------>
<div class="container about py-5">
	<h2 class="pb-2 text-center azul titulo-especial">Y además, sólo por ser asegurado de Fiatc tendrás acceso exclusivo al FIATC Life</h2><hr>
	<div class="row px-2 px-md-5 align-items-center">
		
		<div class="col-lg-6 icon-boxes py-5">
			<h3>Descuentos exclusivos en servicios médicos, estéticos o nutrición.</h3>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-user-doctor"></i>
				</div>
				<h4 class="title">Servicios Médicos</h4>
				<p class="description text-muted">
					Ofertas especiales en chequeos generales, ginecológicos, hernia, cesárea, artroscopia o cirugía
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-star"></i>
				</div>
				<h4 class="title">Estética</h4>
				<p class="description text-muted">
					Descuento en ginecomastia, rinoplastia, mamoplastia, lifting o ácido hialurónico, entre otros.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-apple-whole"></i>
				</div>
				<h4 class="title">Nutrición y obesidad</h4>
				<p class="description text-muted">
					Podrás encontrar ofertas en servicios como balones gástricos, reducción  de estómago o manga gástrica.
				</p>
			</div>
			<div class="icon-box">
				<div class="icon">
					<i class="fa-solid fa-flask-vial"></i>
				</div>
				<h4 class="title">Pruebas diagnósticas</h4>
				<p class="description text-muted">
					Ofertas ecografías obstétricas o testiculares, pruebas de esfuerzo o resonancia magnética.
				</p>
			</div>
			

		</div>
		<div class="col-lg-6 text-center">
			<picture>
  <!-- Aquí van las fuentes de imagen en diferentes formatos y resoluciones -->
  <source srcset="images/fiatc/coberturas-opcionales-fiatc.webp" type="image/webp">
  <source srcset="images/fiatc/coberturas-opcionales-fiatc.jpg" type="image/jpg">

  <!-- La etiqueta <img> se usa como fallback para navegadores que no soportan <picture> -->
  <img src="images/fiatc/coberturas-opcionales-fiatc.jpg" alt="fiatc seguros decesos" width="386" height="375" loading="lazy">
			</picture>
		</div>
		
	</div>
</div>

<!--------------------FIN COBERTURAS OPCIONALES--------------------->
<!-----------------------PREGUNTAS FRECUENTES-------------------->

<section class="container preguntas my-5 py-5">
<h2 class="text-center titulo-especial azul">Preguntas frecuentes sobre el Seguro de Decesos de Fiatc</h2><hr>
		<p class="text-center mb-5">
			Todo lo que debes saber antes de Contratar tu Seguro con Fiatc Decesos
		</p>
<div class="accordion" id="accordionExample2">
 <div class="row">
 	<div class="col-md-6"> 
	   <div class="accordion-item">
    <h3 class="accordion-header" id="heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        ¿Hasta que edad puedo contratar el Seguro de Decesos Fiatc ?
      </button>
    </h3>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>El seguro de decesos Fiat de prima mixta y prima nivelada se puede contratar hasta los 70 años.</p>
		<p>Para personas mayores de 65 años y hasta los 99 años, existe la posibilidad de contratar el seguro de prima única Fiatc.</p>
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
        <p>No, no es necesario cumplimentar ningún cuestionario de salud para contratar Fiatc Decesos.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        ¿Cuántas personas puedo asegurar en mi Póliza Decesos?
      </button>
    </h3>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Todas las que sean necesarias.</p>
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
        <p>El capital asegurado dependerá de la localidad donde resida o quierá ser enterrado, este cálculo lo realiza Fiatc automáticamente.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Resido en el extranjero, ¿si fallezco me repatrian a España?
      </button>
    </h3>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, contratando la cobertura de Repatriación, en caso de fallecer fuera de España Fiatc se encarga de todos los trámites y gestiones para repatriar los restos mortales a España.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        Soy extranjero, ¿si fallezco en España me repatrian a mi país?
      </button>
    </h3>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Si, contratando la cobertura de Repatriación, Fiatc se encarga de todas las gestiones y gastos para repatriar los restos mortales al país de origen.</p>
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