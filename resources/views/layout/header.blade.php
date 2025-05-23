<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_TITLE")}}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-italia/css/bootstrap-italia.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweet-alert.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        codice_fiscale = "{{$comune->fiscal_code}}";
        url_site = "{{env("APP_URL")}}";
    </script>
</head>
<body>

<header class="it-header-wrapper it-header-sticky" data-bs-toggle="sticky" data-bs-position-type="fixed" data-bs-sticky-class-name="is-sticky" data-bs-target="#header-nav-wrapper" style="">
    <div class="it-header-slim-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-header-slim-wrapper-content">
                        <a class="d-lg-block navbar-brand" href="#">Regione {{$comune->regione}}</a>
                        <div class="it-header-slim-right-zone">
                            <?php $currentUrl = url()->current();?>
                            @if($user != false)
                                <a class="ml-[12px]" style="margin-left: 10px" href="{{$comune->fiscal_code}}/logout">Logout</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="it-nav-wrapper">
        <div class="it-header-center-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-center-content-wrapper">
                            <div class="it-brand-wrapper">
                                <a href="/{{$comune->fiscal_code}}">
                                    <svg class="icon" aria-hidden="true">
                                        <use href="{{asset("/bootstrap-italia/svg/sprites.svg#it-pa")}}"></use>
                                    </svg>
                                    <div class="it-brand-text">
                                        <div class="it-brand-title">Comune di {{$comune->name}}</div>
                                        <div class="it-brand-tagline d-none d-md-block">Richiesta occupazione suolo pubblico</div>
                                    </div>
                                </a>
                            </div>
                            <div class="it-right-zone">
                                <div class="it-socials d-none d-md-flex">
                                    <span>Seguici su</span>
                                    <ul>
                                        <li>
                                            <a href="{{$comune->facebook_link}}" aria-label="Facebook" target="_blank">
                                                <svg class="icon">
                                                    <use href="{{asset("bootstrap-italia/svg/sprites.svg#it-facebook")}}"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$comune->instagram_link}}" aria-label="Github" target="_blank">
                                                <svg class="icon">
                                                    <use href="{{asset("bootstrap-italia/svg/sprites.svg#it-instagram")}}"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-header-navbar-wrapper" id="header-nav-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--start nav-->
                        <nav class="navbar navbar-expand-lg has-megamenu" aria-label="Navigazione principale">
                            <button class="custom-navbar-toggler" type="button" aria-controls="nav4" aria-expanded="false" aria-label="Mostra/Nascondi la navigazione" data-bs-target="#nav4" data-bs-toggle="navbarcollapsible">
                                <svg class="icon">
                                    <use href="{{asset("bootstrap-italia/svg/sprites.svg#it-burger")}}"></use>
                                </svg>
                            </button>
                            <div class="navbar-collapsable" id="nav4" style="display: none">
                                <div class="overlay" style="display: none"></div>
                                <div class="close-div">
                                    <button class="btn close-menu" type="button">
                                        <span class="visually-hidden">Nascondi la navigazione</span>
                                        <svg class="icon">
                                            <use href="{{asset("bootstrap-italia/svg/sprites.svg#it-close-big")}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="menu-wrapper">
                                    <ul class="navbar-nav">
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{$comune->website_link}}" target="_blank">
                                                <span>Vai al sito del comune</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="https://sep.serviziperlapa.it/{{$comune->fiscal_code}}" target="_blank">
                                                <span>Richiesta sepoltura</span>

                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="https://ac.serviziperlapa.it/{{$comune->fiscal_code}}" target="_blank">
                                                <span>Accesso agli atti</span>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="https://rsp.serviziperlapa.it/{{$comune->fiscal_code}}" target="_blank">
                                                <span>Richiesta occupazione suolo pubblico</span>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="anchor"></div>
<div class="loader-overlay" id="loader">
    <div class="progress-spinner progress-spinner-double size-lg progress-spinner-active">
        <div class="progress-spinner-inner"></div>
        <div class="progress-spinner-inner"></div>
        <span class="visually-hidden">Caricamento...</span>
    </div>
</div>
@csrf
