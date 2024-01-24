<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Serenidad Vital</title>

        <!-- Bootstrap 5.1.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Styles CSS -->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">


    </head>

    <body>
        <div id="header" class="justify-content-center">
            <div id="header-top">
                <div id="logo" class="d-flex justify-content-center">
                    <img src="{{asset('img/logo-header.png')}}" alt="logo" width="400" height="200">
                </div>
            </div>

            {{-- Navbar --}}
            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c6a7de; font-size: 20px;">
                    <div class="container-fluid ">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Página Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reserva un turno</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div id="home">
            <div id="home-top">
                <div id="home-top-left">
                    <div id="home-top-left-title">
                        <h1>¡Bienvenidos!</h1>
                    </div>
                    <div id="home-top-left-text">
                        <p>En Serenidad Vital te ofrecemos un espacio de contención y acompañamiento para que puedas encontrar tu bienestar físico y emocional.</p>
                    </div>
                </div>

            </div>
            <div id="home-bottom">
                <div id="home-bottom-left">
                    <div id="home-bottom-left-img">
                        <img src="{{asset('img/serenidad2.jpg')}}" alt="home-bottom-left-img">
                    </div>
                </div>
                <div id="home-bottom-right">
                    <div id="home-bottom-right-title">
                        <h1>¿Qué es la Serenidad?</h1>
                    </div>
                    <div id="home-bottom-right-text">
                        <p>La serenidad es un estado de calma y tranquilidad que se logra cuando se alcanza el equilibrio entre el cuerpo y la mente.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="nosotros">

        </div>
    </body>
</html>
