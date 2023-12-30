<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Elbara Africa Group</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <!-- Font -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts.css')}}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/stylesheets/boostrap-select.min.css')}}" />

    <!-- swiper slider -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/swiper-bundle.min.css')}}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/shortcodes.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/jquery.fancybox.min.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/colors/color1.css')}}" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon.png')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/stylesheets/responsive.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        :root {

--headings-color: #222222;
--body-text-color: #6B7177 ;
--color-bleu: #102a87;
--color-jaune:#fc950d ;
}

        /* Définir l'animation */
        @keyframes zoomRotate {
            0% {
                transform: scale(1) rotate(0deg);
            }
            50% {
                transform: scale(1.1) rotate(10deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        /* Appliquer l'animation à l'image */
        .zoomRotateImage {
            transition: transform 0.5s ease-in-out;
        }
        /* Ajoutez l'effet au survol */
        .zoomRotateImage:hover {
            transform: scale(1.1) rotate(10deg);
        }
        .switcher-container{
            display: none;
        }
        .btn{
            background-color: var(--color-jaune) !important;

        }
        .btn:hover{
            background-color: var(--color-bleu) !important;
        }
        #scroll-top{
            background-color: var(--color-jaune) !important;
        }
        .header i{
            color: var(--color-bleu) !important;
        }
        .header.style-absolute .nav-filter .nav-mobile span{
            background-color: #000000 !important;
        }
        .header.style-absolute .nav-filter .nav-mobile::before{
            background-color: #000000 !important;
        }
        .nav-filter .nav-mobile span {
            background-color: #000000 !important;
        }
        .nav-filter .nav-mobile span:before {
            background-color: #000000 !important;
        }
        .sticky-area-wrap .header-ct-right .button:first-child{
            background-color: var(--color-jaune) !important;
            margin-right: 20px;
        }
       
        .sticky-area-wrap .header-ct-right .button a{
        border-color: var(--color-jaune) !important;
        }
        .sticky-area-wrap .header-ct-right .button a:hover{
        background-color: var(--color-bleu) !important;
        border-color: var(--color-bleu) !important;

        }
        #header.style-absolute #main-nav #menu-primary-menu>li:hover>a{
            color: var(--color-jaune) !important;
        }
        #menu-primary-menu>li>a:hover{
            color: var(--color-jaune) !important;
        }
    </style>
</head>

<body class="tf-popup-auto">

    <a id="scroll-top" ></a>

    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>

    {{-- <div class="wd-popup-form">

        <div class="modal-menu__backdrop"></div>
        <div class="content">
            <div class="content-left">
                <div class="thumb">
                    <img src="{{asset('assets/images/review/bg-popup.jpg')}}" alt="images">
                </div>
            </div>
            <div class="content-right">
                <a class="title-button-group">
                    <i class="icon-close"></i>
                </a>
                <h6>Bienvenue sur Elbaragroup Africa</h6>
                <p>Inscrivez-vous pour recevoir toutes les dernières offres et les promotions.</p>
                <form action="" class="mb-5">
                    <input type="text" placeholder="Email">
                    <div class="group-radio">
                        <input type="radio"><label>Eviter le message</label>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    @include('layouts.navbar-mobile')

    <div class="boxed">

        @include('layouts.header')

        @yield('content')

        {{-- @include('layouts.footer') --}}

    </div>


    <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('assets/javascript/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/javascript/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script src="{{asset('assets/javascript/boostrap-select.min.js')}}"></script>
    <script src="{{asset('assets/javascript/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/javascript/parallax.js')}}"></script>
    <script src="{{asset('assets/javascript/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/javascript/countto.js')}}"></script>
    <script src="{{asset('assets/javascript/wow.min.js')}}"></script>
    <script src="{{asset('assets/javascript/swiper.js')}}"></script>
    <script src="{{asset('assets/javascript/plugin.min.js')}}"></script>
    <script src="{{asset('assets/javascript/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/javascript/switcher.js')}}"></script>
    <script src="{{asset('assets/javascript/main.js')}}"></script>
    <script src="{{asset('assets/javascript/messages.js')}}"></script>
    <script src="{{asset('assets/javascript/password-addon.js')}}"></script>




</body>

</html>
