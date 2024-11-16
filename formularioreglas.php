<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kings of Boxing</title>
    <style type="text/css">
        body{
            
            background-color: #B7950B;
            font-family: 'Courier New', monospace;
            color: black;
            font-size: 20px;
            margin: 0;
            padding: 0;
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
            max-width: 800px;
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
<main>
    
    <main>
        <h2>Reglas Básicas del Boxeo</h2>
        <p>La pelea se realiza en un ring de unos 7.3 metros cuadrados.</p>
        <p>No se puede luchar cuerpo a cuerpo o utilizar los brazos para bloquear de manera ilegal.</p>
        <p>Cada asalto tiene una duración de 3 minutos y un minuto de descanso entre rondas.</p>
        <p>Si un peleador cae, debe levantarse en un plazo de 10 segundos; el oponente debe regresar a su esquina. Si no se levanta, se concede la victoria al adversario.</p>
        <p>Si un peleador se apoya en las cuerdas de manera indefensa, será considerado como caído.</p>
        <p>En caso de golpeo ilegal o accidente, el combate puede terminar en empate.</p>
        <p>No se permite el uso de zapatos con clavos en el ring.</p>
        <p>Los guantes deben ser nuevos y de un tamaño adecuado para cada boxeador.</p>
        <p>El número de rondas es determinado durante la planificación del evento.</p>
        <p>Existen tres jueces que califican la pelea.</p>
        <p>Los boxeadores deben usar protector bucal, cups protectores y vendajes adecuados.</p>

        <h2>Restricciones Importantes</h2>
        <ul>
            <li>Está prohibido golpear en la nuca o en la parte trasera de la cabeza.</li>
            <li>No se permite patear al rival.</li>
            <li>No se debe dar la espalda al oponente.</li>
            <li>Está prohibido tropezar al oponente intencionadamente.</li>
            <li>No se pueden dar cabezazos intencionales.</li>
            <li>Está prohibido el uso de objetos no autorizados en el ring.</li>
            <li>No se permiten golpes por debajo de la cintura.</li>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Kings of Boxing. Todos los derechos reservados.</p>
    </footer>
</main>
</body>
</html>