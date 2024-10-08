<!DOCTYPE html>
<html lang="es">

<head>
    <base href="/public">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="inicio/styles.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
        /* Estilos generales */

        /* Estilos para el header */
        .top-header {
            background-color: #4CAF50;
            padding: 15px 0;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header-logo {
            text-align: left;
        }

        .logo-img {
            max-width: 150px;
        }

        .navbar-default {
            background-color: transparent;
            border: none;
        }

        .navbar-nav>li>a {
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .navbar-nav>li>a:hover,
        .navbar-nav>li>a.active {
            color: #fff;
            background-color: #007bff;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .navbar-collapse {
            justify-content: flex-end;
        }

        @media (max-width: 768px) {
            .header-logo {
                text-align: center;
                margin-bottom: 20px;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav>li>a {
                display: block;
                padding: 10px;
            }
        }

        /* Estilos generales para la página */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title h1 {
            font-size: 36px;
            font-weight: bold;
            color: #4CAF50;
        }

        .section-title span {
            color: #007bff;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col-sm-6,
        .col-md-4,
        .col-lg-4 {
            flex: 0 0 calc(33.33% - 20px);
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .box {
            border: 1px solid #ddd;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            border-radius: 10px;
        }

        .box:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .img-box {
            position: relative;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .img-box img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 10px;
        }

        .img-box:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 10px;
        }

        .img-box:hover .overlay {
            opacity: 1;
        }

        .overlay .text {
            text-align: center;
        }

        .option_container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .options {
            background: rgba(255, 255, 255, 0.7);
            padding: 5px 10px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .option_container:hover .options {
            background: rgba(255, 255, 255, 0.9);
        }

        .option1 {
            color: #333;
            text-decoration: none;
        }

        /* Estilos específicos para texto de oferta y precio */
        .price {
            margin-bottom: 10px;
            text-align: center;
            font-size: 25px;
        }

        .price.discount {
            color: blue;
        }

        .price.regular {
            text-decoration: line-through;
            color: red;
        }

        .price.normal {
            color: green;
        }
    </style>
</head>

<body>

    <!-- Encabezado -->
    <header class="top-header">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo Section -->
                <div class="col-xs-5 header-logo">
                    <a href="/">
                        <img src="/images/tu-logo.png" alt="Logo" class="img-responsive logo-img">
                    </a>
                </div>

                <!-- Navbar Section -->
                <div class="col-md-7">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid nav-bar">

                            <!-- Navbar Content -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Inicio -->
                                    <li><a class="menu active" href="/">Inicio</a></li>
                                    <!-- Iniciar Sesión -->
                                    <li><a class="menu" href="login">Iniciar Sesión</a></li>
                                </ul>
                            </div><!-- /navbar-collapse -->

                        </div><!-- /container-fluid -->
                    </nav>
                </div>

            </div>
        </div>
    </header> <!-- end of header area -->

    <!-- Contenido principal -->
    <main>
        <!-- Sección de productos -->
        <section class="product-section">
            <div class="container">
                <div class="section-title">
                    <h1>Nuestros <span>productos</span></h1>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <!-- Opciones (si las tienes) -->
                            </div>
                            <div class="img-box">
                                <img src="/images/producto1.jpg" alt="Producto 1">
                                <div class="overlay">
                                    <div class="text">
                                        <h2>Producto 1</h2>
                                        <h3>$ Precio</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin de la sección de productos -->
    </main>

    <!-- Scripts adicionales si es necesario -->

</body>

</html>
