<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Projeto de blog com a finalidade de portfólio">
    <meta name="keywords" content="projeto, portfólio, blog, laravel, php">
    <meta name="author" content="Guilherme Moraes">
    {{-- <link rel="shortcut icon" href="img/icon3.png"> --}}
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/8c1e7e2148.js" crossorigin="anonymous"></script>
    {{-- Bootstrap 5.1.3 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bloguil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::current()->getName() === 'form.login' ? 'active' : '' }}"
                                href="{{ route('form.login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::current()->getName() === 'form.register' ? 'active' : '' }}"
                                href="{{ route('form.register') }}">Register</a>
                        </li>
                    </ul>
                @endguest

                @auth
                    <ul class="col-sm ms-auto navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Posts
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Listar todos os posts</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Criar postagem</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="ms-auto bd-highlight">
                        <form>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle btn btn-outline-color mx-1" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a href="#" class="dropdown-item" type="submit">{{ Auth::user()->name }}</a>
                                        </li>
                                        <li><a href="{{ route('logout.do') }}" class="dropdown-item"
                                                type="submit">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Bootstrap 5.1.3 JS+Popper Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
