<div class="productos">
	<div class="container mt-5 mb-5">
		<h2 class="text-center">Contrata ahora tu Seguro de Decesos Helvetia</h2>
		<p class="text-center">
			Te ofrecemos los mejores seguros de decesos adaptados a tus necesidades.
		</p>
		<div class="tipos_landing_flex">
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguros de Decesos
				<br>
				<span>(Contratable hasta los 80 años)</span></h3>
				<img src="images/seguro-de-decesos.jpg" title="Helvetia Asistencia Familiar" alt="Seguro de Decesos">
				<p class="text-muted">
					Calcula y contrata tu Seguro de Decesos al mejor precio con Helvetia.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Decesos Helvetia" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'helvetia'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Decesos Prima Única</h3>
				<img src="images/seguro-decesos-prima-unica.jpg" title="Helvetia Prima Única" alt="Seguro Decesos Prima Unica Helvetia">
				<p class="text-muted">
					Seguros de Decesos Prima Unica, un sólo pago orientado a personas mayores.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Prima Única Helvetia" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'helvetia'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'UNICA'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<!--<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Españoles</h3>
				<img src="images/seguro-de-repatriacion-erasmus.png" alt="Helvetia Repatriación Españoles">
				<p class="text-muted">
					Ideal para Estudiantes Erasmus y trabajadores que se van a vivir al extranjero.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Repatriación Emigrantes" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'helvetia'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'EMIGRANTES'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>-->
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Extranjeros</h3>
				<img src="images/seguro-de-repatriacion-extranjeros.jpg" title="Helvetia Repatriación Extranjeros" alt="Seguro de Repatriacion">
				<p class="text-muted">
					¿Eres extranjero y resides en España? Este es tu seguro, en caso de fallecimiento te repatriamos a tu país de origen.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro de Repatriación" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'helvetia'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'REPATRIACION'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
		</div>
	</div>
</div>