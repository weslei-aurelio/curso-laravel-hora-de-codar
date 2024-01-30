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
        <title>@yield('title')Laravel</title>

    </head>
    <body>  
        <header>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse id="#navbar">
                    <a href="/" class="navbar-brand"></a>
                    <img src="{{asset('images/hdcevents_logo.svg')}}">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Criar eventos</a>
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
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2020</p>
        </footer>
    </body>
</html>
