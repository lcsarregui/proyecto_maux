@extends('layout')

@section('content')
    <h1>Página Principal</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="first-slide d-block img-fluid img-carousel" src="{{ asset('img/escuelas-1.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h1>Escuela Uno.</h1>
                            <p>Descripción escuela uno.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide d-block img-fluid img-carousel" src="{{ asset('img/escuelas-2.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Escuela Dos.</h1>
                            <p>Descripción escuela dos.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide d-block img-fluid img-carousel" src="{{ asset('img/escuelas-3.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-right">
                            <h1>Escuela Tres.</h1>
                            <p>Descripción escuela tres.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- END CAROUSEL -->

        <!-- POSTS -->
        <main role="main" class="container main-with-aside">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <div class="blog-post">
                        <h2 class="blog-post-title">Inicio de clases</h2>
                        <p class="blog-post-meta">15 de enero de 2019, <a href="#">Lucas</a></p>
                        <p>A partir del día de la fecha se encuentran abiertas las inscripciones para el cursado del año 2019-2020. Rogamos a los padres de todos los alumnos comunicarse con la dirección o contactarnos por este medio para poder informarlos de las nuevas disposiciones academicas.</p>
                        <blockquote>
                        <p>Los ingresantes obligatoriamente deberán presentarse con un mayor responsable para realizar el primer registro. Recuerden traer Fotocopia de DNI y certificado médico expedido por una entidad local.</p>
                        </blockquote>
                        <p>Los horarios de atención para las inscripciones serán de Lunes a Viernes de 09.00hs a 13.00hs sin excepción.</p>
                        <h3>Profesores</h3>
                        <p>Los profesores responsables de primer, segundo y tercer grado deberán estar presente de Lunes a Viernes de 09.00hs a 13.00hs para contestar cualquier duda de los responsable de los futuros alumnos.</p>
                    </div><!-- /.blog-post -->
                    <hr>
                    <div class="blog-post">
                        <h2 class="blog-post-title">Nuevas Disposiciones</h2>
                        <p class="blog-post-meta">22 de enero de 2019, <a href="#">Guido</a></p>

                        <p>A partir de este año queda terminantemente prohibido para los alumnos ingresar y utilizar celulares en el aula durante el dictado de materias. El no acatamiento de esta nueva disposición, sera sancionado con 1(UNA) amonestación hacía el alumno y de reiterarse en el transcurso del tiempo la severidad del castigo sera determinada por el profesor.</p>
                        <blockquote>
                        <p>A partir de este año todo alumno que se presente en el establecimiento posterior al izamiento de bandera contará con 1(UNA) inasistencia no pudiendo retirarse del establecimiento.</p>
                        </blockquote>
                        <a href="#">Ver más</a></p>
                    </div><!-- /.blog-post -->
                    <hr>
                    <!--pagination -->
                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">Comunicación con padres</h4>
                        <p class="mb-0">Proximamente, dispondremos de un método de comunicación exclusivo para los padres o tutores donde se informará todas las incumbencias de su hijo (Notas,notificaciones,apercibimientos,Etc.).</p>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Archivos</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">archivos de enero a diciembre</a></li>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Siguenos en:</h4>
                        <ol class="list-unstyled">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div><!-- /.row -->
        </main><!-- /.container -->


    </div>
@endsection
