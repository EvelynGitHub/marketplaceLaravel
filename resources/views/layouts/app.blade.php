<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Marketplace L6</title>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px;">
        <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @auth
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(request()->is('admin/orders*')) active @endif">
                    <a class="nav-link" href="{{route('admin.orders.my')}}">Meus pedidos</a>
                </li>
                <li class="nav-item @if(request()->is('admin/stores*')) active @endif">
                    <a class="nav-link" href="{{route('admin.stores.index')}}">Loja <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item  @if(request()->is('admin/products*')) active @endif">
                    <a class="nav-link" href="{{route('admin.products.index')}}">Produto</a>
                </li>

                <li class="nav-item  @if(request()->is('admin/categories*')) active @endif">
                    <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
                </li>

            </ul>
            <div class=" my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>

                        <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                            @csrf
                        </form>

                    </li>
                    <li class="nav-item">
                        <span class="nav-link" href="#">{{auth()->user()->name}}</span>

                    </li>

                </ul>

            </div>
        </div>
        @endauth

    </nav>


    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>