<div class="productos">
	<div class="container mt-5 mb-5">
		<h2 class="text-center">¿Cuánto Cuesta un Seguro de Decesos Para Mayores?</h2>
		<p class="text-center extraPadding">
			Te ofrecemos los <strong>Mejores Seguros de Decesos</strong> con las máximas coberturas 100% adaptadas a las <strong>personas mayores de 65, 70 y 80 años</strong>.
		</p>
		<div class="tipos_landing_flex">

			<div class="tipo_landing d-flex flex-column justify-content-center">
				<h3>Seguro Decesos Completo<br><span>(Contratable hasta los 80 años)</span></h3>
				<img src="images/seguro-de-decesos-mixto.jpg" alt="Seguro Decesos para Mayores" title="Comparador Seguro Decesos">
				<p class="text-muted">
					Calcula tu <strong>Seguro de Decesos</strong> en todas las Aseguradoras, en 1 minuto encontrarás los Mejores Seguros de Decesos.
				</p>
				<form action="/Landing/comparador" title="seguro decesos mayores" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS COMPLETO
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-center">
				<h3>Seguro Decesos Nivelado<br><span>(Contratable hasta los 80 años)</span></h3>
				<img src="images/seguro-decesos-nivelado.jpg" alt="Prima Nivelada Decesos" title="Seguro Decesos Prima Nivelada">
				<p class="text-muted">
					Con el Seguro de Decesos de <strong>prima nivelada</strong>, la prima se mantiene constante durante toda la duración del contrato.
				</p>
				<form action="/Landing/comparador" title="seguro decesos mayores" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS PRIMA NIVELADA
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro Decesos Pago Único<br><span>(Contratable a partir de 70 años)</span></h3>
				<img src="images/seguro-decesos-prima-unica.jpg" alt="Mejor Seguro Decesos Prima Única" title="Comparador Seguro Decesos Prima Única">
				<p class="text-muted">
					Seguros de Decesos Prima Unica, un sólo pago que cubre la totalidad del entierro, <strong>orientado a personas mayores de 80 años</strong>.
				</p>
				<form action="/Landing/comparador" title="seguro decesos prima unica" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'UNICA'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS PRIMA ÚNICA
					</button>
				</form>
			</div>

		</div>
	</div>
</div>