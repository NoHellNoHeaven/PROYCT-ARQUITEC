<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión.</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
        <div class="login-form">
            <img src="{{ asset('img/Logo.png') }}" alt="">
            <h2>Iniciar Sesión</h2>
            <form action="{{ url('/login') }}" method="POST">
                <!-- @csrf -->
                <input type="text" name="username" placeholder="Nombre de usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <a href="#">¿Haz olvidado la contraseña?</a>
                <button type="submit">Ingresar</button>
            </form>
        </div>
      
</body>
</html>