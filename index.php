<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <meta charset="UTF-8">
        <title>Venta Express</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="titulo">
                <?php
                echo "<img src=\"imagen.jpg\">";
                ?>
                
            </div>
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenido"></div>
        </div>

    </body>

    <script>
        $("#prisolicitud").on("click", function (event) {
            if (($("[id*=subsolicitud]").css("display") != "none")) {
                $("[id*=subsolicitud]").css("display", "none");
            } else {
                $("[id*=subsolicitud]").show();
                $("[id*=subsolicitud]").css("display", "block");
            }





        });

        $('[data-toggle="tooltip"]').tooltip();
    </script>


    <!--    Este script lo agregué para que la cinta de producto y los demas puedan aparecer como un submenu-->
    <script>
        $("#subsolicitud").on("click", function (event) {
            if (($("[id*=subsolicitude]").css("display") != "none")) {
                $("[id*=subsolicitude]").css("display", "none");
            } else {
                $("[id*=subsolicitude]").show();
                $("[id*=subsolicitude]").css("display", "block");
            }
        });

        $('[data-toggle="tooltip"]').tooltip();

    </script>


</html>
