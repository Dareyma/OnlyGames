<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Architects | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
    <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/assets/css/slicknav.css">
    <link rel="stylesheet" href="css/assets/css/animate.min.css">
    <link rel="stylesheet" href="css/assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="css/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="css/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/assets/css/themify-icons.css">
    <link rel="stylesheet" href="css/assets/css/themify-icons.css">
    <link rel="stylesheet" href="css/assets/css/slick.css">
    <link rel="stylesheet" href="css/assets/css/nice-select.css">
    <link rel="stylesheet" href="css/assets/css/style.css">
</head>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    
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
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
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

        <!--? Body Head -->
            <div class="slider-area2">
                <div class="slider-height2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2 pt-70 text-center">
                                    <h2>Contact Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- BodyHead End -->

        <!--?  Contact Area start  -->
            <section class="contact-section">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Contáctanos</h2>
                        </div>
                        
                        <!-- FORM -->
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Introduce el mensaje"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="name" id="name" type="text"  placeholder="Nombre de minecraft">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-control">
                                            <a style="margin-tp: 100px;">Seleccione el asunto del contacto: </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <select class="form-control" name="subject" id="subject" placeholder="Enter Subject"> 
                                                <option value="bug"> Reporte bug </option>
                                                <option value="hack"> Reporte Hacks</option>
                                                <option value="sugerencia"> Sugerencia</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                </div>
                            </form>
                        </div>

                        <!-- Derecha -->
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>onlygamesnetwork@gmail.com</h3>
                                    <p>¡Envíanos las pruebas por aquí!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Contact Area End -->
    </main>

    <!-- Footer Start-->   
        <footer>
            <div class="footer-area footer-padding section-bg" data-background="img/gallery/footer_bg.png">
                <div class="container"> </div>
            </div>
            </footer>
    <!-- Footer End-->

    <!-- Scroll -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
    <!-- Scroll end -->

    <!-- JS -->

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