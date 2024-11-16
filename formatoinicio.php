<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Página Web</title>
    <style>
       body {
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