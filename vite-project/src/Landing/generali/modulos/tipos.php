<div class="productos">
	<div class="container mt-5 mb-5">
		<h2 class="text-center">Contrata ahora tu Seguro de Decesos con Generali</h2>
		<p class="text-center">
			Con Generali Decesos podrás contratar un seguro adaptado a tus necesidades
		</p>
		<div class="tipos_landing_flex">
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguros de Decesos
				<br>
				<span>(Contratable hasta los 70 años)</span></h4>
				<img src="images/seguro-de-decesos.png" alt="Generali Asistencia Familiar">
				<p class="text-muted">
					Calcula y contrata tu Seguro de Decesos al mejor precio con Generali.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Decesos" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'generali'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguro de Decesos Prima Única</h4>
				<img src="images/seguro-decesos-prima-unica.png" alt="Generali Prima Única">
				<p class="text-muted">
					Seguros de Decesos Prima Unica, un seguro de decesos con pago único, especial para los mayores de 70 años.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Prima Única" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'generali'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'UNICA'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguro de Decesos para jóvenes</h4>
				<img src="images/seguro-de-repatriacion-erasmus.png" alt="Generali Singles">
				<p class="text-muted">
					Un seguro de decesos para los menores de 40 años, que vivan fuera o en España.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro Decesos Jovenes" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'generali'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'EMIGRANTES'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h4>Seguro de Repatriación Extranjeros</h4>
				<img src="images/seguro-de-repatriacion-extranjeros.png" alt="Generali Repatriación Extranjeros">
				<p class="text-muted">
					¿Eres extranjero y resides en España? Con este seguro tendrás garantizada la repatriación a tu país en caso de fallecimiento.
				</p>
				<form action="/Landing/comparador" title="Calcular Seguro de Repatriación" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'compa_temp' value = 'generali'>
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'REPATRIACION'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
		</div>
	</div>
</div>