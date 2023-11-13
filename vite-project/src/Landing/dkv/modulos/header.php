<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a title="Aseguradora DKV Decesos" class="navbar-brand" href="/Landing/dkv/"><img class="logo" src="/images/logotipo.svg" alt="Comparador de Seguros de Decesos" title="Comparador Seguro Decesos"></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Landing/helvetia/">INICIO</a>
        </li>-->
        <li class="nav-item">
          <form action = '/Landing/comparador' title="Precio DKV Decesos" method = 'POST'>
						<input type = "hidden" name = "tipo_origen" value = "1">
						<input type = 'hidden' name = 'compa_temp' value = 'dkv'>
						<input type = 'hidden' name = 'tipoSeguroInteresado' value = 'COMPLETO'>
						<button class="comparador" name="button">
							CALCULA TU SEGURO
						</button>
					</form>
        </li>
        <li class="nav-item">
          <a class="nav-link contact" href="#llamada-modal" data-bs-toggle="modal" data-bs-target="">CONTACTO</a>


        </li>
      </ul>
    </div>
  </div>
</nav>
</header>



