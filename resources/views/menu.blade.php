<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menú &middot; Kamín</title>

    <!-- mobile setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-title" content="Kamín" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Page description -->
    <meta name="description" content="">

    <!-- Facebook -->
    <meta property="og:title" content="Menu" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="./menu.html/" />
    <meta property="og:description" content="Here the excerp for this page" />

    <!-- Twitter -->
    <meta name="twitter:title" content="Menu" />
    <meta name="twitter:description" content="Here the excerp for this page" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon.png" sizes="96x96') }}">

</head>

<body>

    <!-- Top shadow -->
    <div class="shadow"></div>
    <!-- end top shadow -->

    <!-- The splash screen -->
    <div id="splash">
        <div class="loader">
            <img class="splash-logo" src="{{ asset('img/logo/logo.svg') }}" />
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
                    <h3 class="badge">Menu</h3>
                    <h1>Qué cocinamos</h1>
                </section>
            </header>
            <!-- end header -->
            <div class="content-wrap">
                <div class="content">
                    <i class="icon bg icon-Food"></i>
                    <section>
                        <header class="with-subnav">
                            <ul>
                                <li class="btn ">
                                    <a href="./dinner.html" data-transition="slide-left">
                                        <h4>Carta</h4>
                                    </a>
                                </li>
                                <li class="btn ">
                                    <a href="./lunch.html" data-transition="slide-left">
                                        <h4>Menús</h4>
                                    </a>
                                </li>


                            </ul>
                        </header>

                        <!-- menu content -->
                        <header>
                            <h3 class="badge">• entrantes •</h3>
                        </header>

                        <ul class="price-list">
                            <li>
                                <div class="top">
                                    <h3 class="title">Parisian Hamburger</h3>
                                    <h4 class="price badge">$ 18.0</h4>
                                </div>
                                <p class="description">Raw onions, beetroots, pickles, capers, horseradish, egg yolk</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Minced meat steak</h3>
                                    <h4 class="price badge">$ 22.0</h4>
                                </div>
                                <p class="description">Fried onions, white potatoes, pickled cucumber and gravy</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Delgardosteak</h3>
                                    <h4 class="price badge">$ 22.0</h4>
                                </div>
                                <p class="description">Mustard, tomato, cheese, fried potatoes and gravy</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Pork rib roast</h3>
                                    <h4 class="price badge">$ 25.0</h4>
                                </div>
                                <p class="description">White potatoes, red cabbage, pickled cucumber and gravy</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Today’s special</h3>
                                    <h4 class="price badge">$ 22.0</h4>
                                </div>
                                <p class="description">Everyday fresh</p>
                            </li>
                        </ul>
                        <header>
                            <h3 class="badge">• especiales •</h3>
                        </header>

                        <ul class="price-list">
                            <li>
                                <div class="top">
                                    <h3 class="title">Breaded shrimps</h3>
                                    <h4 class="price badge">$ 22</h4>
                                </div>
                                <p class="description">Salad, dressing, lemon, bread and butter</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Lagune-cocktail</h3>
                                    <h4 class="price badge">$ 19</h4>
                                </div>
                                <p class="description">Shrimps, pineapple, salad, dressing, bread and butter</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Smoked salmon</h3>
                                    <h4 class="price badge">$ 16</h4>
                                </div>
                                <p class="description">Asparagus, herb dressing, salad, bread and butter</p>
                            </li>
                            <li>
                                <div class="top">
                                    <h3 class="title">Green salad</h3>
                                    <h4 class="price badge">$ 22</h4>
                                </div>
                                <p class="description">Dressing, bread and butter</p>
                            </li>
                        </ul>

                        <aside class="notice">
                            <i class="icon bg inverted icon-Notification"></i>
                            <h3>Aviso del Chef</h3>
                            <p>Estamos en constante creación. Los platos pueden actualizarse.</p>
                        </aside>

                        <!-- end menu content -->
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
