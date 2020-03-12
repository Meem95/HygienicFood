<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<head>
    <meta charset="utf-8"/>
    <title>@yield('title') | Hygienic Food</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="../../assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN: BASE PLUGINS  -->
    <link href="../../assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->


    <!-- BEGIN THEME STYLES -->
    <link href="../../assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="../../assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="img/favicon.png"/>
    @stack('css')
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-shop-demo-1">
<header class="c-layout-header c-layout-header-6 c-layout-header-default-mobile c-layout-header-shop-1" data-minimize-offset="80">
    @include('frontend.header')
</header>


<!-- BEGIN: PAGE CONTAINER -->
@yield('body')
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-7 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-7">
    @include('frontend.footer')
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-7 -->

<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/plugins/jquery.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
<script src="../../assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
<script src="../../assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

<!-- END: CORE PLUGINS -->

<!-- BEGIN: LAYOUT PLUGINS -->
<script src="../../assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="../../assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="../../assets/plugins/typed/typed.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="../../assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->

<!-- BEGIN: THEME SCRIPTS -->
<script src="../../assets/base/js/components.js" type="text/javascript"></script>
<script src="../../assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="../../assets/base/js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->

<!-- BEGIN: PAGE SCRIPTS -->
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="../../assets/demos/default/js/scripts/revo-slider/shop-slider-5.js" type="text/javascript"></script>
@stack('js')
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-64667612-1', 'themehats.com');
    ga('send', 'pageview');
</script>
</body>


<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-home-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 05:43:45 GMT -->
</html>
