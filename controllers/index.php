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
           echo json_encode($data);
        }
    }
?>