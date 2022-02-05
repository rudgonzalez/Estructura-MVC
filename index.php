<?php

require_once("Config/Config.php");
require_once("Helpers/Helpers.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home'; // condicion de que si existe la url que se quiere acceder
$arrUrl = explode("/", $url); //Se esta tomando las posiciones de la URL (0-Controlador, 1-Metodo, 2-Parametro)
$controller = $arrUrl[0];
$method = $arrUrl[0];
$parametro = "";

//validar si el metodo esta vacio
if(!empty($arrUrl[1]))
{
    if($arrUrl[1] != "")
    {
        $method = $arrUrl[1];
    }
}

//Validar los parametros
if(!empty($arrUrl[2]))
{
    if($arrUrl[2] != "")
    {
        for($i=2; $i < count($arrUrl) ; $i++)
        {
            $parametro .= $arrUrl[$i].',';
        }
            $parametro = trim($parametro,',');
    }
}

require_once(LIBS."Core/Autoload.php");
require_once(LIBS."Core/Load.php");

?>