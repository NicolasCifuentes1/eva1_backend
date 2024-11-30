<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* General Styles */
        body {
            background-color: #1a1a1a; /* Un fondo oscuro pero más suave */
            color: #f0f8ff; /* Texto en color suave para mejorar la legibilidad */
            font-family: 'Arial', sans-serif; /* Fuente más moderna */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Contenedor Principal */
        .container {
            width: 80%;
            max-width: 1200px;
            margin-top: 20px;
        }

        /* Encabezados */
        h1 {
            font-size: 3em;
            color: #32CD32; /* Verde más brillante */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para darle profundidad */
        }

        h3 {
            font-size: 2em;
            color: #FFD700; /* Color dorado para resaltar */
        }

        /* Enlace */
        a {
            font-size: 1.2em;
            color: #ff8c00; /* Color naranja vibrante */
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            border: 2px solid #ff8c00;
            background-color: #000;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #ff8c00;
            color: #fff;
        }

        /* Estilos de Texto */
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-top: 20px;
        }

        /* Sección Visión */
        .vision-section {
            background-color: #333333;
            padding: 20px;
            margin-top: 30px;
            border-radius: 8px;
        }

        .vision-section p {
            color: #e0e0e0;
        }

        /* Línea divisoria */
        hr {
            border: 0;
            border-top: 2px solid #444;
            margin: 20px 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="../" class="home-link">Página Principal</a>
        <hr>
        <h1>Bienvenido a Nuestro Sitio</h1>
        <hr>
        
        <p>En esta sección, encontrarás una introducción a nuestra empresa y una visión general de los servicios que ofrecemos. Te invitamos a explorar nuestro sitio para descubrir cómo podemos ayudarte a alcanzar tus objetivos.</p>
        
        <div class="vision-section">
            <h3>Visión</h3>
            <p>Nuestra visión en [Nombre de la Empresa] es ser líderes en la industria digital, ofreciendo soluciones innovadoras que transformen la manera en que las empresas operan y se conectan con sus clientes. Buscamos impulsar el progreso y el éxito tanto para nuestros clientes como para nuestra empresa, a través de la excelencia en el servicio y el compromiso con la innovación constante.</p>
        </div>

    </div>

</body>
</html>
