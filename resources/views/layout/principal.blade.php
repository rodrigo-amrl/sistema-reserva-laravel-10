<!doctype html>
<html lang="pt-BR">

@include('layout.head')

<body>
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <div class="page-wrapper">
        @include('layout.menu')
        <div class="page-content">
            @include('layout.barra_inicial')
            @yield('content')
        </div>

    </div>
    @include('layout.footer')

</body>

</html>
