<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contacto &middot; Kamín</title>
    <script src="https://kit.fontawesome.com/9bbd4ab1e4.js" crossorigin="anonymous"></script>

    <!-- mobile setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-title" content="Kamín" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Page description -->
    <meta name="description" content="">

    <!-- Facebook -->
    <meta property="og:title" content="contact" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="./contacto.html/" />
    <meta property="og:description" content="Here the excerp for this page" />

    <!-- Twitter -->
    <meta name="twitter:title" content="contact" />
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
                    <h3 class="badge">Contacto</h3>
                    <h1>Déjanos un mensaje</h1>
                </section>
            </header>
            <!-- end header -->
            <div class="content-wrap">
                <section class="content">
                    <i class="icon bg icon-LocationMarker"></i>
                    <section class="info">
                        <header>
                            <h2>Información</h2>
                            <h4 class="serif">Nuestra Localización</h4>
                        </header>
                        <p>Situados en la calle Regidores, entre el Mercado Conde Luna y la Calle Ancha.</p>
                        <ul class="icon-list">
                            <li>
                                <a href="https://www.google.es/maps/place/KAMÍN+Restaurante/@42.5978446,-5.5716654,17z/data=!3m1!4b1!4m5!3m4!1s0xd379b190bb7fe5f:0x66cc89b59e78ee8!8m2!3d42.5978446!4d-5.5694767">

                                    <i class="icon icon-LocationMarker"></i>
                                    <span>Regidores 4</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+34 987 09 62 38">
                                    <i class="icon icon-Phone"></i>
                                    <span>+34 987 09 62 38</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:mario@restaurantekamin.com">
                                    <i class="icon icon-Email"></i>
                                    <span>mario@restaurantekamin.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/restaurantekamin/">
                                    <i class="fab fa-instagram"></i>                                    <span>instragram/restaurantekamin</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/restaurantekamin.es/">
                                    <i class="fab fa-facebook"></i>                                    <span>facebook/restaurantekamin</span>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class="hours">
                        <header>
                            <h2>Nuestro Horario</h2>
                            {{-- <h4 class="serif">Clockwise</h4> --}}
                        </header>
                        <p>Este es nuestro horario de cocina abierta.</p>
                        <div class="hours">
                            <time itemprop="openingHours" datetime="Monday 10:00-24:00">
                    <strong>Lunes</strong>
                    <h3>Cerrado</h3>
                </time>
                            <time itemprop="openingHours" datetime="Tuesday 10:00-24:00">
                    <strong>Martes</strong>
                    <h3>Cerrado</h3>
                </time>
                            <time itemprop="openingHours" datetime="Wednesday 10:00-24:00">
                    <strong>Miércoles</strong>
                    <h3>13:30 - 15:30 / 21:00 - 23:00</h3>
                </time>
                            <time itemprop="openingHours" datetime="Closed">
                    <strong>Jueves</strong>
                    <h3>13:30 - 15:30 / 21:00 - 23:00</h3>
                </time>
                            <time itemprop="openingHours" datetime="Friday 10:00-24:00">
                    <strong>Viernes</strong>
                    <h3>13:30 - 15:30 / 21:00 - 23:00</h3>
                </time>
                            <time itemprop="openingHours" datetime="Saturday 10:00-23:00">
                    <strong>Sábado</strong>
                    <h3>13:30 - 15:30 / 21:00 - 23:00</h3>
                </time>
                            <time itemprop="openingHours" datetime="Sunday closed">
                    <strong>Domingo</strong>
                    <h3>13:30 - 15:30 / 21:00 - 23:00</h3>
                </time>
                        </div>
                    </section>
                    <section class="form-inline">
                        <header>
                            <h2>Mensaje</h2>
                            <h4 class="serif">Nos gustaría saber de ti!</h4>
                        </header>
                        <p>Cualquier duda, sugerencia o petición, estaremos encantados de responderte!</p>

                        <form action="./php/contact.php" method="post" id="contact-form" class="form ambiance-html-form">
                            <div class="row">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" placeholder="Nombre">
                                    <i class="icon icon-User"></i>
                                </div>
                                <div class="form-group">
                                    <input class="full-border" name="email" id="email" type="email" placeholder="email">
                                    <i class="icon icon-Email"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="10" cols="40" required="required" name="message" id="body" placeholder="Mensaje"></textarea>
                                <i class="icon icon-Typing"></i>
                            </div>
                            <!-- <span class="message"><strong>Status.</strong> idle</span> -->
                            <div class="submit">
                                <button type="submit" value="submit">
                        <i class="icon icon-Forward"></i>
                    </button>
                            </div>
                        </form>
                    </section>
                </section>
            </div>
            <div data-remodal-id="modal">
                <i class="icon bg icon-CommentwithLines"></i>
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1>Thank you!</h1>
                <p>We will get back to you as soon as possible!</p>
                <div class="signature center">
                    <h6>-CHEF-</h6>
                    <h5>Mario Gómez</h5>
                </div>
            </div>
        </main>
        <!-- end of main content -->
    </div>

    <!-- The slideshow -->
    {{-- <ul id="slideshow" data-speed="6000">
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
