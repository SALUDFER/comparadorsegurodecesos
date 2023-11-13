<section id="hero" class="d-flex align-items-center">
  <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
          <h1><span>Comparador</span> de seguros de decesos</h1>
          <p>Compara entre más de 14 aseguradoras<br>y consigue el mejor precio</p>
          
          
         
			<a href="/comparador-seguro-decesos" title="Calcular precios" class="btn btn-lg btn-warning btn-block">CALCULAR PRECIOS  <i class="fas fa-calculator"></i></a>
						
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
        <div class="img-banner-cia">
        	<div class="anim-svg"><img src="../images/fondo-img-banner.svg" width="550" height="550" alt="Seguro de decesos" class="bg-banner-cia"></div>
        	
        	<picture>
  			<source media="(max-width: 576px)" srcset="../images/img-banner-00-S.webp">
  			<source media="(max-width: 767px)" srcset="../images/img-banner-00-M.webp">
  			<img src="../images/img-banner-00.webp" width="230" height="230" class="img-mask" alt="Comparador seguro decesos">
  			</picture>
        	
        	<div class="precio-cia"><p>Ahorra hasta<br><span><span>60</span>%</span><br>en tu seguro</p></div>
        </div>	
</div>
 </div>
      </div>
</section>

<style>
	
	#hero {
  width: 100%;
  height: 70vh;
  max-height: 650px;
  min-height: 560px;
  background-image: url(/images/fondo_banner_ppal.webp);
  background-size: cover;
  background-attachment: fixed;
  background-color: #eefafd;
  position:relative;
}

#hero .img-banner-cia div.anim-svg{opacity:0.5}

#hero:after{content: url(/images/fondo-banner-bottom-blanco.svg);
position: absolute;
    bottom: -7px;
    width: 100%;
    }
    
#hero .container {
  position:absolute; z-index: 1; margin: auto; left:0; right:0
}
#hero h1 {
  margin: 0;
  font-size: 50px;
  font-weight: 700;
  line-height: 0.9;
  color: var(--azul);;
  
}
#hero h1 span {font-size: 6rem; color:var(--verde)}
#hero h2 {
  color: #1c698c;
  margin: 10px 0 0 0;
  font-size: 20px;
}
#hero a{font-family: "RalewayBold", sans-serif;
    font-weight: 500;
    font-size: 25px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 15px 40px;
    border-radius: 10px;
    transition: 0.5s;
    margin: 15px auto;
    color: #fff;
    background: var(--naranja);
    text-transform: uppercase;
    max-width:400px; border:none;}
    #hero a:hover{background: var(--verde);}
    
    #hero p{font-size:28px; margin:15px auto}
    #hero .img-banner-cia div.precio-cia p{font-size:23px}
    #hero .img-banner-cia div.precio-cia p span {font-size: 3.5rem; height: auto; margin-top: 8px; display: inline-block;}

/************* MOVIL **********************************************/
@media (max-width: 575px) {
	
	#hero {height: 85vh; margin-bottom:0px; overflow:hidden; background-image:none;}
	#hero .img-banner-cia{text-align:center; margin-bottom:0px}
	#hero h1{font-size:35px;}
	#hero h1 span{display:block; font-size:3.1rem; line-height: 1;}
	#hero p {font-size: 22px; margin: 10px auto; line-height:1.2;}
	#hero .img-mask {width: 60%; margin-top: -15px;}
	#hero .img-banner-cia div.precio-cia {width: 155px; height: 155px; bottom:0px}
	#hero .img-banner-cia div.precio-cia p {font-size: 18px;}
	#hero .img-banner-cia div.anim-svg {top:-75px}
	#hero .bg-banner-cia{display:none}
	#hero .precio-cia p {line-height: 0.9;}
	
	
}


/************* TABLET **********************************************/
@media (min-width: 576px) and (max-width: 768px) {
	
	#hero {height: 80vh; margin-bottom:45px; background-image: none;}
	#hero .img-banner-cia{text-align:center}
	#hero h1{font-size:40px}
	#hero h1 span{display:block; font-size: 5rem !important;}
	#hero p {font-size: 22px; margin: 10px auto;}
	#hero .img-mask {width: 60%; margin-top: 45px;}
	#hero .img-banner-cia div.precio-cia {width: 175px; height: 175px;}
	#hero .img-banner-cia div.precio-cia p {font-size: 20px;}
	
	
}

/********* PORTATIL *************************************************/
@media (min-width: 767px) and (max-width: 991px) {
	
	#hero {height: 80vh; margin-bottom:60px}
	#hero .img-banner-cia{text-align:center}
	#hero h1{font-size:45px}
	#hero h1 span{display:block; font-size: 5rem !important;}
	#hero p {font-size: 25px; margin: 10px auto;}
	
	
}
/********* PORTATIL *************************************************/
@media (min-width: 992px) and (max-width: 1199px) {
	
	#hero h1 {font-size: 42px;}
	#hero h1 span{display:block; font-size: 5rem !important;}
	
	
}
</style>
  
  
  

  
  
  			
  


  
  
