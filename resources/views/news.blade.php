<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ETEC Zona Leste</title>

    <!-- getbootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!--====== Lineicons CSS ======-->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!--====== Style css ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/starter.css" />

    <!--====== Tiny Slider Css ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/tiny-slider.css" />

    <!-- Styles -->
    <link href="{{URL::asset('css/header-card.css'); }}" rel="stylesheet">
    <link href="{{URL::asset('css/notice.css'); }}" rel="stylesheet">
    <link href="{{URL::asset('css/footer.css'); }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">ETEC Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/noticias">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--====== FEATURE ONE PART START ======-->
    <section class="features-area features-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="title">Notícias da ZL</h3>
                        <p class="text">
                            Para deixar vocês sempre atualizados do que está acontecendo.
                        </p>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-compass"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Tecnologia</h4>
                            <p class="text">
                                Nossa nova sala maker e os projetos feitos lá.
                            </p>
                            <div class="features-btn rounded-buttons">
                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">
                                    SAIBA MAIS
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-construction"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Melhorias</h4>
                            <p class="text">
                                Obras que estão sendo feitas pela Etec.
                            </p>
                            <div class="features-btn rounded-buttons">
                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">
                                    SAIBA MAIS
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="features-style-one text-center">
                        <div class="features-icon">
                            <i class="lni lni-cup"></i>
                        </div>
                        <div class="features-content">
                            <h4 class="features-title">Tecsesp e eventos</h4>
                            <p class="text">
                                Últimas medalhas conquistadas
                            </p>
                            <div class="features-btn rounded-buttons">
                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">
                                    SAIBA MAIS
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single features -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== FEATURE ONE PART ENDS ======-->
    <!--====== BLOG PART START ======-->
    <section class="blog-area pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-blog blog-style-one">
                        <div class="blog-image">
                            <a href="javascript:void(0)"><img src="https://cdn.ayroui.com/1.0/images/blog/1.jpg" alt="Blog" /></a>
                            <a href="javascript:void(0)" class="category">Tecnologia</a>
                        </div>
                        <div class="blog-content">
                            <h5 class="blog-title">
                                <a href="javascript:void(0)">
                                    Programa P-Tech transforma vidas
                                </a>
                            </h5>
                            <span><i class="lni lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni lni-comments-alt"></i> 24 Comment</span>
                            <p class="text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus obcaecati dolor repellat, asperiores distinctio perspiciatis labore sequi officia iste, eveniet autem aut excepturi eligendi deleniti, dolorum atque. Eos, nam iusto latum!
                            </p>
                            <a class="more" href="javascript:void(0)">LEIA SOBRE</a>
                        </div>
                    </div>
                    <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-blog blog-style-one">
                        <div class="blog-image">
                            <a href="javascript:void(0)"><img src="https://cdn.ayroui.com/1.0/images/blog/2.jpg" alt="Blog" /></a>
                            <a href="javascript:void(0)" class="category">Saúde</a>
                        </div>
                        <div class="blog-content">
                            <h5 class="blog-title">
                                <a href="javascript:void(0)">
                                    Vantagens de ter uma psicóloga na unidade
                                </a>
                            </h5>
                            <span><i class="lni lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni lni-comments-alt"></i> 24 Comment</span>
                            <p class="text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque iusto repellat corporis maiores. Inventore veritatis enim dolores perspiciatis. Saepe explicabo minus.
                            </p>
                            <a class="more" href="javascript:void(0)">LEIA SOBRE</a>
                        </div>
                    </div>
                    <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-blog blog-style-one">
                        <div class="blog-image">
                            <a href="javascript:void(0)"><img src="https://cdn.ayroui.com/1.0/images/blog/3.jpg" alt="Blog" /></a>
                            <a href="javascript:void(0)" class="category">Ciência</a>
                        </div>
                        <div class="blog-content">
                            <h5 class="blog-title">
                                <a href="javascript:void(0)">
                                    Nova ciência na Etec
                                </a>
                            </h5>
                            <span><i class="lni lni-calendar"></i> Mar 23, 2022</span>
                            <span><i class="lni lni-comments-alt"></i> 24 Comment</span>
                            <p class="text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat dolore libero quis perspiciatis quia laborum, adipisci eveniet voluptatum ut, repellendus temporibus consequuntur pariatur, dolorum amet assumenda corrupti numquam quasi molestiae?
                            </p>
                            <a class="more" href="javascript:void(0)">LEIA SOBRE</a>
                        </div>
                    </div>
                    <!-- single blog -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== BLOG PART ENDS ======-->

    <footer class="footer-area footer-one">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-sm-12">
                        <div class="f-about">
                            <div class="footer-logo">
                                <a href="javascript:void(0)">
                                    <img src="{{URL::asset('img/logo.png'); }}" alt="Logo" />
                                </a>
                            </div>
                            <p class="text">
                                Um lugar de sonhos e de desafios. Faça acontecer com a Etec ZL!
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Cursos</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Desenvolvimento de Sistemas</a></li>
                                <li><a href="javascript:void(0)">Logística</a></li>
                                <li><a href="javascript:void(0)">Contabilidade</a></li>
                                <li><a href="javascript:void(0)">Administração</a></li>
                            </ul>
                        </div>
                        <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Instituição</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Infraestrutura</a></li>
                                <li><a href="javascript:void(0)">Nossa História</a></li>
                                <li><a href="javascript:void(0)">Manual do Aluno</a></li>
                                <li><a href="javascript:void(0)">Regimento das ETECs</a></li>
                            </ul>
                        </div>
                        <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <!-- Start Footer Contact -->
                        <div class="footer-contact">
                            <h6 class="footer-title">Ajuda e Contato</h6>
                            <ul>
                                <li>
                                    <i class="lni lni-map-marker"></i> Av Águia de Haia 2633, São Paulo
                                </li>
                                <li><i class="lni lni-phone-set"></i> (11) 2045-4000</li>
                                <li><i class="lni lni-envelope"></i> suporte.etec@cps.sp.gov.br</li>
                            </ul>
                        </div>
                        <!-- End Footer Contact -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="
                  copyright
                  text-center
                  d-md-flex
                  justify-content-between
                  align-items-center
                  ">
                            <p class="text">© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
                            <ul class="social">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- copyright -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer copyright -->
    </footer>


    <!--====== Tiny Slider js ======-->
    <script src="https://cdn.ayroui.com/1.0/js/tiny-slider.js"></script>
    <script>
        //======== tiny slider for slider-items-active
        tns({
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            container: ".slider-items-active",
            center: false,
            nav: true,
            navPosition: "bottom",
            controls: false,
            speed: 400,
            controlsText: [
                '<i class="lni lni-arrow-left-circle"></i>',
                '<i class="lni lni-arrow-right-circle"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },

                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
            },
        });
    </script>

</body>

</html>