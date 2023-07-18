
<img src="assets/img/banner1inicio.png" width="100%" alt="">

<section class="mt-5">
    <div class="container">
        <h5 class="titulo_web">Nuestros Servicios</h5>
        <div class="caja_servicios">
            <div class="item_caja_servicios caja1">
                <a href="">Marketing y Promociones y Campañas BTL</a>
            </div>
            <div class="item_caja_servicios caja2">
                <a href="">Outsourcing, Procesos & Operaciones</a>
            </div>
            <div class="item_caja_servicios caja3">
                <a href="">Saneamiento Ambiental</a>
            </div>
            <div class="item_caja_servicios caja4">
                <a href="">Consultoría en Gestión Humana</a>
            </div>
            <div class="item_caja_servicios caja5">
                <a href="">Gestión de Recursos Humanos</a>
            </div>
            <div class="item_caja_servicios caja6">
                <a href="">Cooperativa ed Trabajo y Fomento del Empleo</a>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active img1_banner">
                <!-- <img src="assets/img/sival_inicio_b_(1).jpeg" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item img2_banner">
                <!-- <img src="assets/img/oss_inicio_b_(1).jpeg" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item img3_banner">
                <!-- <img src="assets/img/selalima_inicio_b_(1).jpeg" class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class='container mt-5'>
    <h3 class='titulo_nos_diferencia'>Lo que nos diferencia</h3>
    <div class='caja_nos_diferencia'>
        <div class='item_nos_diferencia'>
            <img src="" alt="">
            Lorem ipsum dolor sit amet.
        </div>
        <div class='item_nos_diferencia'>
            <img src="" alt="">
            Lorem ipsum dolor sit amet.
        </div>
        <div class='item_nos_diferencia'>
            <img src="" alt="">
            Lorem ipsum dolor sit amet.
        </div>
    </div>
</section>

<div class='container mt-5 pb-5 mb-5'>
    <h5 class='titulo_web'>Confían en Nosotros</h5>
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-02.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-03.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-04.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-05.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-06.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-07.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-08.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-09.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-10.png" width='130px' alt=""></li>
                    <li class="splide__slide slider_img_li"><img src="assets/img/logos_clientes/Sin título-1-11.png" width='130px' alt=""></li>
                </ul>
        </div>
    </section>    
</div>

<section class='color_fondo_reconocimientos mt-5 mb-5'>
    <div class="container">
        <h5 class='titulo_web pt-5'>Reconociminetos y Premiaciones</h5>
        <div class='caja_reconocimiento pb-5'>
            <div class='item_reconocimientos'>
                <img src="assets/img/logos_clientes/Sin título-1-46.png" width='170px' alt="">
            </div>
            <div class='item_reconocimientos'>
                <img src="assets/img/logos_clientes/Sin título-1-47.png" width='170px' alt="">
            </div>
            <div class='item_reconocimientos'>
                <img src="assets/img/logos_clientes/Sin título-1-48.png" width='170px' alt="">
            </div>
            <div class='item_reconocimientos'>
                <img src="assets/img/logos_clientes/Sin título-1-49.png" width='170px' alt="">
            </div>
        </div>
    </div>
</section>



<script>
  var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 5,
    perMove: 1,
    breakpoints: {
		994: {
			perPage: 3,
		},
        768: {
			perPage: 2,
		},
        500: {
			perPage: 1,
		},
    }
    } );

    splide.mount();
</script>