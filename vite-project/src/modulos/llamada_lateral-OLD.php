
<!-- Button trigger modal -->
<button type="button" id="llamadafixed" class="llamada-gratis-fixed text-center" data-bs-toggle="modal" data-bs-target="#llamada-modal">
		<i class="fa-solid fa-mobile-screen-button blanco animated tada2 delay-5s infinite"></i>
		<!--<i class="fa-solid fa-mobile-screen-button"></i>-->
</button>

<!-- Modal -->
<div class="modal fade" id="llamada-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Contacte con nosotros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<p class="text-center llamada_grande">
					Teléfono de contacto
					<br>
					<a href="tel:917376716" title="Llamar a 917 376 716" class="verde llamada-modal">917 376 716</a>
				</p>
				<hr>
				<p class="text-center">
					Si necesitas más información o tienes alguna duda sobre nuestros seguros de decesos, déjanos tu número de teléfono y uno de nuestros agentes se pondrá en contacto contigo.
				</p>
				<div id="form_llamada_fixed">
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
					include dirname(__FILE__).'/../../../TARIFICADORES/Presupuestos/presupuestos_all.php';
					if (isset($_GET['nombre'])){
					$nombre = $_GET['nombre'];
					}
					?>


				</div>
			</div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<script type = "text/javascript">


   if ($(window).width() > 0) {
            $("#llamadafixed").css("right", "-220px");
            setTimeout(function() {
            	$("#llamadafixed").animate({
                    right : '0%'
                });
            }, 7000);
        }


       $(".llamada-gratis-fixed img.icono_movil").click(function(){
  		$(this).parent().toggleClass("llamada_visible");
  	});

  	$(".llamada-gratis-fixed .btn-cerrar").click(function(){
  		$(this).parent().removeClass("llamada_visible");
  	});
    </script>
    
<style>
    	
/************  ESTILO LLAMADA LATERAL    *************************************************/

button.llamada-gratis-fixed {
	border: none
}
.llamada-gratis-fixed {
	width: 150px;
	height: 150px;
	position: fixed;
	background-color: var(--naranja);
	right: -200px;
	bottom: 0%;
	padding: 7px;
	z-index: 999;
	box-shadow: -5px 5px 7px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: -5px 5px 7px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: -5px 5px 7px rgba(0, 0, 0, 0.2);
	overflow: hidden;
	border-radius: 50% 0% 0% 0%;
}
.llamada-gratis-fixed.llamada_visible {
	right: 0% !important;
	width: 200px;
	height: auto;
	border-radius: 0% !important;
	overflow: visible;
	background-color: #00b0b5;
	top: 50%
}
.llamada-gratis-fixed.llamada_visible p {
	color: #fff !important
}
.llamada-gratis-fixed i {
	margin-bottom: 20px;
	cursor: pointer;
	font-size: 80px;
	padding: 0px 15px;
}
.llamada-gratis-fixed.llamada_visible .btn-cerrar::after {
	content: "+";
	position: absolute;
	top: 0px;
	right: 10px;
	color: #ffffff80;
	transform: rotate(45deg);
	font-size: 25px;
	font-weight: bold;
}
.llamada-gratis-fixed a {
	text-decoration: none;
	white-space: nowrap;
	display: block;
	font-size: 18px;
	margin-top: 5px;
	font-weight: bold;
}
.llamada-gratis-fixed p {
	line-height: 100%;
}
div.modal.fade form#presupuesto {
	background-color: #fff !important;
}
i.fa-mobile-screen-button {
	-webkit-animation: tiembla 2s infinite;
	color: #fff !important;
	font-size: 57px;
	margin-top: 14px
}
@-webkit-keyframes tiembla {
	0% {
		-webkit-transform: rotate( 0deg);
	}
	70% {
		-webkit-transform: rotate( 0deg);
	}
	73% {
		-webkit-transform: rotate( 6deg) scale(1.1);
	}
	76% {
		-webkit-transform: rotate( -6deg) scale(1.1);
	}
	79% {
		-webkit-transform: rotate(6deg) scale(1.1);
	}
	82% {
		-webkit-transform: rotate( -6deg) scale(1.1);
	}
	85% {
		-webkit-transform: rotate( 6deg) scale(1.1);
	}
	88% {
		-webkit-transform: rotate( -6deg) scale(1.1);
	}
	91% {
		-webkit-transform: rotate( 6deg) scale(1.1);
	}
	94% {
		-webkit-transform: rotate(-6deg) scale(1.1);
	}
	97% {
		-webkit-transform: rotate( 6deg) scale(1.1);
	}
	100% {
		-webkit-transform: rotate( -6deg) scale(1.1);
	}
}
#form_llamada_fixed #idnombre, #form_llamada_fixed #idtel {
	height: 40px;
	border: 1px solid #033d5b;
}
#form_llamada_fixed #solicitante {
	background: #fff
}
#form_llamada_fixed .legend {
	background-color: var(--azul) !important;
	color: #ffffff !important;
}
#form_llamada_fixed #solicitante select {
	height: 40px;
	border: 1px solid var(--azul) !important;
}
#form_llamada_fixed ul li {
	text-align: left
}
#form_llamada_fixed a.llamada-modal {
	font-size: 24px !important
}
#form_llamada_fixed .modal-footer {
	justify-content: flex-start !important
}
div.modal#modal-llamada {
	padding-top: 50px
}
div.modal#modal-llamada .modal-footer {
	justify-content: flex-start
}
a.llamada-modal {
	font-size: 27px;
	color: var(--naranja) !important;
}
#form_llamada_fixed form#presupuesto input.enviar {
	background-color: var(--naranja);
	border-bottom: none
}
    </style>
    
   





