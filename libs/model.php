<?php 

    class Model{
        function __construct(){
            $this->db = new Database();
        }
        /*fuciones de consultas 
			$attr = columnas a consultas
			$table = nombre de  la tabla
			$where = la clausula
			$param = pasar parametros;
		*/
        function select($attr, $table, $where, $param){
            try{
                $where = $where ?? "";
                $statm = "SELECT".$attr." FROM ".$table.$where;
                $sel = $this->db->connect()->prepare($statm);
                $sel->execute($param);
                $resp = $sel->fetchAll(PDO::FETCH_ASSOC);
                return array("consulta"=>$resp);
            }catch(PDOException $e){
                return $e->getMessage();
            }
            $db = null;
        }

        function insert($table, $param, $value){
            try{
                $statm = "INSERT INTO ".$table.$value;
                $ins = $this->db->connect()->prepare($statm);
                $ins->execute((array)$param);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
            $db = null;
        }
        function update($table, $param, $value, $where){
            try{
                $statm = " UPDATE ".$table. " SET ".$value.$where;
                $upd = $this->db->connect()->prepare($statm);
                $upd->execute((array)$param);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
            $pdo = null;
        }
        function delete($table, $where, $param){
            try{
                $statm = "DELETE FROM ".$table.$where;
                $del = $this->db->connect()->prepare($statm);
                $del->execute($param);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
            $pdo = null;
        }
    }
?>