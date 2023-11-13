<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/Landing/mayores/" title="Comparador Seguro Decesos" alt="Seguro Decesos prima única"><img class="logo" src="/images/logotipo.svg" alt="seguro decesos prima unica" title="Comparador Seguros de Decesos Mayores"></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Landing/helvetia/">INICIO</a>
        </li>-->
        <li class="nav-item">
        	<div class="btn-banner">
					<form action="/Landing/comparador" title="Calcular Precio Seguro Decesos"  method="POST">
        			<!--<input type="hidden" name="tipo_origen" value="<?=$_SESSION['tipo_origen']?>">-->
        			<input type="hidden" name="tipo_origen" value="1">
        			<input type='hidden' name='tipoSeguroInteresado' value= 'MAYORES'>
        			<button class="comparador" name="button"> CALCULAR PRECIO SEGURO </button>
        		</form>
				</div>
        </li>
        <li class="nav-item">
          <a class="nav-link contact" href="#llamada-modal" data-bs-toggle="modal" data-bs-target="">CONTACTO</a>


        </li>
      </ul>
    </div>
  </div>
</nav>
</header>



