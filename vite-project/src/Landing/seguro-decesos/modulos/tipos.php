<div class="productos bg-light">
	<div class="container mt-5 mb-5">
		<h2 class="text-center azul_oscuro">Tenemos el Seguro de Decesos que necesitas</h2>
		<p class="text-center titulo_especial">
			Te ofrecemos los mejores seguros de decesos adaptándonos siempre a tus necesidades, tanto si eres joven o mayor, si vives en España como si no.
		</p>
		<div class="tipos_landing_flex">
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguros de Decesos
				<br>
				<span>(Contratable hasta los 80 años)</span></h3>
				<img src="images/seguro-de-decesos.jpg" title="Seguro Decesos" alt="Seguros de decesos baratos">
				<p>
					Aquí encontrarás los mejores precios y coberturas en <strong>seguros de decesos con prima natural y nivelada</strong>, para que puedas elegir la opción que mejor se adapte a ti.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Decesos Prima Única</h3>
				<img src="images/seguro-decesos-prima-unica.jpg" title="Seguro Decesos Prima Única" alt="Prima Única Decesos">
				<p>
					<strong>Un sólo pago orientado a personas mayores</strong> que por edad no pueden contratar un seguro de decesos convencional o desean hacer un único pago.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'UNICA'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Españoles</h3>
				<img src="images/seguro-de-repatriacion-erasmus.jpg" title="Seguro de Repatriación Españoles" alt="Seguro de Repatriación Erasmus">
				<p>
					Ideal para <strong>Estudiantes Erasmus, intercambios y trabajadores que se van a vivir al extranjero</strong> y quieren volver a España en caso de fallecimiento, enfermedad grave o accidente.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'EMIGRANTES'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
			<div class="tipo_landing d-flex flex-column justify-content-between">
				<h3>Seguro de Repatriación Extranjeros</h3>
				<img src="images/seguro-de-repatriacion-extranjeros.jpg" title="Seguro de Repatriación" alt="Seguro Repatriación">
				<p>
					<strong>¿Eres extranjero y resides en España?</strong> En caso de fallecimiento gestionamos todos los trámites para la repatriación a tu país de origen junto con un acompañante.
				</p>
				<form action="/Landing/comparador" method="POST" class="mt-5">
					<input type = "hidden" name = "tipo_origen" value = "1">
					<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'REPATRIACION'>
					<button class="btn btn-lg btn-warning" name="button">
						CALCULAR PRECIOS
					</button>
				</form>
			</div>
		</div>
	</div>
</div>