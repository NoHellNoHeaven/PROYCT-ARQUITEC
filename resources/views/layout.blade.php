<!DOCTYPE html>
<html lang="es">
<head>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <aside class="sidebar">
        <div class="icons-top">
            <a href="{{ route('index') }}"><img class="ic" src="{{ asset('img/cruz.png') }}" alt=""></a>
            <a href="{{ route('doctor') }}"><img class="ic"  src="{{ asset('img/doctor.png') }}" alt=""></a>
            <a href="{{ route('registro') }}"><img class="ic" src="{{ asset('img/list.png') }}" alt=""></a>
        </div>
        <div class="icons-bottom">
            
            <a href="#"><img src="{{ asset('img/logout.png') }}" alt=""></a>
        </div>
    </aside>


</body>
</html>