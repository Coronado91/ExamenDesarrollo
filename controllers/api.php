<?php 
    class Api extends Controller{
        function __construct(){
            parent::__construct();
        }
        function render(){
                $this->view->render('api/index');
        }
        public function APIREST(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    $data = $this->model->getApiPersona();
                    if(is_array($data)){
                        echo json_encode($data);
                    }else{
                        echo $data;
                    }
            }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $data = array($_POST["nombre"], $_POST["apellidos"],"dpi");
                    $datos = $this->model->registrarpersona($this->persona($data));
                    if($datos == 0){
                        echo "Registro Exitoso";
                    }else{
                        echo "No se ha completado la petición";
                    }
            }elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
                    echo $this->model->eliminarpersona($_GET["id_persona"]);
            }elseif ($_SERVER['REQUEST_METHOD'] == 'PUT'){
                    $data = array($_GET["nombre"], $_GET["apellidos"], $_GET["dpi"]);
                    echo $this->model->editpersona($this->persona($data),$_GET["id_persona"]);
                
            }
        }
    }

?>