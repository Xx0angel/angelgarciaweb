<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio de desarrollo web freelance">
    <meta name="language" content="spanish">
    <meta name="copyright" content="Angel Garcia WEB">
    <meta name="author" content="Angel Garcia">
    <meta property="og:title" content="Angel Garcia web" />
    <meta property="og:type" content="Desarrollo web" />
    <meta property="og:url" content="https://www.angelgarciaweb.com" />
    <meta property="og:image" content="https://www.angelgarciaweb.com/logo/logo.png" />
    <title>Angel Garcia WEB</title>
    <link rel="icon" href="img/AngelGarciaLogo.png">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- CDN Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caveat&family=Oswald:wght@200;300;400&family=Raleway:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- CDN IONICONSCOUTS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <header>
        <div class="head__brand">
            <img class="head__brand-logo" src="{{ asset('img/AngelGarciaLogo.png') }}" alt="">
        </div>
        <nav id="navegacion" class="navigation">
            <ul>
                <li class="list active">
                    <a href="#navegacion">
                        <span class="text">Inicio</span>
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                    </a>
                </li>

                <li class="list">
                    <a href="#habilidades">
                        <span class="text">Skills</span>
                        <span class="icon">
                            <ion-icon name="heart-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#portafolio">
                        <span class="text">Portafolio</span>
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="list">
                    <a href="#contacto">
                        <span class="text">Contacto</span>
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </nav>
    </header>


    <div id="Inicio" class="container__present format__use">
        <div id="particles-js"></div>
        <div class="presentation__box">
            <div class="box__grid">
                <div class="presentation">
                    <div>
                        <p class="presentation__name">Hola, Soy Angel</p>
                        <h1 class="format__uppercase">Developer WEB Full Stack</h1>


                        <p class="presentation__description">
                            Con un alto nivel de conocimientos en en el desarrollo WEB
                            y diseño, produciendo trabajos de calidad.
                        </p>
                        <button class="button__styles btn__1">
                            <a href="#contacto">
                                Contactame
                            </a>
                        </button>
                    </div>
                </div>
                <div class="photo__box">
                    <div class="me__photo">
                        <img src="{{ asset ('img/fuera_del_espacio.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Start Section my skills two -->
        <div id="habilidades" class="skills">
            <div class="skills__box">
                <div class="title__section">
                    <h3 class="title__section-txt">
                        Skills
                    </h3>
                    <p class="subtitle__section-txt">Mi nivel tecnico</p>
                </div>
                <div class="skills__flex-container">
                    <div class="skills__container">
                        <div class="skills__content-skill">
                            <div class="skills__title-box">
                                <i class="uil uil-window skill__icon"></i>
                                <h4 class="skills__title-txt">Frontend</h4>
                            </div>
                            <i class="uil uil-angle-down skill__icon"></i>
                        </div>
                        <div class="skills__list-box show__skill">
                            <ul class="skills__list">
                                <li class="skills__item">HTML<span class="skills__percent">90%</span></li>
                                <div class="skills__linepercent"></div>
                                <li class="skills__item">CSS<span class="skills__percent">80%</span></li>
                                <div class="skills__linepercent"></div>
                                <li class="skills__item">Javascript<span class="skills__percent">70%</span></li>
                                <div class="skills__linepercent"></div>
                                <li class="skills__item">Boostrap<span class="skills__percent">90%</span></li>
                                <div class="skills__linepercent"></div>
                                <li class="skills__item">ReactJS<span class="skills__percent">60%</span></li>
                                <div class="skills__linepercent"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="skills__container">
                        <div class="skills__content-skill">
                            <div class="skills__title-box ">
                                <i class="uil uil-server-network skill__icon"></i>
                                <h4 class="skills__title-txt">Backend</h4>
                            </div>
                            <i class="uil uil-angle-down skill__icon"></i>
                        </div>
                        <div class="skills__list-box show__skill">
                            <ul class="skills__list">
                                <li class="skills__item">PHP<span class="skills__percent">80%</span></li>
                                <div class="skills__linepercent-2"></div>
                                <li class="skills__item">MySQL<span class="skills__percent">90%</span></li>
                                <div class="skills__linepercent-2"></div>
                                <li class="skills__item">NodeJs<span class="skills__percent">70%</span></li>
                                <div class="skills__linepercent-2"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="skills__container">
                        <div class="skills__content-skill">
                            <div class="skills__title-box">
                                <i class="uil uil-wrench skill__icon"></i>
                                <h4 class="skills__title-txt">UX/UI & Tools</h4>
                            </div>
                            <i class="uil uil-angle-down skill__icon"></i>
                        </div>
                        <div class="skills__list-box show__skill">
                            <ul class="skills__list">
                                <li class="skills__item">Figma<span class="skills__percent">80%</span></li>
                                <div class="skills__linepercent-3"></div>
                                <li class="skills__item">Photoshop<span class="skills__percent">80%</span></li>
                                <div class="skills__linepercent-3"></div>
                                <li class="skills__item">Git<span class="skills__percent">90%</span></li>
                                <div class="skills__linepercent-3"></div>
                                <li class="skills__item">GitHub<span class="skills__percent">90%</span></li>
                                <div class="skills__linepercent-3"></div>
                                <li class="skills__item">VSCode<span class="skills__percent">80%</span></li>
                                <div class="skills__linepercent-3"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section my skills -->

        <!-- Start Arrow to the top -->
        <div class="to__top-box">
            <div class="to__top-content">
                <a href="#navegacion" class="to__top-link">
                    <ion-icon class="to__top-icon" name="arrow-up-outline"></ion-icon>
                </a>
            </div>
        </div>
        <!-- End Arrow to the top -->

        <!-- Start Banner Contact -->

        <div class="banner__container">
            <div class="banner__box">
                <div class="banner">
                    <div>
                        <h3>
                            ¿Tienes un nuevo Proyecto?
                        </h3>
                        <a class="button__ghost" href="">
                            <div class="button__box">
                                Contactame
                                <i class="button__icon uil uil-message"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Banner Contact -->



        <div class="container__principal">
            <!-- Start section projects -->

            <div id="portafolio" class="portafolio__container format__use">
                <div class="title__section">
                    <h3 class="title__section-txt">
                        Portafolio
                    </h3>
                    <p class="subtitle__section-txt">Algunos de mis proyectos</p>
                </div>
                <div class="portafolio__box">
                    <div class="portafolio__content">
                        <div class="portafolio__grid">

                            <!-- Project 1 -->

                            <a class="link__project" href="https://xx0angel.github.io/Fotografa/" target="about__blank">
                                <div class="my__project drop__shadow">
                                    <div class="project__view">
                                        <div class="project__eye">
                                            <img src="./img/web_fotografa.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="project__description">
                                        <h1>Fotografa</h1>
                                        <p>
                                            Portafolio de proyectos de fotografia.
                                        </p>

                                    </div>
                                    <hr class="rule__card">
                                    <div class="project__creator">
                                        <div class="project__avatar">
                                            <img src="./img/avatar.jpeg" alt="">
                                        </div>
                                        <div class="project__creator__name">
                                            <h2>Por</h2>
                                            <p>Angel Garcia</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Project 2 -->

                            <a class="link__project" href="https://xx0angel.github.io/loopstudios/" target="about_blank">
                                <div class="my__project drop__shadow">
                                    <div class="project__view">
                                        <div class="project__eye">
                                            <img src="./img/loopstudios_portada.png" alt="">
                                        </div>
                                    </div>
                                    <div class="project__description">
                                        <h1>Loopstudios</h1>
                                        <p>
                                            Sitio web dedicado a la tecnologia.
                                        </p>
                                    </div>
                                    <hr class="rule__card">
                                    <div class="project__creator">
                                        <div class="project__avatar">
                                            <img src="./img/avatar.jpeg" alt="">
                                        </div>
                                        <div class="project__creator__name">
                                            <h2>Por</h2>
                                            <p>Angel Garcia</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Project 3 -->
                            <a href="https://xx0angel.github.io/Sunnyside/" target="_blank">
                                <div class="my__project drop__shadow">
                                    <div class="project__view">
                                        <div class="project__eye">
                                            <img src="./img/sunnyside_portada.png" alt="">
                                        </div>
                                    </div>
                                    <div class="project__description">
                                        <h1>Sunnyside</h1>
                                        <p>
                                            Sitio web de una agencia publicitaria
                                        </p>
                                    </div>
                                    <hr class="rule__card">
                                    <div class="project__creator">
                                        <div class="project__avatar">
                                            <img src="./img/avatar.jpeg" alt="">
                                        </div>
                                        <div class="project__creator__name">
                                            <h2>Por</h2>
                                            <p>Angel Garcia</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Section projects -->

            <!-- Start section contacto -->

            <div id="contacto" class="contacto">
                <div class="title__section">
                    <h3 class="title__section-txt">
                        Contacto
                    </h3>
                    <p class="subtitle__section-txt">Ponte en contacto</p>
                </div>
                <div class="contacto__container">
                    <div class="contacto__container-info">

                        <!-- Social media contact  -->

                        <div class="contacto__container-contacto">
                            <div class="contacto__container-item">
                                <span class="contacto__container-icon"><i class="uil uil-envelope"></i></span>
                                <div class="contacto__medio">
                                    <p class="contacto__title">Correo</p>
                                    <p class="contacto__container-medio">hola@angelgarciaweb.com</p>
                                </div>
                            </div>
                            <div class="contacto__container-item">
                                <span class="contacto__container-icon"><i class="uil uil-incoming-call"></i></span>
                                <div class="contacto__medio">
                                    <p class="contacto__title">Llamame</p>
                                    <p class="contacto__container-medio">5624784317</p>
                                </div>
                            </div>
                            <div class="contacto__container-item">
                                <span class="contacto__container-icon"><i class="uil uil-whatsapp"></i></span>
                                <div class="contacto__medio">
                                    <p class="contacto__title">Whastapp</p>
                                    <p class="contacto__container-medio">5624784317</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact form -->

                        <form class="contacto__form" action="{{route('contactanos.store')}}" autocomplete="off" method="POST">

                            @csrf

                            <fieldset class="contacto__fieldset">
                                <div class="contacto__form-dato">
                                    <input class="contacto__form-input" type="text" name="nombre" max="50" required><span class="barra"></span>
                                    <label class="contacto__form-label" for="nombre">Nombre</label>
                                </div>

                                @error('nombre')
                                <p><strong>{{$message}}</strong></p>
                                @enderror

                                <div class="contacto__form-dato">
                                    <input class="contacto__form-input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresa una dirección de correo valida" required>
                                    <span class="barra"></span>
                                    <label class="contacto__form-label" for="email">Correo</label>
                                </div>

                                @error('email')
                                <p><strong>{{$message}}</strong></p>
                                @enderror

                                <div class="contacto__form-dato">
                                    <input class="contacto__form-input" type="number" name="telefono" minlength="8" maxlength="10" required>
                                    <span class="barra"></span>
                                    <label class="contacto__form-label" for="telefono">Telefono</label>
                                </div>

                                @error('telefono')
                                <p><strong>{{$message}}</strong></p>
                                @enderror

                                <div class="contacto__form-dato">
                                    <textarea class="contacto__form-textarea" name="comentario" id="comentario" cols="50" rows="3" required></textarea>
                                    <span class="barra"></span>
                                    <label class="contacto__form-label" for="comentario">Comentarios</label>
                                </div>

                                @error('comentario')
                                <p><strong>{{$message}}</strong></p>
                                @enderror
                            </fieldset>
                            <div class="contacto__submit">
                                <button type="submit" class="contacto__submit-boton">Contactame</button>
                            </div>
                        </form>

                        @if(session('Info'))
                        <script>
                            alert("{{session('Info')}}")
                        </script>
                        @endif
                    </div>
                </div>
            </div>

            <!-- End section contact -->
        </div>

        <!-- End section projects -->
    </main>

    <!-- Start section footer -->

    <footer class="footer">
        <div class="footer__container">
            <div class="footer__presentation">
                <h3 class="footer__name">Angel</h3>
                <p class="footer__description">Desarrollo WEB</p>
            </div>
            <ul class="footer__links">
                <li class="footer__item"><a class="footer__item-link" href="#habilidades">Skills</a></li>
                <li class="footer__item"><a class="footer__item-link" href="#portafolio">Portafolio</a></li>
                <li class="footer__item"><a class="footer__item-link" href="#contacto">Contacto</a></li>
            </ul>
            <div class="footer__socialmedia">
                <a href="https://www.linkedin.com/in/angel-garc%C3%ADa-web/" target="blank_" class="social__media-link"><i class="social__media-icon uil uil-linkedin-alt"></i></i></a>
                <a href="https://www.facebook.com/AngelGarc%C3%ADaweb-104270632210744" target="blank_" class="social__media-link"><i class="social__media-icon uil uil-facebook"></i></a>
                <a href="https://github.com/Xx0angel" target="blank_" class="social__media-link"><i class="social__media-icon uil uil-github"></i></a>

            </div>
        </div>
        <div class="footer__copyright">
            <div class="copyright__container">
                <span class="copyright">Hecho con ❤ Angel Garcia<iconify-icon inline icon="twemoji:flag-mexico" width="32" height="32"></iconify-icon></span>
            </div>
        </div>

    </footer>

    <!-- End section footer -->

    <!-- Ionicons CDN -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- CDN Scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.presentation__box', {
            delay: 300
        });
        ScrollReveal().reveal('.skills');
        ScrollReveal().reveal('.skills__container', {
            delay: 300
        });
        ScrollReveal().reveal('.banner__container', {
            delay: 300
        });
        ScrollReveal().reveal('.portafolio__container', {
            delay: 300
        });
        ScrollReveal().reveal('.my__project', {
            delay: 300
        });
        ScrollReveal().reveal('.contacto', {
            delay: 300
        });
        ScrollReveal().reveal('.contacto__container', {
            delay: 300
        });
    </script>

    <!-- CDN Icons -->
    <script src="https://kit.fontawesome.com/084c734fa9.js" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <!-- Particle JS -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="{{ asset('JS/particles.js') }}"></script>

    <!-- Script JS -->
    <script src="{{ asset('JS/script.js') }}"></script>
</body>

</html>