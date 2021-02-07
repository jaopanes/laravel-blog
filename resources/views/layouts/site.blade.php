<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>@yield('title') - Loja de Doces</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url(mix('assets/styles/app.css')) }}">
    </head>

    <body>
        <div class="container">
            <nav>
                <ul class="d-flex align-items-center justify-content-end">
                    <li><a href="{{route("site.home")}}">Inicio</a></li>
                    <li><a href="{{route("site.products")}}">Produtos</a></li>
                    <li><a href="{{route("site.blog")}}">Blog</a></li>
                    <li><a href="{{route("site.about")}}">Sobre</a></li>
                    <li><a href="{{route("site.contact")}}">Contato</a></li>
                </ul>
            </nav>

            <main>
                @yield('content')
            </main>

            <footer>
                <p>Todos os direitos reservados</p>
                <p class="credits">Desenvolvido por <strong>João Birelo</strong></p>
            </footer>
        </div>

        <script src="{{ url(mix('assets/scripts/app.js')) }}"></script>
    </body>
</html>
