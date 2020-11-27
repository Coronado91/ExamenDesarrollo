<?php
    require_once 'funciones.php';
    require_once 'anonymous.php';
    class Controller extends Anonymous{
        function __construct(){
                    
            $this->view = new View();
            $this->funcion = new funcion();

        }

        function loadModel($model){
            $url = 'models/'.$model.'model.php';
            if(file_exists($url)){
                require $url;

                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        }
    }
?> 