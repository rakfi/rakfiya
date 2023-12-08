<?php
include("connection.php");
class DataOperation extends Database{
    public function insert_record($table, $values){
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",",array_keys($values)).") VALUES ";
        $sql .= "('".implode("','",array_values($values))."')";

        //echo $sql;

       $query = $this->conn->query($sql);

       if($query){
        return true;
       }else{
        return false;
       }
    
    }
}


?>