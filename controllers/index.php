<?php
    Class Index extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->render('index/index');
        }
    }
?>