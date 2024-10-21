<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLAP</title>
    <link rel="shortcut icon" href="view/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="view/css/normalize.css">
    <link rel="stylesheet" href="view/css/estilos.css">
    <script src="view/js/bootstrap.js"></script>
    <script src="view/js/app.js"></script>
    <script src="view/js/jquiery.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <meta name="theme-color" content="#2091F9">
    <style>
        .sub-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .nav__items:hover .sub-menu {
            display: block;
        }

        .sign-in {
            left: 0;
            width: 50%;
            z-index: -1;
            margin-top: -43em;
            padding: 40px;
        }

        .sign-in {
            position: absolute;
            left: 50%;
            /* Centra el borde izquierdo en el centro del contenedor padre */
            width: 50%;
            z-index: -1;
            margin-top: -43em;
            padding: 40px;
            transform: translateX(-50%);
            /* Centra en base al ancho del propio elemento */
        }
    </style>
    <meta name="title" content="Clap">
</head>

<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <a href="?controller=clap&action=home" class="nav__title">
                    <img src="view/images/favicon.png" width="80" height="80" alt="Logo">
                </a>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Registros</a>
                    <ul class="sub-menu">
                        <li><a href="?controller=clap&action=Con_clap">Clap</a></li>
                        <li><a href="?controller=clap&action=Con_comunidad">Comunidad</a></li>
                        <li><a href="?controller=clap&action=Con_calle">Calle</a></li>
                        <li><a href="?controller=clap&action=Con_nucleo">Núcleo Familiar</a></li>
                    </ul>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Consultas</a>
                    <ul class="sub-menu">
                        <li><a href="?controller=clap&action=Con_clap">Claps</a></li>
                        <li><a href="?controller=clap&action=Con_comunidad">Comunidades</a></li>
                        <li><a href="?controller=clap&action=Con_calle">Calles</a></li>
                        <li><a href="?controller=clap&action=Con_nucleo">Familias</a></li>
                    </ul>
                </li>
                <li class="nav__items">
                    <a href="?controller=clap&action=cerrarSesion" class="nav__links">Salir</a>
                </li>
                <img src="view/images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="view/images/menu.svg" class="nav__img">
            </div>
        </nav>