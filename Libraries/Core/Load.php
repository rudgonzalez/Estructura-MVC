<?php

    $ControllerFile = "Controllers/".$controller.".php";

    //Validar si el controlador existe
    if(file_exists($ControllerFile))
    {   
        require_once($ControllerFile);
        $controller = new $controller(); // Instancia del controlador

        //Validar si el metodo existe
        if(method_exists($controller, $method))
        {
            $controller->{$method}($parametro); //utilizar el methodo del controlador
        }
        else
        {
            require_once("Controllers/Error.php");
        }
    }
    else
    {
        require_once("Controllers/Error.php");
    }

?>