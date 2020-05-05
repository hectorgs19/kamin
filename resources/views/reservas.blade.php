<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>reservas &middot; Kamín</title>

    <!-- mobile setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-title" content="Kamín" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Page description -->
    <meta name="description" content="">

    <!-- Facebook -->
    <meta property="og:title" content="reservations" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="./reservation.html/" />
    <meta property="og:description" content="" />

    <!-- Twitter -->
    <meta name="twitter:title" content="reservations" />
    <meta name="twitter:description" content="" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="./assets/img/favicons/favicon.png" sizes="96x96">
{{--  href="{{ asset('css/style-default.css') }} --}}
   {{-- Resto --}}
    <link href="{{ asset('css/resto/app-08fc913bd2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/resto/intltelinput-21a0733926.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/resto/bookings.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/modernizr-3c052cf963.js') }}" type="text/javascript"></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PKTS8T');
    </script>
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
                    <h3 class="badge">Reservas</h3>
                    <h1>Mesa para 2?</h1>
                </section>
            </header>
            <!-- end header -->
            <div class="content-wrap">
                <section class="content">
                    <i class="icon bg icon-Users"></i>
                    <section class="form-inline">
                        <header>
                            <h2>Reserva una mesa</h2>
                        </header>

                        <form method="POST" action="https://restaurantekamin.myrestoo.net/es/reservar/seleccionar-horario" accept-charset="UTF-8" autocomplete="off"><input name="_token" type="hidden" value="4qAq3icVYsdA2J2GgFR4pAQncRi7Qwwp07ntDJbK">
                            <input id="h_status" name="h_status" value="1" type="hidden">
                            <input id="h_people" name="h_people" value="2" type="hidden">
                            <input id="h_pax_children" name="h_pax_children" value="0" type="hidden">
                            <input id="h_date" name="h_date" value="2020-04-22" type="hidden">
                            <input id="h_service" name="h_service" value="1" type="hidden">
                            <input id="h_experience" name="h_experience" value="" type="hidden">
                            <input id="h_experience_tickets" name="h_experience_tickets" value="" type="hidden">
                            <input id="h_area" name="h_area" value="" type="hidden">

                            <div class="page__find-table container content-main">





                              <section class="content-block">


                                <header class="visit-header mb2">
                                  <h2 class="visit-header__title mb0">Reserva en Kamín Restaurante.</h2>
                                        <div class="muted">
                                    Calle Regidores, 4. León
                                  </div>
                                                  </header>

                                    <div class="fieldset-group -guests js-party-size-advanced">

                              <div class="h4">
                                <span><svg class="icon guest"><use class="icon-glyph" xlink:href="/front/assets/images/sprites.svg#guest"></use></svg> <span class="icon-label">Adultos</span></span>
                              </div>

                              <div class="form-group input-stepper text-center ">
                                <div class="x-group">
                                    <span class="btn x-group__item js-substract" data-target="pax_adults">-</span>
                                <input
                                  type="number"
                                  pattern="[0-9]*"
                                  class="x-group__item"
                                  placeholder="–"
                                  id="pax_adults"
                                  name="pax_adults"
                                  value="2"
                                  data-min="1"
                                      >
                                <span class="btn x-group__item js-add" data-target="pax_adults">+</span>
                                  </div>
                              </div>

                              <div class="h4">
                                <span><svg class="icon guest"><use class="icon-glyph" xlink:href="/front/assets/images/sprites.svg#guest"></use></svg> <span class="icon-label">Niños</span></span>
                              </div>

                              <div class="form-group input-stepper text-center ">
                                <div class="x-group">
                                    <span class="btn x-group__item js-substract" data-target="pax_children">-</span>
                                <input
                                  type="number"
                                  pattern="[0-9]*"
                                  class="x-group__item"
                                  placeholder="–"
                                  id="pax_children"
                                  name="pax_children"
                                  value="0"
                                  data-min="0"
                                      >
                                <span class="btn x-group__item js-add" data-target="pax_children">+</span>
                                  </div>
                              </div>

                            </div>

                                <div class="fieldset-group -date js-fieldset-group-date">


                              <div class="h4">
                                <span class="link-dark js-date-options-show" title="Abrir calendario"><svg class="icon date"><use class="icon-glyph" xlink:href="/front/assets/images/sprites.svg#date"></use></svg> <span class="icon-label">Fecha</span></span>
                              </div>

                                <div class="form-group -constrained xs-animated xs-slideInRight js-date-buttons" data-toggle="buttons">
                                <ul class="list -xs-scroll-x -sm-grid container-expanded">
                                        <li>
                                    <label
                              for="date-2020-04-20"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                                  is-closed
                                      "
                               data-booking-available="26"     data-day="Lunes"  data-date="lunes, 20 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-20" name="date" value="2020-04-20" class="hidden" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">Hoy</span>    <span class="btn-block__label">20</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="date-2020-04-21"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                                  is-closed
                                      "
                               data-booking-available="26"     data-day="Martes"  data-date="martes, 21 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-21" name="date" value="2020-04-21" class="hidden" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">mar</span>    <span class="btn-block__label">21</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="date-2020-04-22"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                      is-active
                                    "
                               data-booking-available="1"     data-day="Miércoles"  data-date="miércoles, 22 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-22" name="date" value="2020-04-22" class="hidden"  checked="checked" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">mié</span>    <span class="btn-block__label">22</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="date-2020-04-23"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                    "
                               data-booking-available="1"     data-day="Jueves"  data-date="jueves, 23 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-23" name="date" value="2020-04-23" class="hidden" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">jue</span>    <span class="btn-block__label">23</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="date-2020-04-24"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                    "
                               data-booking-available="1"     data-day="Viernes"  data-date="viernes, 24 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-24" name="date" value="2020-04-24" class="hidden" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">vie</span>    <span class="btn-block__label">24</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="date-2020-04-25"
                              class="btn btn-outline btn-block js-check-booking-availability js-date-button
                                    "
                               data-booking-available="1"     data-day="Sábados"  data-date="sábado, 25 abril 2020"  data-scope="date"    >
                              <input type="radio" id="date-2020-04-25" name="date" value="2020-04-25" class="hidden" >  <span class="btn-block__content">
                                <span class="btn-block__header muted">sáb</span>    <span class="btn-block__label">25</span>
                                  </span>
                            </label>
                                  </li>
                                        <li>
                                    <label
                              for="booking-guests"
                              class="btn btn-outline btn-block js-date-options-show
                                    "
                                   title="Abrir calendario" >
                                <span class="btn-block__content">
                                    <span class="btn-block__label">…</span>
                                  </span>
                            </label>
                                  </li>
                                </ul>
                              </div>

                              <div class="js-date-options is-hidden">


                                <input type="text" id="booking-date" name="booking-date" class="datepicker text-center">

                              </div>

                              <div class="form-group -constrained x-group is-hidden" data-toggle="buttons">
                                <ul class="list -xs-scroll-x -sm-grid container-expanded">
                                    <li class="js-date-0">
                                    </li>
                                </ul>
                              </div>

                            </div>

                                <div class="fieldset-group -service js-fieldset-group-service">


                              <div class="h4">
                                <svg class="icon time"><use class="icon-glyph" xlink:href="/front/assets/images/sprites.svg#time"></use></svg> <span class="icon-label">Reserva para</span>
                              </div>

                              <div class="js-services is-hidden">
                                                    <div class="form-group -constrained x-group js-service js-service-date-2020-04-22 is-hidden" data-toggle="buttons">
                                                            <label
                              for="service-2020-04-22-1"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                      is-active
                                    "
                               data-booking-available="1"     data-day="miércoles"  data-date="miércoles, 22 abril 2020"  data-service="Comida"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-22-1" name="service" value="1" class="hidden">  <span class="btn-block__content">
                                Comida
                                <span class="btn-block__footer">14:00 - 15:00</span>  </span>
                            </label>
                                                                        <label
                              for="service-2020-04-22-2"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                    "
                               data-booking-available="1"     data-day="miércoles"  data-date="miércoles, 22 abril 2020"  data-service="Cena"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-22-2" name="service" value="2" class="hidden">  <span class="btn-block__content">
                                Cena
                                <span class="btn-block__footer">21:00 - 22:00</span>  </span>
                            </label>
                                                      </div>
                                            <div class="form-group -constrained x-group js-service js-service-date-2020-04-23 is-hidden" data-toggle="buttons">
                                                            <label
                              for="service-2020-04-23-1"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                      is-active
                                    "
                               data-booking-available="1"     data-day="jueves"  data-date="jueves, 23 abril 2020"  data-service="Comida"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-23-1" name="service" value="1" class="hidden">  <span class="btn-block__content">
                                Comida
                                <span class="btn-block__footer">14:00 - 15:00</span>  </span>
                            </label>
                                                                        <label
                              for="service-2020-04-23-2"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                    "
                               data-booking-available="1"     data-day="jueves"  data-date="jueves, 23 abril 2020"  data-service="Cena"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-23-2" name="service" value="2" class="hidden">  <span class="btn-block__content">
                                Cena
                                <span class="btn-block__footer">21:00 - 22:00</span>  </span>
                            </label>
                                                      </div>
                                            <div class="form-group -constrained x-group js-service js-service-date-2020-04-24 is-hidden" data-toggle="buttons">
                                                            <label
                              for="service-2020-04-24-1"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                      is-active
                                    "
                               data-booking-available="1"     data-day="viernes"  data-date="viernes, 24 abril 2020"  data-service="Comida"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-24-1" name="service" value="1" class="hidden">  <span class="btn-block__content">
                                Comida
                                <span class="btn-block__footer">14:00 - 15:00</span>  </span>
                            </label>
                                                                        <label
                              for="service-2020-04-24-2"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                    "
                               data-booking-available="1"     data-day="viernes"  data-date="viernes, 24 abril 2020"  data-service="Cena"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-24-2" name="service" value="2" class="hidden">  <span class="btn-block__content">
                                Cena
                                <span class="btn-block__footer">21:00 - 22:00</span>  </span>
                            </label>
                                                      </div>
                                            <div class="form-group -constrained x-group js-service js-service-date-2020-04-25 is-hidden" data-toggle="buttons">
                                                            <label
                              for="service-2020-04-25-1"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                      is-active
                                    "
                               data-booking-available="1"     data-day="sábados"  data-date="sábado, 25 abril 2020"  data-service="Comida"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-25-1" name="service" value="1" class="hidden">  <span class="btn-block__content">
                                Comida
                                <span class="btn-block__footer">14:00 - 15:00</span>  </span>
                            </label>
                                                                        <label
                              for="service-2020-04-25-2"
                              class="btn btn-outline x-group__item js-check-booking-availability js-service-button
                                    "
                               data-booking-available="1"     data-day="sábados"  data-date="sábado, 25 abril 2020"  data-service="Cena"  data-scope="service"    >
                              <input type="radio" id="service-2020-04-25-2" name="service" value="2" class="hidden">  <span class="btn-block__content">
                                Cena
                                <span class="btn-block__footer">21:00 - 22:00</span>  </span>
                            </label>
                                                      </div>

                                <div class="form-group -constrained x-group js-service js-service-date-0 is-hidden" data-toggle="buttons"></div>
                              </div>

                              <div class="js-services-loading icon-loader muted"></div>

                            </div>

                                <div class="box -info mb2 is-hidden js-alert js-alert-code-12">
                              <div class="box__header"><strong class="h3 text-bold">Ya no tenemos disponibilidad.</strong></div>  <div class="box__body">Lo sentimos, ya no tenemos disponibilidad para el día y la hora seleccionada.</div>  </div>


                            <div class="box -info mb2 is-hidden js-alert js-alert-code-26">
                              <div class="box__header"><strong class="h3 text-bold">No abrimos los <span class="js-alert-day"></span>.</strong></div>  <div class="box__body">Te esperamos en otro momento.</div>  </div>


                            <div class="box -info mb2 is-hidden js-alert js-alert-code-40">
                              <div class="box__header"><strong class="h3 text-bold">Llama al <strong class='text-nw'><a itemprop="tel" class="tel text-nw" data-ga-track="event" data-ga-category="Información restaurante" data-ga-action="Llamada telefónica" href="tel:+34987096238">987 09 62 38</a></strong> para reservar.</strong></div>  <div class="box__body">Lo sentimos, ya no aceptamos reservas online para el día y la hora seleccionada.</div>  </div>

                            <div class="box -info mb2 is-hidden js-alert js-alert-code-44">
                              <div class="box__header"><strong class="h3 text-bold">No abrimos el <span class="js-alert-date"></span>.</strong></div>  <div class="box__body">Te esperamos en otro momento.</div>  </div>

                            <div class="box -info mb2 is-hidden js-alert js-alert-code-45">
                              <div class="box__header"><strong class="h3 text-bold">Cerramos del <span class="js-alert-date"></span>.</strong></div>  <div class="box__body">Te esperamos en otro momento.</div>  </div>

                            <div class="box -info mb2 is-hidden js-alert js-alert-code-120">
                              <div class="box__header"><strong class="h3 text-bold">La experiencia no está disponible.</strong></div>  <div class="box__body">La experiencia a reservar no se encuentra disponible para el día u horario seleccionado.</div>  </div>


                            <div class="box -info mb2 is-hidden js-alert js-alert-code-50">
                              <div class="box__header"><strong class="h3 text-bold">El servicio seleccionado ya ha finalizado.</strong></div>  <div class="box__body">Te esperamos en otro momento.</div>  </div>

                                <div class="visit-actions button-group -vertical -spaced">

                                  <button type="submit" class="btn btn-primary -large -full-width js-button-continue" disabled="true">Continuar</button>


                            </div>


                                <div class="visit-questions print-hide mb2">
                              Llámanos al <strong class='text-nw'><a itemprop="tel" class="tel text-nw" data-ga-track="event" data-ga-category="Información restaurante" data-ga-action="Llamada telefónica" href="tel:+34987096238">987 09 62 38</a></strong> si tienes cualquier duda.
                            </div>

                              </section>

                            </div>

                            </form>
                    </section>
                </section>
            </div>
            <div data-remodal-id="modal">
                <i class="icon bg icon-CommentwithLines"></i>
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1>Gracias!</h1>
                <p>Tu reserva ha sido confirmada. Estamos deseando verte!</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{-- <script src="/front/assets/js/pickadate/translations/es_ES-e2080b4a49.js"></script> --}}

    <script>
        $(function() {
          // Ocultamos los servicios de todos los dias y mostramos el de hoy
          hide(".js-service");
          if (1 != 0) {
            show(".js-service-date-2020-04-22");
          }
          else{
            var test_availability_caller = $("#date-2020-04-22").parent();
            bookingUnavailableData(test_availability_caller.data("bookingAvailable"), test_availability_caller.data("day"), test_availability_caller.data("date"), 1, test_availability_caller);
          }
          setLoadingServices(false);
        });

        var datePicker = initDatePicker(60,[false]);

        // Guests

        $(".js-people-button").click(function(e) {
            var value = $(this).find("input").val();
            setHValue(value, $("#h_people"));
        });

        $(".js-fieldset-group-guests .js-add").click(function(e) {
            var value = $("#booking-guests").val();
            setHValue(value, $("#h_people"));
        });

        $(".js-fieldset-group-guests .js-substract").click(function(e) {
            var value = $("#booking-guests").val();
            setHValue(value, $("#h_people"));
        });

        $(".js-guests-options-show").click(function() {
            showGuestsOptions();
            var value = $("#booking-guests").val();
            setHValue(value, $("#h_people"));
        });

        $("#booking-guests").change(function() {
            var value = $("#booking-guests").val();
            setHValue(value, $("#h_people"));
        });

        function setHValue(value, element){
            element.val(value);
        }

        // Date

        $(".js-date-button").click(function(e) {
          if ($(this).data('bookingAvailable') == 1) {
            setHDate($(this).find("input").val());
          } else {
            e.stopPropagation();
          }
        });

        function setDateCalendar() {

            var date = $("input[name=\'booking-date_submit\']").val();
            setHDate(date);
            showShifts(date);
        }

        $(".js-date-options-show").click(function(e) {
          // Necesarios para que se abra pickadate de forma automática.
          e.stopPropagation();
          e.preventDefault();

          // Enseña las opciones para seleccionar una fecha de forma manual.
          showDateOptions();
          last_actionCaller = null;
        });

        $(".js-check-booking-availability").click(function(e) {
          e.preventDefault();
          if ($(this).data('bookingAvailable') == 1) {
            checkBookingAvailability($(this));
          }
        });

        // Service

        $(".js-service-button").click(function(e) {
          if ($(this).data('bookingAvailable') == 1) {
            var value = $(this).find("input").val();
            setHService(value);
          } else {
            e.stopPropagation();
          }
        });

        function setHService(value){
            $("#h_service").val(value);
        }

        function setHDate(value){
            $("#h_date").val(value);
        }

        if (!Cookies.get("hide_smart_banner")) {
          showSmartBanner();
        }
        </script>
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
