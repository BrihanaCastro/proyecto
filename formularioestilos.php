<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kings of Boxing</title>
    <style type="text/css">
        body {
            background-color: #B7950B;
            font-family: 'Courier New', monospace;
            color: black;
            font-size: 20px;
            margin: 0;
            padding: 0;
            text-align: left;
        }

        header {
            background: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .empresa-nombre {
            font-size: 50px;
            font-family: playfair display;
            font-weight: bold;
            color: firebrick;
            margin-bottom: 10px;
        }

        .navegacion {
            width: 80%;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navegacion ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .menu > li {
            position: relative;
            display: inline-block;
        }

        .menu > li > a {
            display: block;
            padding: 15px 25px;
            color: #666666;
            text-decoration: none;
            transition: color 0.3s, background 0.3s;
        }

        .menu li a:hover {
            color: white;
            background: firebrick;
        }

        .submenu {
            position: absolute;
            background: #333333;
            width: 150px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1000;
            left: 0;
        }

        .submenu li {
            display: block;
            padding: 10px;
        }

        .submenu li a {
            color: #fff;
        }

        .menu li:hover .submenu {
            visibility: visible;
            opacity: 1;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px; /* Ajustado para una mayor área de visualización */
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        img.show {
            opacity: 1;
            transform: translateY(0);
        }

        .galeria {
            display: flex; /* Para organización horizontal */
            justify-content: space-between; /* Espacio entre las imágenes */
            gap: 20px; /* Espacio entre los elementos */
            flex-wrap: nowrap; /* No permite el ajuste a una nueva línea */
            overflow-x: auto; /* Permite desplazamiento horizontal si el contenido excede el tamaño */
            padding-bottom: 10px;
        }

        .galeria .item {
            text-align: center;
            width: 30%; /* Ajustar el tamaño de las imágenes */
            min-width: 250px; /* Ajuste mínimo para que no se compriman demasiado */
        }

        .galeria .item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .texto-imagen {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Animación de aparición de las imágenes */
        .mostrar-imagen {
            animation: fadeInUp 1s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

<header>
    <div class="empresa-nombre">Kings of Boxing</div>
    <nav class="navegacion">
        <ul class="menu">
            <li><a href="/BrihanaCastroo/menudespegable/menuCASTROBRIHANA.php">Inicio</a></li>
            <li><a href="/BrihanaCastroo/menudespegable/formulariohistoria.php">Historia del Boxeo</a></li>
          
            <li><a href="/BrihanaCastroo/menudespegable/formulariobox.php">Mejores Boxeadores</a></li>
            <li>
                <a href="#">Arte del Boxeo</a>
                <ul class="submenu">
                    <li><a href="/BrihanaCastroo/menudespegable/formularioreglas.php">Reglas</a></li>
                    <li><a href="/BrihanaCastroo/menudespegable/formularioestilos.php">Estilos</a></li>
                    <li><a href="/BrihanaCastroo/menudespegable/formulariogolpes.php">Golpes</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

    <p>Estilos de Boxeo</p>
    <p>Estos son los cinco estilos principales en la actualidad. Algunas personas usan nombres diferentes para ellos, pero todos son fácilmente reconocibles por sus características:</p>

 <p>El Out-Boxer – Un luchador de largo alcance que utiliza muchos golpes rectos.</p>
 <p>El Slugger – Un golpeador duro y resistente con mucha resistencia.</p>
 <p>El Counter Puncher – Un luchador rápido y técnicamente sólido con gran paciencia e intuición.</p>
 <p>El Pressure Fighter – Otro luchador rápido pero explosivo y agresivo con gran ofensiva y combinaciones.</p>
 <p>El Boxer-Puncher – Un luchador bien equilibrado con un poder inmenso.</p>


</div>
<section>

     <h2>Out-Boxer</h2>
    <div class="galeria">
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/dimitry.jpeg"  class="mostrar-imagen">
            <div class="texto-imagen">Dimitry Bivol</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/wladi.jpeg" alt="Boxeador 2" class="mostrar-imagen">
            <div class="texto-imagen">Wladimir Klitschko</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/haney.jpeg" alt="Boxeador 3" class="mostrar-imagen">
            <div class="texto-imagen">Devin Haney</div>
        </div>
    </div>

    <h2>Slugger </h2>
    <div class="galeria">
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/foreman.jpeg"  class="mostrar-imagen">
            <div class="texto-imagen">George Foreman</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/marcianito.jpeg" alt="Boxeador 2" class="mostrar-imagen">
            <div class="texto-imagen">Rocky Marciano</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/joe.jpeg" alt="Boxeador 3" class="mostrar-imagen">
            <div class="texto-imagen">Joe Frazier</div>
        </div>
    </div>

     <h2>Counter Puncher</h2>
    <div class="galeria">
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/ali.jpeg"  class="mostrar-imagen">
            <div class="texto-imagen">Muhammed Ali</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/maywlher.jpeg" alt="Boxeador 2" class="mostrar-imagen">
            <div class="texto-imagen">Floyd Mayweather Jr</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/sugarray.jpeg" alt="Boxeador 3" class="mostrar-imagen">
            <div class="texto-imagen">Sugar Ray Robinson</div>
        </div>
    </div>

     <h2>Pressure Fighter</h2>
    <div class="galeria">
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/manny.jpeg"  class="mostrar-imagen">
            <div class="texto-imagen">Manny Pacquiao</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/tyson.jpeg" alt="Boxeador 2" class="mostrar-imagen">
            <div class="texto-imagen">Mike Tyson</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/pitbull.jpeg" alt="Boxeador 3" class="mostrar-imagen">
            <div class="texto-imagen">Isaac Cruz</div>
        </div>

         <h2>Boxer-Puncher</h2>
    <div class="galeria">
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/canelillo.jpeg"  class="mostrar-imagen">
            <div class="texto-imagen">Canelo Alvarez</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/ggg.jpeg" alt="Boxeador 2" class="mostrar-imagen">
            <div class="texto-imagen">Gennady Golovkin</div>
        </div>
        <div class="item">
            <img src="/BrihanaCastroo/menudespegable/gervonta.jpeg" alt="Boxeador 3" class="mostrar-imagen">
            <div class="texto-imagen">Gervonta Davis</div>
        </div>
    </div>
    </div>
</section>
<footer>
    <p>&copy; 2024 Kings of Boxing.</p>
</footer>
</body>
</html>