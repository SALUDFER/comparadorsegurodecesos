<?php session_start(); ?>
<!DOCTYPE HTML>
<?php
	$head_title = 'Solicite presupuesto - Seguro Decesos';
	$head_descripcion = 'Contacta con nosotros, Comparador Seguro de Decesos - Comparadorsegurodecesos.es.';
	$head_keywords = 'seguro decesos, comparador seguro decesos, comparativa seguro decesos, contratar seguro decesos, seguro decesos precios';
	$index = true;
?>
<html lang="es">
	<?php
	include ('modulos/head.php');
	?>
	<body>
	<?php
	include ('modulos/header.php');
	?>	
<section class="fondo_nubes">
	<div class="container pb-5 mb-5">
      <div class="row text-center align-items-center orden_contacto">
        
        
        
        <div class="col-md-6">
          <div class="formulario_contacto">
            <h1 class="azul text-center">Solicite la llamada gratuita</h1>
            <?php
					$controlformulario='llamada';
					$id= 78;
					$dominio = 'comparadorsegurodecesos.es';
					$idProducto = 7; // 1 sin productos 7 decesos
					//Recoger tipo origen si es existente en el ambito de la web sino por default LLAMADA GRATUITA
					if (isset($_GET["tipo_origen"])){$tipoOrigen = $_GET['tipo_origen'];}
					elseif (isset($_POST["tipo_origen"])){$tipoOrigen = $_POST['tipo_origen'];}
					elseif (!empty($_COOKIE["tipo_origen"])){$tipoOrigen = htmlspecialchars_decode($_COOKIE['tipo_origen']);}
					elseif (!empty($_SESSION["tipo_origen"])){$tipoOrigen	= $_SESSION['tipo_origen'];}	
					else{ $tipoOrigen = 11;}
					$es_CRM2 = true;
					include dirname(__FILE__).'/../../TARIFICADORES/Presupuestos/presupuestos_all.php';
					if (isset($_GET['nombre'])){
					$nombre = $_GET['nombre'];
					}
					?>
            

        </div>
        



          </div>
             <div class="col-md-6">
          <img src="/images/pez_naranja.png" alt="Pez naranja comparador seguro decesos" class="img_contacto" width="300" height="203">
          <div class="llamada">
            <h2>¿Tiene dudas? Llámenos</h2>
			<a href="tel:917376716" title="Llamar a 917 376 716"> <i class="fa-solid fa-mobile-screen-button"></i> 917&nbsp;376&nbsp;716</a>
  		</div>
		</div>
       </div>
        
        </div>
  
</section>
	<?php
	include ('modulos/footer.php');
	?>
</body>
</html>


