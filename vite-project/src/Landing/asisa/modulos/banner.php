<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center">
				<h1>Seguro de Decesos Asisa</h1>
				<h2>Calcula el precio de tu Seguro de Decesos y Contrata tu póliza online con Asisa Seguros.</h2>

				<div class="btn-banner">
					<form action = '/Landing/comparador' title="Asisa Seguro Decesos" method = 'POST'>
						<input type = "hidden" name = "tipo_origen" value = "1">
						<input type = 'hidden' name = 'compa_temp' value = 'asisa'>
						<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
						<button class="btn-get-started scrollto" name="button">
							CALCULAR PRECIOS
						</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-1 hero-img">
				<img src="images/hero2.png" class="img-fluid" alt="Seguro de Decesos Asisa">
			</div>
		</div>
	</div>
</section><!-- End Hero -->
