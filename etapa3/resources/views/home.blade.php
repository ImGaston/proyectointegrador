@extends('layout')

@section('title')
Pitagoras | Home
@endsection

@section('main')
<div id="myCarousel" class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active carousel-home">
            <img src="img/carousel-11.jpg" alt="Carousel1" class="d-block w-100 opct opacity-30">
            <div class="container">
                <div class="carousel-caption izquierda">
                    <h1>Los mejores uniformes escolares</h1>
                    <p>Visite nuestra tienda de artículos</p>
                    <p><a class="btn btn-lg btn-primary" href="/productos" role="button">Visitar galería</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item carousel-home">
            <img src="img/carousel-21.jpg" alt="Carousel2" class="d-block w-100 opct opacity-30">
            <div class="container">
                <div class="carousel-caption izquierda">
                    <h1>Todos los modelos</h1>
                    <p>Tenemos los uniformes para todos los colegios de Formosa</p>
                    <p><a class="btn btn-lg btn-primary" href="productos.php" role="button">Ver listado</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item carousel-home">
            <img src="img/carousel-31.jpg" alt="Carousel3" class="d-block w-100 opct opacity-30">
            <div class="carousel-caption text-right izquierda">
                <h1>Promociones</h1>
                <p>Visite nuestra sección de promociones</p>
                <p><a class="btn btn-lg btn-primary" href="productos.php" role="button">Visitar</a></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev color" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon color" aria-hidden="true"></span>
        <span class="sr-only color ">Anterior</span>
    </a>
    <a class="carousel-control-next color" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon color" aria-hidden="true"></span>
        <span class="sr-only color">Próxima</span>
    </a>
</div>

<div class="container">
    <div class="row" id="prueba">
        <div class="col-12 col-md-6 col-lg-4 text-center services-section hidden-md-down">
            <img src="img/img-1.png" class="img-fluid d-block d-sm-block d-md-none" alt="">
        </div>

        <!-- BENEFICIOS IMAGEN PARA MOBILE -->
        <div class="container">
            <div class="row">
                <div class="col-12 d-none d-block d-sm-block d-md-none">
                    <img src="img/compra-7.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!-- BENEFICIOS DESKTOPS  -->
        <div class="container mt-4 mb-4 d-none d-sm-none d-md-block">
            <div class="row justify-content-md-center">
                <div class="col-2 text-center">
                    <img src="img/compra-1-1.png" class="mb-2" alt="">
                    <p>Los mejores precios y ofertas</p>
                </div>
                <div class="col-2 text-center">
                    <img src="img/compra-2-1.png" class="mb-2" alt="">
                    <p>Compra online y retira en el local</p>
                </div>
                <div class="col-2 text-center">
                    <img src="img/compra-3-1.png" class="mb-2" alt="">
                    <p>Servicio de entrega rápido y económico</p>
                </div>
                <div class="col-2 text-center">
                    <img src="img/compra-6-1.png" class="mb-2" alt="">
                    <p>Cambios y devoluciones simples</p>
                </div>
                <div class="col-2 text-center">
                    <img src="img/compra-5-1.png" class="mb-2" alt="">
                    <p>Compra facil y 100% seguro</p>
                </div>
            </div>

        </div>
        <!-- CATEGORIAS -->
        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <img src="img/colegial-1.png" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <img src="img/egresados-1.png" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <img src="img/hospitalario-1.png" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- DATOS LOCAL -->
        <div class="container mb-4">
            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    <iframe class="embed-responsive-item"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3580.359336531267!2d-58.172174942535975!3d-26.184986630439457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5031f0cb4bceefa!2sPitagoras&#39;c!5e0!3m2!1ses-419!2sar!4v1569293921813!5m2!1ses-419!2sar"
                        width=100% height=300px frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="heading mt-3">
                        <h3>Local</h3>
                    </div>
                    <div class="info">
                        <p>Desde el 2009 que nos propusimos ayudar desde nuestro trabajo y compromiso a mejorar la
                            educación y la identidad de cada institución.</p>
                        <p>Nuestro objetivo es que cada día te sientas orgullosx al ver a tus hijos entrar al colegio.
                        </p>
                    </div>
                    <div class="gallery d-none d-sm-none d-md-block">
                        <h4></h4>
                        <div class="row ">
                            <div class="col-md-4">
                                <img class="img-fluid image rounded" src="img/img-2.jpg"></a>
                            </div>
                            <div class="col-md-4">
                              <img class="img-fluid image rounded" src="img/img-1.png"></a>
                            </div>
                            <div class="col-md-4">
                              <img class="img-fluid image rounded" src="img/img-3.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LISTADO COLEGIOS -->
        <div class="container d-none d-sm-none d-md-block">
            <div class="row justify-content-md-center">
                <h3 class="mb-4 mt-6">Algunos de los colegios que confían en nosotros</h3>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                    <img src="img/colegio-1.png" alt="">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                    <img src="img/colegio-2.png" alt="">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                    <img src="img/colegio-3.png" alt="">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                    <img src="img/colegio-4.png" alt="">
                </div>
            </div>
        </div>
        <!-- BENEFICIOS IMAGEN PARA MOBILE -->
        <div class="container d-none d-block d-sm-block d-md-none">
            <div class="row justify-content-md-center">
                <h3 class="mb-4 mt-6 text-center">Algunos de los colegios que confían en nosotros</h3>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="img/colegio-xs.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        </div>
            @endsection
