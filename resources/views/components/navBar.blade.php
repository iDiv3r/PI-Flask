@extends('layouts.app')


@section('navBar')

{{-- Nav Bar --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary mt-3">
    <div class="container-fluid">

        <div class="d-flex">
            <button class="btn navbar-brand" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <img src="{{url('images/icons/menu.png')}}" alt="">
            </button>
            <a class="btn navbar-brand nav-link" type="button" href={{route('home')}}>Ecommunity</a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <form class="d-flex col-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

        </div>
    </div>
</nav>

<hr>

{{-- Off-Canvas Sidebar --}}

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menú</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ol class="list-group list-group list-group-flush">

            <li class="list-group-item">
                <a class="btn btn-primary my-3" href={{route('irListaEmpresas')}}>Lista de empresas</a>
            </li>
            
            <li class="list-group-item">
                <a class="btn btn-primary my-3" href={{route('irPuntosRecoleccion')}}>Puntos de recolección</a>
            </li>

            <li class="list-group-item">
                <a class="btn btn-primary my-3" href={{route('irMisRecolecciones')}}>Mis recolecciones</a>
            </li>

            <li class="list-group-item">
                <a class="btn btn-primary my-3" href={{route('irListaUsuarios')}}>Lista de usuarios</a>
            </li>

            <li class="list-group-item">
                <a class="btn btn-primary my-3">Mi cuenta</a>
            </li>
        </ol>
    </div>
</div>


@stop
