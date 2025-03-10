<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content') <!-- Aquí se inyecta el contenido específico -->
    </div>

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
