@extends('layouts.main')

@section('content')

 <!-- Promo block BEGIN -->
    
 <div class="promo-block" id="promo-block">
    <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-one active">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                Mas que <span class="color-red">Colegio</span> una Familia
                            </h2>
                            <div class="animated flipInX">
                                <div class="hidden-xs">
                                 
                                    <div class="promo-like-text">
                                        <h2>Unete a Nosotros </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="javascript:void(0);">Unirse</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Second slide -->
            <div class="item carousel-item-two">
                <h2 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                  Calidad en <span class="color-red">Educacion</span> y formacion estudiantil
                </h2>
               
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-three">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h3 class="margin-bottom-20 animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                               
                                <span class="color-red">Ensenza</span>  basada en Valores Morales <br/> del mas alto nivel
                            </h3>
                            <span class="carousel-subtitle-v1">Colegio Heidi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- Promo block END -->



<!-- Services block BEGIN -->
<div class="services-block content content-center" id="services">
    <div class="container">
        <h2>Nuestra  <strong>Comunidad</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-heart"></i>
                <h3>Valores</h3>
                <p>Lorem ipsum et dolor amet<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla non accusamus nobis. Nesciunt voluptatum qui libero sed modi dolorem officiis beatae dolore sit, placeat repudiandae ab asperiores, facilis provident natus?</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-graduation-cap"></i>
                <h3>Exelencia Academica</h3>
                <p>Lorem ipsum et dolor amet<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, consequatur alias nam aliquid, optio iste quibusdam nemo odit laborum nisi ipsa impedit animi similique. Tempore et cupiditate culpa ab molestiae!</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 item">
                <i class="fa fa-university"></i>
                <h3>Infraestructura</h3>
                <p>Lorem ipsum et dolor amet<br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, ea tenetur rerum perferendis maxime optio dolorem nulla quia vitae. Earum, obcaecati repellat unde est nisi consectetur totam modi ipsa praesentium.</p>
            </div>
           
        </div>
    </div>
</div>
<!-- Services block END -->


<!-- Team block BEGIN 
<div class="team-block content content-center margin-bottom-40" id="team">
    <div class="container">
        <h2>Meet <strong>the team</strong></h2>
        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
        <div class="row">
            <div class="col-md-4 item">
                <img src="assets/onepage/img/people/img6-large.jpg" alt="Marcus Doe" class="img-responsive">
                <h3>Marcus Doe</h3>
                <em>Founder</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
            <div class="col-md-4 item">
                <img src="assets/onepage/img/people/img7-large.jpg" alt="Elena Taylor" class="img-responsive">
                <h3>Elena Taylor</h3>
                <em>Designer</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
            <div class="col-md-4 item">
                <img src="assets/onepage/img/people/img8-large.jpg" alt="Cris Nilson" class="img-responsive">
                <h3>Cris Nilson</h3>
                <em>Developer</em>
                <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                <div class="tb-socio">
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                </div>
            </div>
        </div>
    </div>
</div>
 Team block END -->

<!-- Portfolio block BEGIN -->
<div class="portfolio-block content content-center" id="portfolio">
    <div class="container">
        <h2 class="margin-bottom-50">Nuestra <strong>Infraestructura</strong></h2>
    </div>
    <div class="row">
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/2.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/2.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>Aulas</strong>
                    <em>Aulas </em>
                    <b>Aulas de primer nivel </b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/6.jpg" alt="NAME" class="img-responsive">
                <a href="/images/portfolio/6.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>Bilbioteca</strong>
                    <em>Actulizadas</em>
                    <b>Centro  de autoenseñansa</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/8.jpg" alt="NAME" class="img-responsive">
                <a href="/images/portfolio/8.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong></strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/3.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/3.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/5.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/5.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/4.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/4.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/1.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/1.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/10.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/10.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/9.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/9.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/7.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/7.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/2.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/2.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
        <div class="item col-md-2 col-sm-6 col-xs-12">
            <img src="/images/portfolio/8.jpg" alt="NAME" class="img-responsive">
            <a href="/images/portfolio/8.jpg" class="zoom valign-center">
                <div class="valign-center-elem">
                    <strong>London City Project</strong>
                    <em>Property</em>
                    <b>Details</b>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Portfolio block END -->
<br>
<br>
<!-- Message block BEGIN -->
<div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
        <h2> <strong>CAMPUS VIRTUAL HEIDI</strong>Nuestro colegio ingresa al mundo digital a través de la implementación del programa “Campus Virtual”. Este espacio integra áreas de importancia para nuestra comunidad:  acceso a la información y</h2>
        <a href="javascript:void(0);">Entrar</a></p>
    </div>
</div>
<!-- Message block END -->
@endsection