<?php
    class ApiModel extends Model{
        function __construct(){
            parent::__construct();
        }

        function getApiPersona(){
            return $resp = $this->select("*", " tb_api ",null,null);
        }
        function registrarpersona($persona){
                $value = " (id_persona, nombre, apellidos, dpi ) VALUES ( null, :Nombre, :Apellidos, :Dpi)";
                $data = $this->insert(" tb_api ", $persona, $value);
                if(is_bool($data)){
                    return 0;
                }else{
                    return $data;
                }
        }
        function eliminarpersona($id){
           $where = " WHERE id_persona = :id_persona";
            $resp = $this->delete( " tb_api ", $where, array('id_persona'=>$id));
            if(is_bool($resp)){
                echo "Datos Eliminados";
            }else{
                return $resp;
            }
        }
        function editpersona($data, $id_persona){
            $where = " WHERE id_persona = :id_persona ";
            $param =  array(':id_persona' => $id_persona);
            $resp = $this->select("*", ' tb_api ', $where, $param);
           if(is_array($resp)){
               $value ="nombre = :Nombre , 
                        apellidos = :Apellidos, 
                        dpi = :Dpi ";
                $where2 = " WHERE id_persona = ".$id_persona;
                $data = $this->update(" tb_api ", $data, $value, $where2);
                if(is_bool($data)){
                    echo "Modificacion Exitoso";
                }else{
                    return $data;
                }
           }
        }
    }
?>