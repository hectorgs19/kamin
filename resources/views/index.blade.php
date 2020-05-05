<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurante Kamín</title>

    <!-- mobile setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-title" content="Kamín" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style-default.css') }}">

    <!-- Page description -->
    <meta name="title" content="Restaurante en León, Chef Mario Gómez. Cocina de mercado. Junto a la calle Ancha." />
	<meta name="description" content="Restaurante Chef Mario Gómez en León. Un lugar ideal para Comer en León y conocer la gastronomía de León con cocina de mercado y de temporada. Turismo gastronómico en León." />


    <!-- Facebook -->
    <meta property="og:title" content="Restaurante" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content=".//" />
    <meta property="og:description" content="Restaurante Chef Mario Gómez en León. Un lugar ideal para Comer en León y conocer la gastronomía de León con cocina de mercado y de temporada. Turismo gastronómico en León." />

    <!-- Twitter -->
    <meta name="twitter:title" content="Restaurante" />
    <meta name="twitter:description" content="Here the excerp for this page" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon.png" sizes="96x96">
    <script src="https://kit.fontawesome.com/9bbd4ab1e4.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Top shadow -->
    <div class="shadow"></div>
    <!-- end top shadow -->

    <!-- The splash screen -->
    <div id="splash">
        <div class="loader">
            <!-- <img class="splash-logo" src="./assets/img/logo/logo.svg" /> -->
            <div class="line"></div>
        </div>
    </div>
    <!-- End of splash screen -->

    <div id="wrapper">
        <!-- main content -->
        <main>
            <header>
                <a href="." class="logo">
                    <h1>Restaurante</h1>
                    <img src="{{ asset('img/logo/kamin.png') }}" alt="Restaurante" />

                </a>
            </header>
            <!-- The navigation -->
            <nav class="strokes">
                <ul id="navigation">
                    <li>
                        <a href="./nosotros" data-transition="slide-to-top">
                            <section>
                                <h1>Nosotros</h1>
                                <h5 class="badge-rounded">Algo sobre nosotros</h5>
                            </section>
                            <footer>
                                <i class="icon icon-CommentwithLines"></i>
                                <h5 class="serif">Nuestra Historia</h5>
                                {{-- <p>Saber más</p> --}}
                            </footer>
                        </a>
                    </li>
                    <li>
                        <a href="./menu" data-transition="slide-to-top">
                            <section>
                                <h1>Menú</h1>
                                <h5 class="badge-rounded">Nuestros Platos</h5>
                            </section>
                            <footer>
                                <i class="icon icon-Food"></i>
                                <h5 class="serif">Nuestra Cocina</h5>
                            </footer>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="./blog.html" data-transition="slide-to-top">
                            <section>
                                <h1>Blog</h1>
                                <h5 class="badge-rounded">Nuestras historias</h5>
                            </section>
                            <footer>
                                <i class="icon icon-CreateNew"></i>
                                <h5 class="serif">Noticias</h5>
                                <p>Y historias</p>
                            </footer>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="./recipe.html" data-transition="slide-to-top">
                            <section>
                                <h1>Recetas</h1>
                                <h5 class="badge-rounded">Nuestras Recetas Secretas</h5>
                            </section>
                            <footer>
                                <i class="icon icon-Diary"></i>
                                <h5 class="serif">Más</h5>
                                <p>Recetas Especiales</p>
                            </footer>
                        </a>
                    </li> -->
                    <li>
                        <a href="https://restaurantekamin.myrestoo.net/" data-transition="slide-to-top">
                            <section>
                                <h1>Reservas</h1>
                                <h5 class="badge-rounded">Haz tu Reserva</h5>
                            </section>
                            {{-- <footer>
                                <i class="icon icon-Users"></i>
                                <h5 class="serif">Haz Reserva</h5>
                                <p>Y será un día maravilloso</p>
                            </footer> --}}
                        </a>
                    </li>
                    <li>
                        <a href="./contacto" data-transition="slide-to-top">
                            <section>
                                <h1>Contacto</h1>
                                <h5 class="badge-rounded">Ponte en Contacto</h5>
                            </section>
                            <footer>
                                <i class="icon icon-LocationMarker"></i>
                                {{-- <h5 class="serif">Ven</h5>
                                <p>a vernos</p> --}}
                            </footer>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End navigation -->
            <div class="overlay"></div>
            <div data-remodal-id="modal">
                <i class="icon bg icon-CommentwithLines"></i>
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1></h1>
                <p></p>
                <div class="signature center">
                    <h6>-CHEF-</h6>
                    <h5>Mario Gómez</h5>
                </div>
            </div>
        </main>
        <!-- end of main content -->
    </div>

    <!-- The slideshow -->
    <ul id="slideshow" data-speed="6000">
        <li>
            <img src="{{ asset('img/slideshow/1.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/2.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/3.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/4.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/5.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/6.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/7.jpg') }}" alt="">
        </li>
    </ul>
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

    <script type="text/javascript" src="{{ asset('js/libs/history.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/jquery-2.2.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/backgroundvideo/backgroundvideo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/photoswipe/photoswipe.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/photoswipe/photoswipe-ui-default.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/device.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/remodal/remodal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom/slidenavigation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- end of scripts -->


</body>

</html>
