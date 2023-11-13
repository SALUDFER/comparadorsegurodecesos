<div id="llamadafixed" class="llamada-gratis-fixed text-center">
	<div class="btn-cerrar"></div>
	<img src="/../imagenes/icons/icono_movil.svg" class="icono_movil animated tada2 delay-5s infinite" alt="Icono teléfono">
	<p class="blanco text-center">Llámenos al <a href="tel:+34917376716" title="Llamar al 917 376 716" class="tel_num">917 376 716</a></p>
	<hr>
	<p class="blanco text-center">¿Prefiere que le llamemos?</p>
  	<a href="#" title="Ir a llamada gratuita" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-llamada">LLAMADA GRATIS</a>
</div>

<!------- Modal ------>
<div class="modal fade" id="modal-llamada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h3 class="modal-title verde_oscuro text-center" id="exampleModalLabel" style="width:100%">Contacte con nosotros</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
      <p class="text-center llamada_grande">Teléfono de contacto<br>
      	<a href="tel:+34917376716" title="Llamar a 917 376 716" class="verde llamada-modal">917 376 716</a>
      	</p>
      
      <hr>
      <p class="text-center">Si necesita más información sobre nuestros seguros denos su número de teléfono y uno de nuestros agentes se pondrá en contacto con usted.</p>
      
     <div id="form_llamada_fixed">
	<?php
$controlformulario='llamada';
$id= 78;
$dominio = 'comparadorsegurodecesos.es';
include('/home/www/TARIFICADORES/Presupuestos/presupuestos_all.php');


if (isset($_GET['nombre'])){
$nombre = $_GET['nombre'];
}
?>
     </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--Acaba el modal-->


<script type="text/javascript">
	
    
   if ($(window).width() > 0) {
            $("#llamadafixed").css("right", "-220px");
            setTimeout(function() {
            	$("#llamadafixed").animate({
                    right : '5%'
                });
            }, 1000);
        }
       
       
       $(".llamada-gratis-fixed img.icono_movil").click(function(){
  		$(this).parent().toggleClass("llamada_visible");
  	});
  	
  	$(".llamada-gratis-fixed .btn-cerrar").click(function(){
  		$(this).parent().removeClass("llamada_visible");
  	});
    </script>
