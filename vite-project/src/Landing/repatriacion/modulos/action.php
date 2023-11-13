<div class="banner-action py-5">
	<div class="container">
		<div class="row align-items-center justify-content-around">
			<div class="col-md-12 col-lg-6"><h3>¿Quieres conocer el precio de tu Seguro de repatriación?</h3></div>
			<!--<div class="col-md-6 col-lg-3"><img src="images/banner-action.png" alt="Precio Generali Decesos" title="Generali Decesos Precio"></div>-->
			<div class="col-md-6 col-lg-4">

				<form action="/Landing/comparador" title="Comparar Seguros de Repatriacion"  method="POST">
        			<!--<input type="hidden" name="tipo_origen" value="<?=$_SESSION['tipo_origen']?>">-->
        			<input type="hidden" name="tipo_origen" value="1">
        			<input type='hidden' name='tipoSeguroInteresado' value= 'REPATRIACION'>
        			<button class="comparador" name="button"> CALCULAR PRECIOS </button>
        		</form></div>
		</div>
	</div>
</div>

