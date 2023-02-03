<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>majorIT</title>

    {{-- boostrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- fontawesome icons --}}
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    {{-- data tables --}}
    {{-- # for display --}}
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- # for alignment --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg border">
        <div class="container">
            <a class="navbar-brand mainTitle" href="{{ url('/') }}">major<b>IT</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-center " aria-current="page"
                            href="{{ url('/catalogues') }}">Catalogue</a>
                    </li>
                    @if (!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-center " aria-current="page" href="{{ url('/signin') }}">Sign
                                in</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <div class="dropdown text-center">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="{{ url('/users/' . Auth()->user()->id) }}">Profile</a></li>
                                    <li>
                                        <form action="{{ url('/signout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>
