
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
        <h5 class="modal-title text-center" id="exampleModalLabel">Contacta con nosotros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<p class="text-center llamada_grande">
					Teléfono de contacto
					<br>
					<a href="tel:+34917376716" title="Llamar a 917 376 716" class="verde llamada-modal">917 376 716</a>
				</p>
				<hr>
				<p class="text-center">
					Si necesitas más información sobre nuestros seguros facilítanos tu número de teléfono y uno de nuestros Agentes se pondrá en contacto contigo.
				</p>
				<div id="form_llamada_fixed">
					<?php
					$controlformulario = 'llamada';
					$id = 78;
					$dominio = 'comparadorsegurodecesos.es';
					include dirname(__FILE__).'/../../../../../TARIFICADORES/Presupuestos/presupuestos_all.php';
					if (isset($_GET['nombre']))
					{
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





