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



    <main>
        <div class="card text-bg-dark text-white">
            <img src="{{URL::asset('img/auditorio.webp'); }}" class="card-img opacity-75" alt="Imagem da do auditório da Etec da Zona Leste">
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <div class="mx-5">
                    <h2 class="fs-1 fw-bolder text-light">Instituição ETEC da Zona Leste</h2>
                    <p class="fs-3 text-light">Conheça um pouco mais sobre nós e nosso compromisso com a sociedade.</p>
                </div>
            </div>
        </div>

        <div class="row py-5 mx-5">
            <div class="col">
                <h2 class="text-center fw-bold">ETEC Da Zona Leste</h2>
                <p>Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                </p>
                <p>Fundada em 2002, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>
                <p>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>
                <p>Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
            </div>
        </div>
    </main>


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