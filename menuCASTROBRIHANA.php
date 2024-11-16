<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kings of Boxing</title>
    <style>
       body {
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

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <script type="text/javascript" src="engine0/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section --></head>
<body>
    <header>
        <div class="empresa-nombre">Kings of Boxing</div>
        <nav class="navegacion">
            <ul class="menu">
                <li> <li><a href="/BrihanaCastroo/menudespegable/menuCASTROBRIHANA.php">Inicio</a></li>
                <li> <li><a href="/BrihanaCastroo/menudespegable/formulariohistoria.php">Historia del Boxeo</a></li>
                 
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
    <img src="/BrihanaCastroo/menudespegable/Thebestduo.jpeg" class="mostrar-imagen">
    <main>
        <h2>Bienvenido al Mundo del Boxeo</h2>
        <p>El boxeo no solo es un deporte físico, sino que también involucra aspectos tácticos y psicológicos, lo que lo convierte en una disciplina integral que exige un enfoque tanto físico como mental. Además, dentro del boxeo, existen diferentes modalidades y categorías que permiten a los boxeadores competir en distintos niveles según su peso, experiencia o estilo de combate, el boxeo es una disciplina porque tiene un conjunto de reglas, estructuras y principios que definen su práctica y su competencia, y requiere de un entrenamiento riguroso tanto físico como mental para su correcta ejecución</p>

         <p>el deporte requiere gran dedicación, habilidad técnica, resistencia física y mental, y valentía. Como cualquier otro deporte, el boxeo debe ser valorado por los esfuerzos y sacrificios que conlleva, en lugar de ser percibido solo a través de los estereotipos de violencia que a veces lo acompañan en la cultura popular. Las personas que lo practican, como cualquier atleta, merecen ser respetadas por su dedicación y esfuerzo.</p>
    </main>
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container0">
    <div class="ws_images"><ul>
        <li><img src="data0/images/c.jpg" alt="C" title="C" id="wows0_0"/></li>
        <li><img src="data0/images/g.jpg" alt="G" title="G" id="wows0_1"/></li>
        <li><a href="http://wowslider.net"><img src="data0/images/lcb.jpg" alt="jquery carousel" title="LCB" id="wows0_2"/></a></li>
        <li><img src="data0/images/ring.jpg" alt="Ring" title="Ring" id="wows0_3"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="C"><span><img src="data0/tooltips/c.jpg" alt="C"/>1</span></a>
        <a href="#" title="G"><span><img src="data0/tooltips/g.jpg" alt="G"/>2</span></a>
        <a href="#" title="LCB"><span><img src="data0/tooltips/lcb.jpg" alt="LCB"/>3</span></a>
        <a href="#" title="Ring"><span><img src="data0/tooltips/ring.jpg" alt="Ring"/>4</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html5 slider</a> by WOWSlider.com v9.0</div>
    <div class="ws_shadow"></div>
    </div>  
    <script type="text/javascript" src="engine0/wowslider.js"></script>
    <script type="text/javascript" src="engine0/script.js"></script>
    <footer>
    <p>&copy; 2024 Kings of Boxing.</p>
</footer>
</body>
</html>
