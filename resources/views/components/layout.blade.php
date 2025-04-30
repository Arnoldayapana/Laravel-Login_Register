<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])

    <style>
        * {
            font-family: 'poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, rgb(239, 239, 239), rgb(238, 246, 247));
        }

        .hero {
            position: relative;
            background-image: url('{{ asset("images/beach.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .btn-beach {
            background-color: #00796b;
            border: none;
        }

        .btn-beach:hover {
            background-color: #004d40;
        }

        .feature-card {
            background: #ffffffcc;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);

        }

        footer {
            background-color: #f1f1f1;
            padding: 1rem;
            text-align: center;
            margin-top: 4rem;
            justify-content: end;
        }
    </style>


</head>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Bootstrap" width="60" height="50">
                SUBIC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-bold justify-content-end" id="navbarScroll">
                <div class="btn">
                    <a href="{{ route('register') }}" class="btn btn- btn-md btn-dark text-white">Register</a>
                </div>
                <div class="btn my-2">
                    <a href="{{ route('login') }}" class="btn btn- btn-md btn-dark text-white">Login</a>
                </div>
            </div>
        </div>
    </nav>

</header>


<body>


    <main>
        {{ $slot }}
    </main>
    <!-- Footer -->
    <footer class="">
        &copy; {{ date('Y') }} SUBIC BEACH. All rights reserved.
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>