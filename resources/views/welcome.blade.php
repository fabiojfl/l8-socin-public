<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('assets/css/guest/boootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/guest/style.css') }}" rel="stylesheet">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />


        <title>Socinveste</title>

        <!--[if lte IE 9]>
            <p class="browserupgrade">
                You are using an <strong>outdated</strong> browser. Please
                <a href="https://browsehappy.com/">upgrade your browser</a> to improve
                your experience and security.
            </p>
        <![endif]-->

    <!-- ========================= preloader start ========================= -->

    </head>
    <body>
        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
	    <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <img src="{{ asset('assets/img/guest/logo.png') }}" alt="" srcset="" width="65" height="65">
            </a>
            <nav class="nav-link-lp">
                <ul>
                    <li><a href="#" class="">Início</a></li>
                    <li><a href="#" class="">Como investir</a></li>
                    <li><a href="#" class="">Serviços</a></li>
                    <li><a href="#" class="">Contatos</a></li>
                </ul>
            </nav>
            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="mb-3"><span>Tranquilidade</span> financeira é aqui</h1>
                        <p>Se você entende que, juntando-se a dezenas de pessoas com semelhante
                        objetivo, você constrói a sua tranquilidade financeira, seu lugar é
                        aqui. Invista, empreenda, construa riqueza. Você, eu e muito mais
                        gente valoriza o espírito empreendedor coletivo.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 mt-4">
                            <button type="button" class="btn btn-primary-lp btn-lg px-4 me-md-2">associe-se</button>
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4">fale conosco</button>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-lg-3" src="{{ asset('assets/img/guest/team-removebg-preview.png') }}" alt="" width="720">
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section id="form" class="form">
                <div class="row bg-form">
                    <div class="container col-xl-10 col-xxl-8">
                        <div class="row align-items-center g-lg-5 py-5">
                            <div class="col-md-10 col-lg-5">
                                <div class="card card-lp">
                                    <img src="{{ asset('assets/img/guest/form.jpg') }}" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <form class="form-lp pt-4">
                                            <input type="text" name="" id="" placeholder="Nome" />
                                            <input type="email" name="" id="" placeholder="Email" />
                                            <input type="tel" name="" id="" placeholder="Telefone" />
                                            <button
                                            type="button"
                                            class="btn btn-primary-lp btn-lg w-100"
                                            >
                                            enviar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 text-center text-lg-start">
                                <h1 class="">Entre em <span>contato</span> conosco.</h1>
                                <p class="col-lg-10">
                                    Cinco razões para você investir com a Socinveste.
                                </p>
                                <ul class="list-lp">
                                    <li><i class="lni lni-checkmark-circle"></i>Você se torna sócio de um empreendimento imobiliário colocando apenas dinheiro</li>
                                    <li><i class="lni lni-checkmark-circle"></i>A Socinveste realiza, em seu nome, a incorporação a preço de custo</li>
                                    <li><i class="lni lni-checkmark-circle"></i>O lucro é rateado entre os investidores proporcionalmente</li>
                                    <li><i class="lni lni-checkmark-circle"></i>Você acompanha cada passo da obra e cada real aplicado, virtualmente.</li>
                                    <li><i class="lni lni-checkmark-circle"></i>Você pode retirar seu investimento com lucro, mesmo antes de concluir a obra.</li>
                                </ul>
                                <p>Saiba mais</p>
                                <p>Investimento que você vê crescer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="team" class="team">
                <div class="container">
                    <div class="row align-items-center g-5 py-5">
                        <div class="col-lg-6">
                            <h1 class="mb-3 pb-3">
                                Vamos pensar <span>juntos</span>...
                            </h1>
                            <h2 class="pb-2">
                                <span>1.</span>  Você se esforça para economizar e dar entrada na aquisição de um imóvel,  financiando o saldo?
                            </h2>
                            <h2 class="pb-2">
                                <span>2.</span> Você vai dar lucro a uma incorporadora e a um banco?
                            </h2>
                            <h2 class="pb-2">
                                <span>3.</span> É justo, eles constroem por você e te emprestam o dinheiro que você não tem.
                            </h2>
                        </div>
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img
                                src="{{ asset('assets/img/guest/help.png') }}"
                                class="d-block mx-lg-auto img-fluid"
                                alt=""
                                width="700"
                                height="500"
                                loading="lazy"
                            />
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="sub-title">
                            <span>"</span>Agora imagina um grupo de cem pessoas empreendendo a construção e distribuindo o lucro proporcionalmente para cada investidor.<span>"</span>
                        </h1>
                        <h2>Isso é Socinveste, Sociedade de Investidores.</h2>
                        <p><i>Participe desse sucesso.</i></p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                            <button type="button" class="btn btn-primary-lp btn-lg px-4 me-md-2">associe-se</button>
                            <button type="button" class="btn btn-outline-info btn-lg px-4">fale conosco</button>
                        </div>
                    </div>
                </div>
            </section>
            <section id="site">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
                    <path fill="#1C2A4D" fill-opacity="1" d="M0,224L120,213.3C240,203,480,181,720,181.3C960,181,1200,203,1320,213.3L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                </svg>
                <div class="site-dashboard">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="{{ asset('assets/img/guest/dashboard-3d.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5">
                                <h1 class="bl-back">Possibilidades fundamentadas na força do associativismo financeiro</h1>
                                <h3>Neste site, você terá três níveis de acesso:</h3>
                                <div class="d-flex level">
                                    <!-- Icon -->
                                    <div class="icon text-primary">
                                        <i class="lni lni-keyword-research"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- Heading -->
                                        <h4 class="mb-1">Geral</h4>
                                        <!-- Text -->
                                        <p>saber sobre o que é de interesse geral dos associados.</p>
                                    </div>
                                </div>
                                <div class="d-flex level">
                                    <!-- Icon -->
                                    <div class="icon text-primary">
                                        <i class="lni lni-users"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- Heading -->
                                        <h4 class="mb-1">Assuntos do seu grupo</h4>
                                        <!-- Text -->
                                        <p>acompanhar andamento do empreendimento.</p>
                                    </div>
                                </div>
                                <div class="d-flex level">
                                    <!-- Icon -->
                                    <div class="icon text-primary">
                                        <i class="lni lni-user"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- Heading -->
                                        <h4 class="mb-1">Perfil do usuário</h4>
                                        <!-- Text -->
                                        <p>informações restritas ao associado.</p>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 text-decoration mt-4">
                                    <button type="button" class="btn btn-primary-lp btn-lg px-4 me-md-2 fw-bold">associe-se</button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg px-4 text-white">fale conosco</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
                <path fill="#1C2A4D" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
                </svg>
            </section>
        </main>
        <footer id="footer" class="link-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-contacts">
                            <h1>Socinvest</h1>
                            <h2>Sociedade de Investidores</h2>
                            <ul>
                                <li class="inst">
                                    <a href=""><i class="lni lni-instagram"></i></a>
                                </li>
                                <li class="face">
                                    <a href="http://"><i class="lni lni-facebook-original"></i></a></i>
                                </li>
                                <li class="whats">
                                    <a href="whats"><i class="lni lni-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="pb-2">Termos</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Termo de uso</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Termo de privacidade</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contrato de adesão</a>
                                </li>
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    @auth
                                    <a class="nav-link" href="{{ url('/dashboard') }}">Acesso ao painel administrativo</a>
                                    @else
                                    <a class="nav-link" href="{{ route('login') }}">Acessar</a>

                                    @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">Associe-se</a>
                                    @endif
                                @endauth
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
                            <h4 class="pb-2">Serviços</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                <a class="nav-link" href="#">Como investir</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Segurança</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Quem somos</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Contatos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <span class="text-muted"></span>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/js/guest/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/guest/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/guest/main.js') }}"></script>
    </body>
</html>
