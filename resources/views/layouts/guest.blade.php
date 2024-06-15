<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="fondo">
    <div class="d-flex">

        {{-- Login --}}
        <div class="container">
            <div class="position-absolute top-50 start-30 translate-middle col-4 " >
                <div class="row justify-content-center">
                    <div class="card rounded-4 border border-black h-100" style="background: white, width:1000px" >
                        <div class="card-body d-flex flex-column text-start">
                            <div class="d-flex justify-content-center">
                                <a> <img class="img-fluid mb-5 mt-3" src="{{url('images/ecologo.png')}}" style="height:auto; width:32vh"> </a>
                            </div>
                            
                            @yield('content')
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- carousel --}}
        <div class="container border">
            <div class="position-absolute top-50 start-75 translate-middle col-4 " >
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('images/carousel1.jpeg')}}" class="d-block w-100 rounded-4 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <b>
                                <p class="fs-2" style="color:black">¿Sabias que...?</p>
                                <p style="color:black">El reciclaje de papel ahorra un 30% de electriciadad y 70% del agua que normalmente se usa para producirlo a partir de madera.</p>
                            </b>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://us-tuna-sounds-images.voicemod.net/fb8a5ccc-b05f-4822-9cbe-c1ee5ab0c37a-1712592970483.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>¿Listo para la segunda ronda?</h5>
                        <p>El reciclaje de las latas de aluminio es tan rápido que pueden volver al estante de una tienda en menos de 2 meses.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('images/imagen1080p.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>!Vuélvete un Héroe Energético!</h5>
                        <p>Reciclando una botella de plástico, ahorramos la energía necesaria para mantener una bombilla encendida por 6 horas.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        
    </div>



</body>
</html>
