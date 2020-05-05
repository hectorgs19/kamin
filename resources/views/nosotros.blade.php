<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About &middot; Kamín</title>

    <!-- mobile setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-title" content="Kamín" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Page description -->
    <meta name="description" content="">

    <!-- Facebook -->
    <meta property="og:title" content="About" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="./about.html/" />
    <meta property="og:description" content="Here the excerp for this page" />

    <!-- Twitter -->
    <meta name="twitter:title" content="About" />
    <meta name="twitter:description" content="Here the excerp for this page" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon.png" sizes="96x96">

</head>

<body>

    <!-- Top shadow -->
    <div class="shadow"></div>
    <!-- end top shadow -->

    <!-- The splash screen -->
    <div id="splash">
        <div class="loader">
            <img class="splash-logo" src="./assets/img/logo/logo.svg" />
            <div class="line"></div>
        </div>
    </div>
    <!-- End of splash screen -->

    <div id="wrapper">
        <!-- main content -->
        <main>
            <!-- The header for content -->
            <header class="detail">
                <a href="." class="back" data-transition="slide-from-top">
                    <h1>back</h1>
                </a>
                <section>
                    <h3 class="badge">El comienzo</h3>
                    <h1>Nosotros</h1>
                </section>
            </header>
            <!-- end header -->
            <div class="content-wrap">
                <div class="content">
                    <i class="icon bg icon-CommentwithLines"></i>
                    <section>
                        <header>
                            <h2>Qué hacemos</h2>
                            <h4 class="serif">Nuestra pequeña historia</h4>
                        </header>

                        <section class="nosotros">
                            <p>El Tiempo es uno de los bienes mas preciados en el mundo,
                                y en Kamín, queremos ponerlo en Valor.</p>
                            <p>Concentrar el tiempo en una cucharada, un sorbo, o un bocado, capturándolo en la memoria como si de una fotografía se tratase.</p>
                            <p>ecuperando formas y maneras de hacer de otras épocas en los que el tiempo tenia otra talla y medida,<br>
                                ayudándonos de él, hoy,<br>
                                como ingrediente esencial en muchas de nuestras elaboraciones.
                                </p>
                        </section>

                        <footer>
                            <div class="signature">
                                <h6>Escrito por.</h6>
                                <h5>Pierre Gabant</h5>
                            </div>
                        </footer>
                    </section>
                </div>
            </div>
            <div data-remodal-id="modal">
                <i class="icon bg icon-CommentwithLines"></i>
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1></h1>
                <p></p>
                <div class="signature center">
                    <h6>-CHEF-</h6>
                    <h5>Pierre Gabant</h5>
                </div>
            </div>
        </main>
        <!-- end of main content -->
    </div>

    <!-- The slideshow -->
    {{-- <ul id="slideshow" data-speed="6000">
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
        <li>
            <img src="./assets/img/slideshow/demo.jpg" alt="slideshow image" />
        </li>
    </ul> --}}
    <!-- end of slideshow -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/history.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/modernizr.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/page.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/jquery-2.2.3.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/backgroundvideo/backgroundvideo.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/photoswipe/photoswipe.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/photoswipe/photoswipe-ui-default.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/device.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/libs/remodal/remodal.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/custom/slidenavigation.js"></script>
    <!-- end of scripts -->
    <!-- scripts -->
    <script type="text/javascript" src="./assets/js/app.js"></script>
    <!-- end of scripts -->


</body>

</html>
