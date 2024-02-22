<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Fonte do Google --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- Link do Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="{{ asset('/css/styles.css')}}">
        
        <script src="{{ asset('js/scripts.js') }}"></script>
        <title>@yield('title')</title>

    </head>
    <body>  
        <header>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand"></a>
                    <img src="{{asset('images/hdcevents_logo.svg')}}">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('criar')}}" class="nav-link">Criar eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
           </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>Weslei A. | todos os direitos reservados | &copy; 2024</p>
        </footer>
        {{-- Scripts responsáveis pela utilização de icons utilizados no projeto --}}
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

{{-- Parei neste video: https://www.youtube.com/watch?v=z1ISAp7sYwo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=15 --}}
