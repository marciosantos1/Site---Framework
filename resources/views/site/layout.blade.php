
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('titulo')">
        <meta name="author" content="Márcio Ferreira, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>@yield('titulo')</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="{{URL::to('/')}}/carousel.css" rel="stylesheet">
    </head>
    <body>
        <header>  

            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item">
                           
                            <a class="nav-link" href="{{URL::to('/')}}/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/')}}/institucional">Institucional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/')}}/produto">Produtos</a>
                        </li>
                    </ul><p><a style="word-spacing: 9px; color: khaki"><p></p>@yield('dataHoraIp')</a></p>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>
        </header>

        <main role="main">

            @yield('conteudo')


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-right"><a href="#">Voltar para o topo</a></p>
                <p>@yield('textoRodape')</p>
            </footer>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="{{URL::to('/')}}/bootstrap.bundle.min.js" crossorigin="anonymous"></script></body>


</html>


