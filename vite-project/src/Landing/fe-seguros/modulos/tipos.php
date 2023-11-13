<div class="productos">
	<div class="container mt-5 mb-5">
		<h2 class="text-center">Contrata ahora tu Seguro de Decesos con La FE</h2>
		<p class="text-center">
			Te ofrecemos los mejores seguros de decesos adaptados a tus necesidades.
		</p>
		<div class="tipos_landing_flex">
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguros de Decesos
				<br>
				<span>(Contratable hasta los 70 años)</span></h3>
				<img src="images/seguro-de-decesos.jpg" title="Seguro Decesos La FE" alt="La Fe Decesos">
				<p class="text-muted">
					Calcula y contrata tu Seguro de Decesos al mejor precio con La FE Seguros.
				</p>
				<form action="/Landing/comparador" title="Calcular La FE Decesos" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'la_fe'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Decesos Prima Única</h3>
				<img src="images/seguro-decesos-prima-unica.jpg" title="Seguro Decesos Prima Unica La FE" alt="Seguro Decesos Prima Unica">
				<p class="text-muted">
					Seguros de Decesos Prima Unica, un sólo pago orientado a personas mayores.
				</p>
				<form action="/Landing/comparador" title="Calcular La FE Prima Única" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'la_fe'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'UNICA'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<!--<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Españoles</h3>
				<img src="images/seguro-de-repatriacion-erasmus.png">
				<p class="text-muted">
					Ideal para Estudiantes Erasmus y trabajadores que se van a vivir al extranjero.
				</p>
				<form action="/Landing/comparador" title="Seguro de Repatriación Españoles La FE" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'la_fe'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'EMIGRANTES'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>-->
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Extranjeros</h3>
				<img src="images/seguro-de-repatriacion-extranjeros.jpg" title="Seguro de Repatriacion La FE" alt="Seguro de Repatriacion Extranjeros">
				<p class="text-muted">
					¿Eres extranjero y resides en España? Este es tu seguro,en caso de fallecimiento te repatriamos a tu país de origen.
				</p>
				<form action="/Landing/comparador" title="Precio La FE Seguro de Repatriación" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'la_fe'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'REPATRIACION'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
		</div>
	</div>
</div>