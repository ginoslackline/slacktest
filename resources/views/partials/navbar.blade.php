<div id="cover" class="d-flex align-items-center justify-content-center vh-100 text-white"
style="background: url('{{ asset('resources/img/web/background%20cover.jpg') }}') no-repeat center center;
   background-size: contain;
   background-attachment: fixed;">
<div class="text-center">
    <h1 class="display-3">Welcome to TJS</h1>
    <p class="lead">The best Trickline Judging System</p>
    <button class="btn btn-primary"
        onclick="document.getElementById('navbar').scrollIntoView({ behavior: 'smooth' })">Explorar</button>
</div>
</div>

<nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="/index.html">
        <img src="{{ asset('C:\mis-proyectos\mi-proyecto-laravel\resources\img\web\logo1.jpg') }}" alt="Logo" width="70" height="40"
            class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link scrollto active"
                    href="/competiciones/competiciones.html">Competiciones</a></li>
            <li class="nav-item"><a class="nav-link" href="/tricklist/tricklist.html">Tricklist</a></li>
            <li class="nav-item"><a class="nav-link" href="/atletas/atletas.html">Atletas</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown">Reglas</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Ver todas las reglas</a></li>
                    <li><a class="dropdown-item" href="#">Sin Reglas</a></li>
                    <li><a class="dropdown-item" href="#">TJS v2.0</a></li>
                    <li><a class="dropdown-item" href="#">TJS v3.0</a></li>
                    <li><a class="dropdown-item" href="#">TJS v4.0</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Team</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">CEO</a></li>
                    <li><a class="dropdown-item" href="#">Jueces</a></li>
                    <li><a class="dropdown-item" href="#">Organizadores</a></li>
                    <li><a class="dropdown-item" href="#">Join us!</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">NEW TJS v5.0</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>
</nav>