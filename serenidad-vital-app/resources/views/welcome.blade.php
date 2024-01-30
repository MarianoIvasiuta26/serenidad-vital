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
                        <h1>Consultorio Serenidad Vital</h1>
                    </div>
                    <div id="home-top-left-text">
                        <p>En Serenidad Vital te ofrecemos un espacio de contención y acompañamiento para que puedas encontrar tu bienestar físico y emocional.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="nosotros">
            <div id="nosotros-top">
                <div id="nosotros-top-left">
                    <div id="nosotros-top-left-img">
                        <img src="{{asset('img/nosotros.jpg')}}" alt="">
                    </div>
                </div>
                <div id="nosotros-top-right">
                    <div id="nosotros-top-right-title">
                        <h1>¿Quiénes somos?</h1>
                    </div>
                    <div id="nosotros-top-right-text">
                        <p>Somos un equipo de profesionales de la salud comprometidos con tu bienestar integral. En Serenidad Vital, trabajamos en conjunto para brindarte un espacio seguro, cálido y de apoyo donde puedas explorar y fortalecer tu bienestar físico, emocional y mental. Nuestra misión es acompañarte en tu camino hacia la serenidad, proporcionándote herramientas y recursos para que puedas alcanzar un estado de equilibrio y armonía en tu vida diaria.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="servicios">
            <div id="servicios-top">
                <div id="servicios-top-title">
                    <h1>Nuestros Servicios</h1>
                </div>
                <div id="servicios-top-services">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/terapia1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Terapia Individual</h5>
                                    <p class="card-text">
                                        Sesiones individuales con un psicólogo para abordar problemas específicos, como ansiedad, depresión, estrés, relaciones interpersonales, autoestima, trauma, entre otros.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/terapia-pareja.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Terapia de Pareja</h5>
                                    <p class="card-text">
                                        Sesiones dirigidas a mejorar la comunicación, resolver conflictos, fortalecer la relación y trabajar en problemas específicos dentro de la pareja.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/terapia-familiar.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Terapia Familiar</h5>
                                    <p class="card-text">
                                        Sesiones diseñadas para abordar conflictos familiares, mejorar la comunicación familiar, establecer límites saludables, resolver problemas de crianza, y fortalecer las relaciones familiares.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/terapia-jovenes.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Psicoterapia Infantil y Adolescente</h5>
                                    <p class="card-text">
                                        Sesiones dirigidas a niños y adolescentes para abordar problemas específicos relacionados con el desarrollo, el comportamiento, la educación, las relaciones familiares, etc.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/evaluacion.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Evaluación Psicológica</h5>
                                    <p class="card-text">
                                        Evaluaciones psicológicas para diagnosticar trastornos mentales, evaluar habilidades cognitivas, identificar problemas de aprendizaje, evaluar el funcionamiento emocional, entre otros.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/salud-mental.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Asesoramiento en Salud Mental</h5>
                                    <p class="card-text">
                                        Orientación y apoyo para mejorar el bienestar emocional y mental, aprender estrategias de afrontamiento saludables, promover la prevención y el autocuidado, y acceder a recursos comunitarios.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/asesoramiento-psicologico.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Asesoramiento Psicológico</h5>
                                    <p class="card-text">
                                        Sesiones breves dirigidas a proporcionar orientación, apoyo emocional y estrategias de afrontamiento para enfrentar situaciones difíciles de la vida, como problemas laborales, conflictos familiares, transiciones vitales, etc.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/terapia-online.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Terapia Online</h5>
                                    <p class="card-text">
                                        Sesiones terapéuticas realizadas a través de plataformas de videoconferencia, chat o teléfono, que ofrecen la comodidad de recibir terapia desde cualquier lugar con acceso a internet.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('img/orientacion-vocacional.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Orientación Vocacional y Profesional</h5>
                                    <p class="card-text">
                                        Servicios dirigidos a ayudar a las personas a explorar sus intereses, habilidades y valores para tomar decisiones educativas y profesionales informadas.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success">Solicitar Turno</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
