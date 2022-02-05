<?php

class Controllers
{
    public function __construct()
    {
        $this->views = new Views();
        $this->loadMode();
    }

    //Metodo para cargar el modelo
    public function loadMode()
    {
        $model  = get_class($this)."Model";
        $routeClass = "Models/".$model.".php";

        if(file_exists($routeClass))
        {
            require_once ($routeClass);
            $this->model = new $model();
        }
    }
}

?>