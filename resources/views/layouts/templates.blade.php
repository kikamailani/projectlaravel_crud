<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Siswa Jurusan</title>
    <link rel="icon" href="{{ asset('assets/images/wikrama.jpg') }}">
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles to align text to the left and set text color to gray */
        .navbar-nav .nav-link,
        .navbar-brand {
            text-align: left;
            color: gray !important;
        }

        .dropdown-menu .dropdown-item {
            color: gray !important;
        }

        .dropdown-menu .dropdown-item:hover {
            color: darkgray !important;
        }

        .navbar-toggler {
            border-color: gray;
        }

        .navbar-toggler-icon {
            background-color: gray; /* Set the color of the toggler icon */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#"></a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav"> <!-- Removed ms-auto for left alignment -->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('landing_page') ? 'text-primary' : '' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                        {{ Route::is('jurusan.index') || Route::is('jurusan.store') ? 'text-primary' : '' }} "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tabel Siswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('jurusan.index') ? 'text-primary' : '' }}"
                                    href="{{ route('jurusan.index') }}">Data Table</a></li>
                            <li><a class="dropdown-item {{ Route::is('jurusan.store') ? 'text-primary' : '' }}"
                                    href="{{ route('jurusan.create') }}">Tambah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                        {{ Route::is('akun.data') || Route::is('akun.tambah.formulir') ? 'text-primary' : '' }} "
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tabel Kelola
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('akun.data') ? 'text-primary' : '' }}"
                                    href="{{ route('akun.data') }}">Data Kelola</a></li>
                            <li><a class="dropdown-item {{ Route::is('akun.tambah.form') ? 'text-primary' : '' }}"
                                    href="{{ route('akun.tambah') }}">Tambah Form</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @stack('script')
</body>

</html>
