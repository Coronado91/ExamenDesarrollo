<?php 
    class View{
        function __construct(){

        }
        function render($nombre){
            require_once VIEWS.DFT."header.php";
            require 'views/'.$nombre.'.php';
            require_once VIEWS.DFT."footer.php";
        }
    }
?>