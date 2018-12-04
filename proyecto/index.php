<?php

    include_once "./core/utils/globals.php";
    $config = require_once "./configs/config.php";
    //Llamar al método getInstance de la clase Globals

    //Utilizar el método set de $globals para añadir $config ($key será "config")

    include_once "./core/MVC/controller.php";
    //Crear un nuevo objeto de tipo Controller

    //Llamar al método run del objeto creado anteriormente

