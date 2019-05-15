<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PROMAJNA</title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('js/bootstrap.js') }}" rel="stylesheet">
    </head>
    <body>
        <div class="title m-b-md">
            Promajna
        </div>
        <div id="Navbar" class="row">
            <nav id="myNavbar" class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item option"><a class="nav-link" href="#home">Početna</a></li>
                        <a class="nav-link dropdown-toggle" href="#app" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Apartmani
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#matea">Matea</a>
                                <a class="dropdown-item" href="#karla">Karla</a>
                                <a class="dropdown-item" href="#nikola">Nikola</a>
                                <a class="dropdown-item" href="#gloria">Gloria</a>
                                <div class="dropdown-divider"></div>
                              </div>
                        <li class="nav-item option"><a class="nav-link" href="#">Upit</a></li>
                        <li class="nav-item option"><a class="nav-link" href="#">Apartman Dvije Palme</a></li>
                        <li class="nav-item option"><a class="nav-link" href="#">O nama</a></li>
                        <li class="nav-item option"><a class="nav-link" href="#">Kontakt</a></li>
                    </div>
                  </nav>
        </div>
                  <div class="container-fluid">
                        <section id="home" class="row d-flex flex-column justify-content-center align-items-left">
                            <div id="zaglavlje" class="row">
                            <div id="slika" class="col-2 col-md-4 d-flex flex-column justify-content-left align-items-left">
                                <div>

                                <img src={{ asset('img/kuca.jpg') }}>
                                </div>
                            </div>
                        </section>
                        <div id="glavni" class="row">
                            <div id="tekst" class="col-8 col-md-8 d-flex flex-column justify-content-center align-items-center">
                                <section id="about" class="row d-flex flex-column justify-content-center align-items-left">


    </body>
</html>
