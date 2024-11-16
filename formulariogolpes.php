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
            text-align: lefts;
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
    <p> Golpes mas comunes</p>
    <p>
    <p> El Jab</p>
<p>El jab es un golpe rápido y directo ejecutado con la mano adelantada (normalmente la izquierda en boxeadores diestros). Su objetivo principal no es causar daño significativo, sino mantener la distancia, romper el ritmo del oponente, preparar combinaciones y crear oportunidades para golpes más potentes. Requiere precisión y velocidad.</p>

<p>El Cross</p>
<p>El cross es un golpe más potente que se ejecuta con la mano trasera (la más alejada del oponente). Se lanza a través de la línea central del cuerpo y utiliza la rotación de las caderas y el torso para generar fuerza. Es efectivo tanto en combinaciones como golpe final, y puede infligir daño significativo.</p>

<p>El Gancho</p>
El gancho es un golpe circular que se ejecuta desde el lateral, dirigido generalmente a la cabeza o al torso del oponente. Es potente debido a la rotación del torso y el movimiento de las piernas. Su trayectoria lateral lo hace difícil de predecir y detener, y es eficaz para flanquear la defensa del rival.</p>

<p>El Uppercut</p>
El uppercut es un golpe ascendente dirigido a la barbilla o al cuerpo, utilizando la fuerza de las piernas y el empuje hacia arriba. Es muy efectivo cuando el oponente está cerca o baja la guardia, y puede desestabilizar el equilibrio del adversario, causando knock-outs si se ejecuta bien.</p>

<p>El Uppercut al Cuerpo</p>
Esta variante del uppercut se dirige al plexo solar o las costillas del oponente, buscando debilitarlo al reducir su resistencia y capacidad de movimiento. Aunque no busca necesariamente el KO, es clave para romper la defensa del oponente y crear espacios para otros ataques.</p>

<p>El Golpe por Encima de la Mano</p>
Similar al jab, este golpe se lanza con una trayectoria en arco, eludiendo la guardia del oponente, especialmente si tiene la guardia alta o el boxeador es más bajo. Aunque su ejecución es más lenta que otros golpes, puede ser muy efectivo y potente si se lanza en el momento adecuado.</p>
</body>
</html>