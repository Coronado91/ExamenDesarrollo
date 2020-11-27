<?php 
    class funcion{
        function __construct(){}
         public function limpiar($datos)
        {
         $datos = trim($datos); //eliminamos espacios
         $datos = stripslashes($datos); //quitamos barras
         $datos = htmlspecialchars($datos); //convertimos caracteres especiales html
         $datos = str_ireplace("<script>", "", $datos);
         $datos = str_ireplace("</script>", "", $datos);
         $datos = str_ireplace("<script src", "", $datos);
         $datos = str_ireplace("<script type=", "", $datos);
         $datos = str_ireplace("SELECT * FROM", "", $datos);
         $datos = str_ireplace("DELETE FROM", "", $datos);
         $datos = str_ireplace("INSERT INTO", "", $datos);
         $datos = str_ireplace("--", "", $datos);
         $datos = str_ireplace("^", "", $datos);
         $datos = str_ireplace("[", "", $datos);
         $datos = str_ireplace("]", "", $datos);
         $datos = str_ireplace("==", "", $datos);
         // $datos = str_ireplace(";", "", $datos);
         return $datos;
        }
         public function SLemail($data)
        {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         $data = filter_var($data, FILTER_SANITIZE_EMAIL);
         return $data;
        }
        //funcion obtener la fecha del servidor
        public function obtfecha()
        {
        date_default_timezone_set('America/Guatemala');
        $date = date('Y-m-d H:i:s');
        return $date;
        //$date = date('Y/m/d H:i:s');
        }
    }
?>