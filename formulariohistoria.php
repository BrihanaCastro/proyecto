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
            text-align: center;
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
        <h2>Historia del Boxeo</h2>
        <p>
            El arte pugilístico del boxeo constituye uno de los deportes más antiguos que existen. Aunque su origen tuvo lugar en el Antiguo Egipto, se considera que durante la prehistoria este deporte ya se practicaba en la zona de la actual Etiopía, aproximadamente en el año 6.000 a. C.
        </p>
        <p>
            Fue desde esta región donde la práctica se comenzó a expandir hacia Egipto, popularizándose como una forma recurrente de entretenimiento en distintas celebraciones y festividades, en la que tanto hombres como mujeres luchaban entre ellos con unos vendajes que les cubrían parcialmente el antebrazo hasta el codo, dejando los nudillos descubiertos.
        </p>
        <p>
            Se considera que el primer combate de boxeo moderno tuvo lugar en 1681, siendo promovido por el duque de Albemarle y en el que, tal y como se hizo eco el diario británico Protestant Mercury, participaron un lacayo del duque y un rudo carnicero, saliendo ganador este último.
        </p>
        <p>
            La popularidad alcanzó cotas espectaculares en Gran Bretaña durante la primera mitad del siglo XVIII, siendo James Figg el primer campeón de los pesos pesados en reclamar el título en 1719 en una modalidad sin guantes que se denominaba “puño limpio”.
        </p>
    </main>
    <footer>
    <p>&copy; 2024 Kings of Boxing.</p>
</footer>

</body>
</html>