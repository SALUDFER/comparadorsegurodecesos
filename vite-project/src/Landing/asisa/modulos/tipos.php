<div class="productos">
	<div class="container mt-5 mb-5">
		<h2 class="text-center">Contrata ahora tu Seguro de Decesos Asisa</h2>
		<p class="text-center">
			Te ofrecemos los mejores seguros de decesos adaptados a tus necesidades.
		</p>
		<div class="tipos_landing_flex">
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguros de Decesos</h4>
				<img src="images/seguro-de-decesos.png">
				<p class="text-muted">
					Calcula y contrata tu Seguro de Decesos al mejor precio con Asisa.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'asisa'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>

			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguro de Repatriación Españoles</h4>
				<img src="images/seguro-de-repatriacion-erasmus.png">
				<p class="text-muted">
					Ideal para Estudiantes Erasmus y trabajadores que se van a vivir al extranjero.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'asisa'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'EMIGRANTES'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>

		</div>
	</div>
</div>