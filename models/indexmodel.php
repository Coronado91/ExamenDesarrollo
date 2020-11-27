<?php
    class IndexModel extends Model{

        function __construct(){
            parent::__construct();
        }

        function listarproducto(){
            return $resp = $this->select("*", " tb_venta ",null,null);
        }
    }
?>