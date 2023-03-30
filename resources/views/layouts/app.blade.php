<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OnMarket</title>
    <link rel="shortcut icon" href="{{ route('inicio.index') }}/img/onMarket-icon.png" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ route('inicio.index') }}/css/style.css">
    <script src="https://kit.fontawesome.com/3783c670b9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="logo">
                        <a href="{{ route('inicio.index') }}/"><img src="{{ route('inicio.index') }}/img/onMarket.png" alt="logo" width="200"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->

                        <!-- @if (Auth::check())
                        
                        @endif -->
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <?php if(Auth::user()->type_user=='administrador'){?>
                                    <a class="dropdown-item" href="{{ route('inicio.index') }}/PanelAdministrativo">Panel Administrativo</a>
                                    <?php }?>
                                    <a class="dropdown-item" href="{{ route('cart.index') }}">
                                        Carrito
                                    </a>
                                    <a class="dropdown-item" href="{{ route('inicio.index') }}/grupo-onmarket">
                                        Grupo OnMarket
                                    </a>
                                    <hr class="dropdown-divider">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="nav__second">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Nuestras Categorias
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/abarrotes">Abarrotes</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/frutas">Frutas</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/verduras">Verduras</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/carnes">Carnes, Aves Y Pescados</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/lacteos">Lacteos</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/panaderia">Panaderia y Pasteleria</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/cuidadoPersonal">Cuidado Personal</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/limpieza">Limpieza</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/bebidas">Bebidas y Licores</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/kids">Bebes</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/libreria">Libreria</a></li>
                    <li><a class="dropdown-item" href="{{ route('inicio.index') }}/categoria/bazar">Bazar</a></li>
                    </ul>
                </div>
                <div class="carritoCompras" id="conteiner_carrito">
                <button class="general" onclick='verCarrito()'>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="number">
                        <span class="badge badge-pill badge-dark">
                            {{ \Cart::getTotalQuantity()}}
                        </span>
                    </div>
                </button>
                <div class="contCarrito" >
                    <div class="miPedido">
                        <h2>Mi pedido</h2>
                    </div>
                    @if(count(\Cart::getContent()) > 0)
                        <div class="listas_Productos">
                            @foreach(\Cart::getContent() as $item)
                            <li class="list-group-item product">
                                <div class="row">
                                    <small>Qty: <b>{{$item->quantity}}</b></small>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('storage').'/'.$item->attributes->image}}" style="width: 60px; height: 60px;">
                                    </div>
                                    <div class="col-lg-6">
                                        {{$item->name}}
                                    </div>
                                    <div class="col-lg-3">
                                        <p>S/. {{ number_format(\Cart::get($item->id)->getPriceSum(),2); }} </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </div>
                    
                    
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-7">
                                    <b>Total: </b>S/. {{ number_format(\Cart::getTotal(),2); }}
                                </div>
                                <div class="col-lg-5">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="btnElimCarrito"><i class="fa fa-trash"></i>Eliminar Carrito</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <a class="caja_carrito" href="{{ route('cart.index') }}">
                                    Carrito
                                </a>
                                <a class="caja_carrito" href="">
                                    Ir a caja
                                </a>
                            </div>
                        </li>
                    @else
                        <li class="carritoVacio">Cuando agregues productos se verán aquí</li>
                    @endif
                </div>
                </div>
            </div>
        </div>
        <main>
            <div class="container_content">
                @yield('content')    
            </div>
        </main>
        <footer>
            <nav class="container_footer">
                <div>
                    <img src="{{ route('inicio.index') }}/img/onMarket-icon.png" alt="OnMarket Logo" width="100">    
                </div>
                <ul>
                    <h3>Sobre OnMarket</h3>
                    <li>OnMarket es un proyecto de tienda virtual realizado por estudiantes del INSTITUTO SUPERIOR TECNOLOGICO - JOSE PARDO, como demostracion de nuestras capacidades de e-commerce en Laravel.</li>
                </ul>
                <ul>
                    <h3>Redes sociales</h3>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="https://github.com/AlexanderMontoya">GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/alexander-josu%C3%A9-montoya-bonifacio/">Linkedin</a></li>
                </ul>
                <ul>
                    <h3>Mi cuenta</h3>
                    <li><a href="{{ route('inicio.index') }}">Pedir</a></li>
                    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                </ul>
            </nav>
            <div class="copyright_footer">
            OnMarket © 2022 TODOS LOS DERECHOS RESERVADOS. DESARROLLADO POR <a href="{{ route('inicio.index') }}/grupo-onmarket">GRUPO ONMARKET</a>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ route('inicio.index') }}/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>