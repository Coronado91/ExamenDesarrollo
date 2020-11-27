<?php
    Class Index extends Controller{
        function __construct(){
            parent::__construct();
        }

        public function render(){
            $this->view->render('index/index');
        }

         public function Listar()
        {
           $data = $this->model->listarproducto();
           if(is_array($data)){
              echo json_encode($data);
           }else{
               echo $data;
           }
        }
    }
?>