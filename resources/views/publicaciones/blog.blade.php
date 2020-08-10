<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> OnlyGames </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

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
        <link rel="stylesheet" href="css/assets/css/responsive.css">
    </head>

    <body>
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
            
        <!--? Header Start -->
            <header>
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
        <!-- Header End -->
        
        <main>
            <!-- SIDER START -->
                <div class="slider-area2">
                    <div class="slider-height2 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="hero-cap hero-cap2 pt-70 text-center">
                                        <h2>Publicaciones</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Slider end -->

            <!-- BLOG AREA START -->
                <section class="blog_area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mb-5 mb-lg-0">
                                <div class="blog_left_sidebar">
                                    
                                <!-- ARTICULOS START -->
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="img/hero/slider2.png" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>Día</h3>
                                                <p>Mes</p>
                                            </a>
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block" href="blog_details.html">
                                                <h2 class="blog-head" style="color: #2d2d2d;">  TITULO </h2>
                                            </a>
                                            <p> Texto, Texto Textov v v v v v vvvvvvTextoTextovvTexto</p>
                                            <ul class="blog-info-link">
                                                <li><a href="#"><i class="fa fa-user"></i> USUARIO </a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i> Número de comentarios </a></li>
                                            </ul>
                                        </div>
                                    </article>
                                <!-- Articulos end -->
                                    
                                <!-- PAGINATOR -->
                                    <nav class="blog-pagination justify-content-center d-flex">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <i class="ti-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <i class="ti-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                <!-- PAGINATOR END -->
                                </div>
                            </div>
                            <!-- DERECHA START -->
                                <div class="col-lg-4">
                                    <div class="blog_right_sidebar">
                                        <aside class="single_sidebar_widget search_widget">
                                            <form action="#">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder='Buscador'
                                                            onfocus="this.placeholder = ''"
                                                            onblur="this.placeholder = 'Buscador'">
                                                        <div class="input-group-append">
                                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                                    type="submit">Buscar</button>
                                            </form>
                                        </aside>

                                        <aside class="single_sidebar_widget post_category_widget">
                                            <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                            <ul class="list cat-list">
                                                <li>
                                                    <a href="#" class="d-flex">
                                                        <p>Actualizaciones</p>
                                                        <p>(Nº publicaciones)</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex">
                                                        <p>Ciudades</p>
                                                        <p>(Nº publicaciones)</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex">
                                                        <p>Eventos</p>
                                                        <p>(Nº publicaciones)</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </aside>

                                        <aside class="single_sidebar_widget instagram_feeds">
                                            <h4 class="widget_title" style="color: #2d2d2d;">Instagram</h4>
                                            <ul class="instagram_row flex-wrap">
                                                <li>
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/blog/insta3.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/blog/insta2.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/blog/insta1.jpg" alt="">
                                                    </a>
                                                </li>

                                        </aside>

                                    </div>
                                </div>
                            <!-- Derecha end -->

                        </div>
                    </div>
                </section>
            <!-- Blog area end -->
        </main>
        
        <!-- FOOTER START -->
            <footer>
                <!-- Footer Start-->
                <div class="footer-area footer-padding section-bg" data-background="img/gallery/footer_bg.png">
                    <div class="container">
                        
                        <!-- Footer bottom -->
                        
                    </div>
                </div>
                <!-- Footer End-->
            </footer>
        <!-- Footer end -->

        <!-- SCROLL START -->
            <div id="back-top" >
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>
        <!-- Scroll end -->

        <!-- JS here -->

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