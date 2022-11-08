<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body class="container">
    <header class="row">
        @include('includes.search')
    </header>
    <main>
        @yield('content')
    </main>

    <footer style="position: absolute;bottom: 0; height: 50px;">
        @include('includes.footer')
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
