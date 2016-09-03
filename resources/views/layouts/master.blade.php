<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <!-- Your Basic Site Informations -->
    <title>Reuneos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conversi is a professional conversion landing page that built-in fully responsive template, premium design, elegant style and have a slew of features.">
    <meta name="keywords" content="Landing Page, One Page Template, Premium Design, Responsive Template, Conversion Landing Page, Conversion Template, Registration Form, Elegant Style, PSD, HTML5, CSS3, jQuery">
    <meta name="author" content="Affapress">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Colors -->
    <!--<link rel="stylesheet" href="css/colors/blue/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/green/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/pink/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/purple/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/yellow/color.css">-->

    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 8]>
    <link rel="stylesheet" href="css/ie-older.css">
    <![endif]-->

    <noscript><link rel="stylesheet" href="css/no-js.css"></noscript>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

<!-- #header -->
<header id="header" data-parallax="scroll" data-speed="0.2" data-natural-width="1920" data-natural-height="1080" data-image-src="images/content/bg/1.jpg">

    <!-- .header-overlay -->
    <div class="header-overlay">

        <!-- #navigation -->
        <nav id="navigation" class="navbar scrollspy">

            <!-- .container -->
            <div class="container">

                <div class="navbar-brand">
                    <a href="/"><img src="images/logo.png" alt="Logo"></a> <!-- site logo -->
                </div>

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#header" class="smooth-scroll">INICIO</a></li>
                    <li><a href="#testimonials" class="smooth-scroll">TESTIMONIOS</a></li>
                    <li><a href="#features" class="smooth-scroll">NOSOTROS</a></li>
                    <li>
                        <a href="home">
                            @if (Auth::guest())
                            INICIE SESIÓN
                            @else
                            ENTRAR
                            @endif
                        </a>
                    </li>
                    @if (Auth::guest())
                    <li class="menu-btn"><a href="register">ÚNASE AHORA!</a></li>
                    @endif
                </ul>

            </div>
            <!-- .container end -->

        </nav>
        <!-- #navigation end -->

        <!-- .header-content -->
        <div class="header-content">

            <!-- .container -->
            <div class="container">

                <!-- .row -->
                <div class="row">

                    <div class="col-sm-6 col-md-7 col-lg-6">
                        <div class="header-txt">
                            <h1>En REUNEOS encontrarás la mejor forma de realizar contactos de verdad con citas de verdad.</h1>
                            <h4>Tenemos la mejor forma de hacer contactos efectivos para tu emprendimiento, proyecto o negocio compartiendo con quien quieres tus intereses.</h4>
                            <p>¿ESTÁ LISTO PARA EMPEZAR A HACER NEGOCIOS?</p>

                            <div class="header-form">
                                <div class="submit-status"></div> <!-- submit status -->
                                <form method="post" action="#" class="affa-form-signup">
                                    <a href="register"><input type="button" name="submit" value="UNASÉ AHORA!" class="btn-medium"></a>
                                </form>
                                <p class="txt-desc">o conéctese utilizando Facebook o Google</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5 col-lg-offset-1">

                    </div>

                </div>
                <!-- .row end -->

            </div>
            <!-- .container end -->

        </div>
        <!-- .header-content end -->

    </div>
    <!-- .header-overlay end -->

</header>
<!-- #header end -->

@yield('content')

<!-- #footer -->
<footer id="footer">

    <!-- .container -->
    <div class="container">

        <p class="copyright-txt">&copy; 2016 Copyrights by REUNEOS - All rights reserved.</p>

        <div class="socials">
            <a href="#" title="Facebook" class="link-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" title="Twitter" class="link-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" title="Google Plus" class="link-google-plus"><i class="fa fa-google-plus"></i></a>
        </div>

    </div>
    <!-- .container end -->

</footer>
<!-- #footer end -->

<div id="customize">
    <div class="wrap-customize">
        <div class="customize-panel">
            <h5>Header</h5>
            <div class="customize-list-link">
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/stretched/header_1/" title="Layout Stretched 1"><i class="fa fa-caret-right"></i> Stretched 1</a>
                <a href="index-2.html" title="Layout Stretched 2"><i class="fa fa-caret-right"></i> Stretched 2</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/stretched/header_3/" title="Layout Stretched 3"><i class="fa fa-caret-right"></i> Stretched 3</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/stretched/header_4/" title="Layout Stretched 4"><i class="fa fa-caret-right"></i> Stretched 4</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/stretched/header_5/" title="Layout Stretched 5"><i class="fa fa-caret-right"></i> Stretched 5</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/stretched/header_6/" title="Layout Stretched 6"><i class="fa fa-caret-right"></i> Stretched 6</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_1/" title="Layout Boxed 1"><i class="fa fa-caret-right"></i> Boxed 1</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_2/" title="Layout Boxed 2"><i class="fa fa-caret-right"></i> Boxed 2</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_3/" title="Layout Boxed 3"><i class="fa fa-caret-right"></i> Boxed 3</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_4/" title="Layout Boxed 4"><i class="fa fa-caret-right"></i> Boxed 4</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_5/" title="Layout Boxed 5"><i class="fa fa-caret-right"></i> Boxed 5</a>
                <a href="http://affapress.com/templates/conversi_professional_conversion_landing_page/html/boxed/header_6/" title="Layout Boxed 6"><i class="fa fa-caret-right"></i> Boxed 6</a>
            </div>
        </div>
        <div class="customize-panel">
            <h5>Colors</h5>
            <div class="customize-list-color">
                <a href="#" class="blue" title="Blue" style="background-color:#3ebcfa;"></a>
                <a href="#" class="green" title="Green" style="background-color:#44d86e;"></a>
                <a href="#" class="pink" title="Pink" style="background-color:#fb53c2;"></a>
                <a href="#" class="purple" title="Purple" style="background-color:#c95ef5;"></a>
                <a href="#" class="red" title="Red" style="background-color:#85C1E9;"></a>
                <a href="#" class="yellow" title="Yellow" style="background-color:#f7b943;"></a>
            </div>
        </div>
    </div>
    <div class="popup-open"><i class="fa fa-gear"></i></div>
</div>

<!--[if lt IE 8]>
<div class="browser-notice">
    <div class="container">
        <div class="text">
            <h1>Internet Explorer Out To Date</h1>
            <p>Please update your Internet Explorer browser with a newer version (Internet Explorer 8 above) now!</p>
            <span>You can download it <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">here....</a></span>
        </div>
    </div>
</div>
<![endif]-->

<!-- JavaScripts -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/response.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.imgpreload.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE7s3AMgMt8XkGB3xZemuH4MU_HKNSpFw"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
    var map;

    map = new window.GMaps({
        div: '#companyMap',
        lat: -12.0411925,
        lng: -77.0282043,
        scrollwheel: false,
        zoomControl: false,
        disableDoubleClickZoom: false,
        disableDefaultUI: true
    });

    map.addMarker({
        lat: -12.042,
        lng: -77.028333,
        title: 'Company Name',
        infoWindow: {
            content: 'Your Company Name'
        }
    });
</script>

</body>
</html>