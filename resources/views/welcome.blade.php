<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Cosmedic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="cosmedic medycyna">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="public/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="public/styles/responsive.css">
    <link rel="icon" type="image/png" href="{{ asset('public/images/favicon.png') }}" />
</head>
<body>
<div class="super_container" style="display: none">


    <!-- Header -->

    <header class="header trans_200">

        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto"><i class="fa fa-phone" style="padding-right: 5px;"></i> +48 602 150 345</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav ml-auto hover-underline-menu" data-menu-underline-from-center>
                                <ul class="menu-underline">
                                    <li><a href="#">Strona główna</a></li>
                                    <li><a href="#about">O nas</a></li>
                                    <li><a href="#services">Oferta</a></li>
                                    <li><a href="#gallery">Galeria</a></li>
                                    <li><a href="#contact">Kontakt</a></li>
                                </ul>
                            </nav>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo -->
        <div class="logo_container_outer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_content d-flex flex-column align-items-start justify-content-center">
                                    <div class="logo d-flex flex-row align-items-center justify-content-center">
                                        <div class="logo_text">cosmedic</div>
                                    </div>
                                    <div class="logo_sub">uroda i medycyna</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Side navigation -->
    @if (session('success'))
        <div class="sidenav-msg">
            <div class="alert alert-success mb-5" id="success" style="display: none">
                <p style="color: #155724">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if ($errors->has('g-recaptcha-response'))
        <div class="sidenav-msg">
            <div class="alert alert-danger mb-5" id="success" style="display: none">
                <p style="color: #721c24">{{ $errors->first('g-recaptcha-response') }}</p>
            </div>
        </div>
    @endif
    <div class="sidenav">
        <a class="mb-1" data-toggle="tooltip" data-placement="right" title="Facebook" style="background: #3b5998" href="https://www.facebook.com/Cosmedic-1687449134875963/"><i class="fab fa-facebook-f" style="color: #ffffff; padding-left: 2px;"></i> </a>
        <a class="mb-1" data-toggle="tooltip" data-placement="right" title="Instagram" style="background: #fd1d1d;" href="https://www.instagram.com/cosmedic_przasnysz/"><i class="fab fa-instagram" style="color: #ffffff;"></i> </a>
    </div>

    <!-- Menu -->

    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="#">Home</a></li>
                    <li class="menu_item menu_mm"><a href="#about">O nas</a></li>
                    <li class="menu_item menu_mm"><a href="#services">Oferta</a></li>
                    <li class="menu_item menu_mm"><a href="#gallery">Galeria</a></li>
                    <li class="menu_item menu_mm"><a href="#Kontakt">Kontakt</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('public/images/slider.jpg') }})"></div>
                    <div class="home_content">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content_inner">
                                        <div class="home_title"><h1>Odkryj swoje piękno</h1></div>
                                        <div class="button home_button">
                                            <a href="#about">czytaj więcej</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3 Boxes -->

    <div class="boxes">
        <div class="container">
            <div class="row">

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box working_hours">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="public/images/alarm-clock.svg" alt=""></div></div>
                        <div class="box_title">Godziny otwarcia</div>
                        <div class="working_hours_list">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Poniedziałek - Piątek</div>
                                    <div class="ml-auto">9.00 – 20.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sobota</div>
                                    <div class="ml-auto">9.00 – 14.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Niedziela</div>
                                    <div class="ml-auto">nieczynne</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_appointments">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="public/images/phone-call.svg" alt=""></div></div>
                        <div class="box_title">Wizyty</div>
                        <div class="box_text">Po wcześniejszym uzgodnieniu możliwość wyboru innej godziny.</div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="public/images/bell.svg" alt=""></div></div>
                        <div class="box_title">Kontakt</div>
                        <div class="box_phone"><i class="fa fa-mobile"></i> +48 602 150 345</div>
                        <div class="box_phone"><i class="fa fa-phone"></i> 29 643 12 25</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about" id="about">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- About Content -->
                <div class="col-lg-7">
                    <div class="about_content">
                        <div class="section_title"><h2>Cosmedic</h2></div>
                        <div class="about_text">
                            <p>
                                Cosmedic to nowoczesny gabinet kosmetologiczny i medyczny. Wykwalifikowane grono specjalistów gwarantuje, że wykonywane przez nas zabiegi będą nie tylko skuteczne, ale również przyjemne i bezpieczne. Dzięki zastosowaniu nowoczesnej aparatury możemy zapewnić najwyższą jakość oferowanych usług.
                            </p>
                        </div>
                        <div class="button about_button">
                            <a href="#services">czytaj więcej</a>
                        </div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5">
                    <div class="about_image"><img src="{{ asset('public/images/omnie.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h2>Nasze usługi</h2></div>
                </div>
            </div>
            <div class="row services_row">
                @foreach($services as $service)
                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><i class="{{ $service->icon }}"></i> </div>
                            <div class="service_title trans_200">{{ $service->title }}</div>
                            <div class="service_text">
                               <p>{!! $service->body !!}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $services->fragment('services')->links('pagination') }}
                </div>-
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h2>Cennik</h2></div>
                </div>
            </div>
            <div class="row services_row">
                @foreach($price_categories as $price_category)
                <!-- Pricing List -->
                <div class="col-lg-4 col-md-4 service_col">
                    <h2 class="pricing-header">{{ $price_category->name }}</h2>
                    <div id="accordion">
                        @foreach($price_category->price_subcategories as $price_subcategory)
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{ $loop->parent->index }}{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->parent->index }}{{ $loop->index }}">
                                {{ $price_subcategory->name }}
                            </div>
                           @if($price_subcategory->prices->count())
                                <div id="collapse{{ $loop->parent->index }}{{ $loop->index }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            @foreach($price_subcategory->prices as $price)
                                                <li>{{ $price->name }} <span class="price">{{ $price->value }} zł</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                           @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Team -->

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h2>Nasi specjaliści</h2></div>
                </div>
            </div>
            <div class="container text-center my-3">
                <div class="row services_row">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            @foreach($workers->chunk(4) as $chunk)
                            <div class="carousel-item row no-gutters @if($loop->index < 1) active @endif">
                                @foreach($chunk as $worker)
                                    <div class="col-12 float-left col-sm-3"><img class="img-fluid" src="{{ Voyager::image($worker->image) }}"><br/>{{ $worker->name }}</div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title"><h2>Galeria</h2></div>
                </div>
            </div>
            <div class="row services_row">
                <!-- Images used to open the lightbox -->
                @php($count = 0)
                @foreach($images->chunk(4) as $chunk)
                <div class="row">
                    @foreach($chunk as $image)
                    @php($count++)
                    <div class="col-md-6">
                        <img src="{{ Voyager::image($image->image) }}" style="width: 590px;" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    </div>
                    @endforeach
                </div>
                @endforeach

                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span style="color: black" class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        @foreach($images as $image)
                            <div class="mySlides">
                                <div class="numbertext">{{ $loop->index }} / {{ $count }}</div>
                                <img class="slide" src="{{ Voyager::image($image->image) }}" style="width:50%">
                            </div>
                        @endforeach

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <!-- Thumbnail image controls -->
                        @foreach($images as $image)
                            <div class="column">
                                <img class="demo"  onclick="currentSlide({{ $loop->index+1 }})" alt="{{ $image->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Call to action -->

    {{--<div class="cta" style="margin-top: 80px;">--}}
        {{--<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="public/images/cta.jpg" data-speed="0.8"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row" style="color: white;">--}}
                {{--<h2 class="col-md-4 text-center"><div class="counter" data-count="150">0</div>lekarzy</h2>--}}
                {{--<h2 class="col-md-4 text-center"><div class="counter" data-count="750">0</div>zrealizowanych wizyt</h2>--}}
                {{--<h2 class="col-md-4 text-center"><div class="counter" data-count="50">0</div>wolnych miejsc</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Footer -->

    <footer class="footer" id="contact">
        <div class="footer_container">
            <div class="container">
                <div class="row">

                    <!-- Footer - About -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_about">
                            <div class="footer_logo_container">
                                <div class="logo_content">
                                    <div class="logo d-flex flex-row">
                                        <div class="logo_text">cosmedic</div>
                                    </div>
                                    <div class="logo_sub">uroda i medycyna</div>
                                </div>
                            </div>
                            <ul class="footer_about_list">
                                <li><i class="fa fa-phone" style="font-size: 25px;  color: #FF00BA"></i><span>+48 602 150 345</span> </li>
                                <li><i class="far fa-envelope" style="font-size: 25px; color: #FF00BA"></i><span>cosmedic@op.pl</span> </li>
                                <li><i class="fa fa-map-marker" style="font-size: 25px; margin-right: 7px; color: #FF00BA"></i><span>Przasnysz, ul. Mazowiecka 32</span> </li>
                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2400.184909372469!2d20.87819321578504!3d53.01703887991134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471dd5fc6c7c0095%3A0xf9f1a3c473f1f6f8!2sCosmedic+-+uroda+i+medycyna!5e0!3m2!1spl!2spl!4v1532878521477" width="300" height="300" frameborder="0" style="border:0; margin-top: 15px;" allowfullscreen></iframe>

                        </div>
                    </div>

                    <!-- Footer - Links -->
                    <div class="col-lg-2 footer_col">
                        <div class="footer_links footer_column">
                            <h3 style="color: #FF00BA;">Nawigacja</h3>
                            <ul>
                                <li><a href="#">Strona główna</a></li>
                                <li><a href="#about">O nas</a></li>
                                <li><a href="#services">Oferta</a></li>
                                <li><a href="#gallery">Galeria</a></li>
                                <li><a href="#contact">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 footer_col">
                        <div class="footer_links footer_column">
                            <h3 style="color: #FF00BA;">Usługi</h3>
                            <ul>
                                @foreach($services as $service)
                                    <li><a href="#">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Footer - News -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_news footer_column">
                            <div class="well well-sm">
                                <form class="form-horizontal" action="{{ action('MailController@contact') }}" method="post">
                                    @csrf
                                    <fieldset>
                                        <legend class="col-md-12 text-center" style="color: #FF00BA; margin-bottom: 30px;">Formularz kontaktowy</legend>

                                        <!-- Name input-->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="name" name="name" type="text" placeholder="Imię i nazwisko" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Email input-->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="email" name="email" type="email" placeholder="Adres email" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Message body -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message" name="message" placeholder="Wiadomość..." rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12 @if ($errors->has('g-recaptcha-response')) has-error @endif ">
                                            <div class="g-recaptcha" data-sitekey="6LeeB2cUAAAAAHoAOzDpZ_I6ZzZpXuqz1BjyPlxH"></div>
                                        </div>

                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-left mt-1">
                                                <button type="submit" style="background: #FF00BA; color: white;" class="btn">Wyślij</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
                            <div class="cr" style="color: white;">Copyright &copy; 2018 Cosmedic</div>
                            <div class="footer_social ml-lg-auto">
                                <ul>
                                    <li><a href="https://www.instagram.com/cosmedic_przasnysz/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.facebook.com/Cosmedic-1687449134875963/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="public/js/jquery-3.2.1.min.js"></script>
<script src="public/styles/bootstrap4/popper.js"></script>
<script src="public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="public/plugins/easing/easing.js"></script>
<script src="public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="public/js/scrollreveal.min.js"></script>
<script src="public/js/custom.js"></script>

<script>
    $( document ).ready(function() {
        $('#success').fadeIn();
        $('.super_container').fadeIn(500);

    });
    setTimeout(function(){
        $('#success').fadeOut();
    }, 5000);
</script>
</body>
</html>