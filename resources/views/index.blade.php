<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Only Games </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/assets/css/slicknav.css">
        <link rel="stylesheet" href="css/assets/css/flaticon.css">
        <link rel="stylesheet" href="css/assets/css/hamburgers.min.css">
        <link rel="stylesheet" href="css/assets/css/gijgo.css">
        <link rel="stylesheet" href="css/assets/css/animate.min.css">
        <link rel="stylesheet" href="css/assets/css/animated-headline.css">
        <link rel="stylesheet" href="css/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="css/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/assets/css/themify-icons.css">
        <link rel="stylesheet" href="css/assets/css/slick.css">
        <link rel="stylesheet" href="css/assets/css/nice-select.css">
        <link rel="stylesheet" href="css/assets/css/style.css">
    </head>

    <body>

        <!-- PRELOADER -->
            <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                    <div class="preloader-inner position-relative">
                        <div class="preloader-circle"></div>
                        <div class="preloader-img pere-text">
                            <img src="assets/img/logo/loder.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Preloader end  -->

        <!-- HEADDER -->
            <header>
                <!--? Header Start -->
                <div class="header-area header-transparent">
                    <div class="main-header header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2 col-md-1">
                                    <div class="logo">
                                        <a href=""><img src="img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10">
                                    <div class="main-menu black-menu menu-bg-white d-none d-lg-block">
                                        <div class="hamburger hamburger--collapse">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </div>
                                        <nav class="hamburger-menu">
                                            <ul id="navigation"> 
                                                <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                                <li><a href="">Reglas</a></li>
                                                <li><a href="">Ciudades</a></li>
                                                <li>
                                                    <a href="{{ route('publicaciones') }}">Publicaciones</a>
                                                    <ul class="submenu">
                                                        <li><a href="">Actualizaciones</a></li>
                                                        <li><a href="">Ciudades</a></li>
                                                        <li><a href="">Eventos</a></li>
                                                    </ul>
                                                </li>
                                                
                                                <li>
                                                    <a>RRSS</a>
                                                    <ul class="submenu">
                                                        <li><a href="https://twitter.com/OnlyGames_Net?s=09"><i class="fab fa-twitter"></i> Twitter </a></li>
                                                        <li><a href="https://instagram.com/onlygamesmc?igshid=16qavzyyfbin4"><i class="fab fa-instagram"></i> Instagram </a></li>
                                                        <li><a href="https://discord.gg/5F9KBxq"><i class="fab fa-discord"></i> Discord</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="">Login<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!-- header end -->
        
        <main>
            <!-- SLIDER START -->
                <div class="slider-area">
                    <div class="slider-full-active owl-carousel custom-dots">
                        <div class="slide-full slider-height d-flex align-items-center" style="background-image: url(img/hero/slider7.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                                        <div class="slide-full-content">
                                            <span>Minecraft Java</span>
                                            <h1>Servidor de Minecraft</h1>
                                            <p>Supervivencia, ciudades, misiones...</p>
                                            <a class="btn" href="{{ route('contact') }}">Sugerencias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-full d-flex slider-height align-items-center" style="background-image: url(img/hero/slider6.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                                        <div class="slide-full-content">
                                            <span>Minecraft Java</span>
                                            <h1>Servidor de Minecraft</h1>
                                            <p>Supervivencia, ciudades, misiones...</p>
                                            <a class="btn" href="#">Sugerencias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-full d-flex slider-height align-items-center" style="background-image: url(img/hero/slider4.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                                        <div class="slide-full-content">
                                            <span>Minecraft Java</span>
                                            <h1>Servidor de Minecraft</h1>
                                            <p>Supervivencia, ciudades, misiones...</p>
                                            <a class="btn" href="#">Sugerencias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-full-active owl-carousel custom-dots">
                        <div class="slide-full slider-height d-flex align-items-center" style="background-image: url(img/hero/slider1.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                                        <div class="slide-full-content">
                                            <span>Minecraft Java</span>
                                            <h1>Servidor de Minecraft</h1>
                                            <p>Supervivencia, ciudades, misiones...</p>
                                            <a class="btn" href="#">Sugerencias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- SLIDER END -->

            <!-- ACTUALIZACION START-->
                <section class="about-area section-padding2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-10">
                                <div class="about-caption mb-50">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle section-tittle2 mb-35">
                                        <span>Última actualización</span>
                                        <h2> Título </h2>
                                    </div>
                                    <p>Brook presents your services with flexible, convenient and cdpoe layouts. 
                                    You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. 
                                    Pixel-perfreplication of the designers is intended.
                                    </p>
                                    <a href="about.html" class="btn">Saber más</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!-- about-img -->
                                <div class="about-img ">
                                    <div class="about-font-img ">
                                        <img src="img/hero/slider7.png" alt="" style="height: 700; width: 700px;">
                                    </div>
                                    <!-- <div class="about-back-img ">
                                        <img src="img/gallery/about2.png" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- ACTUALIZACION END-->

            <!-- SERVICIOS START -->
                <section class="service-area pt-150 pb-150">
                    <div class="service-bg"></div>
                    <div class="container">
                        <!-- Section Tittle -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                                <div class="section-tittle section-tittle3  text-center mb-90">
                                    <span>¿Qué ofrecemos?</span>
                                    <h2> Ofrecemos los siguientes modos de juegos: </h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                                <div class="services-caption text-center mb-30">
                                    <div class="service-icon">
                                        <i class="flaticon-null"></i>
                                    </div> 
                                    <div class="service-cap">
                                        <h4><a href="#">Ciudades</a></h4>
                                        <p>Sorem spsum dolor sit amsectetr adipisclit, seddo eiusmod tempr incididunt laborea.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                                <div class="services-caption active text-center mb-30">
                                    <div class="service-icon">
                                        <i class="flaticon-null-1"></i>
                                        <!-- <img src="img/elements/netherite.jfif"> -->
                                    </div> 
                                    <div class="service-cap">
                                        <h4><a href="#">Survival</a></h4>
                                        <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                                    </div>
                                </div>
                            </div> 
                            <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                                <div class="services-caption text-center mb-30">
                                    <div class="service-icon">
                                        <i class="flaticon-null-2"></i>
                                    </div> 
                                    <div class="service-cap">
                                        <h4><a href="#">Urban Design</a></h4>
                                        <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
            <!-- servicios end -->

            <!-- STAFF START -->
                <section class="team-area ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                                <!-- Section Tittle -->
                                <div class="section-tittle text-center mb-70">
                                    <span>Staff</span>
                                    <h2> Equipo directivo de OnlyGames</h2>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <!-- single Tem -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="img/gallery/Dareyma.png" alt="">
                                    </div>
                                    <div class="team-caption">
                                        <h3><a href="#">Dareyma</a></h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="img/gallery/AlvarZ4.png" alt="">
                                    </div>
                                    <div class="team-caption">
                                        <h3><a href="#">AlvarZ4</a></h3>
                                        <span>Owner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="img/gallery/iToxicD.png" alt="">
                                    </div>
                                    <div class="team-caption">
                                        <h3><a href="#">iToxicD</a></h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Staff end -->
        </main>

        <footer>
            <!-- Footer Start-->
                <div class="footer-area footer-padding section-bg" data-background="img/gallery/footer_bg.png">
                    <div class="container"> </div>
                </div>
            <!-- Footer End-->
        </footer>

        <!-- Scroll START -->
            <div id="back-top" >
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>
        <!-- Scroll end -->

        <!-- JS START -->
            <script src="css/assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="css/assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="css/assets/js/popper.min.js"></script>
            <script src="css/assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="css/assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="css/assets/js/owl.carousel.min.js"></script>
            <script src="css/assets/js/slick.min.js"></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="css/assets/js/wow.min.js"></script>
            <script src="css/assets/js/animated.headline.js"></script>
            <script src="css/assets/js/jquery.magnific-popup.js"></script>

            <!-- Date Picker -->
            <script src="css/assets/js/gijgo.min.js"></script>
            <!-- Nice-select, sticky -->
            <script src="css/assets/js/jquery.nice-select.min.js"></script>
            <script src="css/assets/js/jquery.sticky.js"></script>
            
            <!-- counter , waypoint,Hover Direction -->
            <script src="css/assets/js/jquery.counterup.min.js"></script>
            <script src="css/assets/js/waypoints.min.js"></script>
            <script src="css/assets/js/jquery.countdown.min.js"></script>
            <script src="css/assets/js/hover-direction-snake.min.js"></script>

            <!-- contact js -->
            <script src="css/assets/js/contact.js"></script>
            <script src="css/assets/js/jquery.form.js"></script>
            <script src="css/assets/js/jquery.validate.min.js"></script>
            <script src="css/assets/js/mail-script.js"></script>
            <script src="css/assets/js/jquery.ajaxchimp.min.js"></script>
            
            <!-- Jquery Plugins, main Jquery -->	
            <script src="css/assets/js/plugins.js"></script>
            <script src="css/assets/js/main.js"></script>
        <!-- Js end -->

    </body>
</html>