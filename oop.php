<?php
class Database{
private $db_host = "localhost";
private $db_user = "root";
private $db_pass  = "";
private  $db_name = "new";

private $mysqli = "";
private $result = array();
private $conn = false;

public function __consturct(){
    if(!$this->conn){
        $this->mysqli = new mysqli($this->db_host.$this->db_user,$this->db_pass,$this->db_name);
        $this->conn = true;
        if($this->mysqli->connect_error){
            array_push($this->result, $this->mysqli->conncet_error);
            return false;
        }
     
    }else{
        return true;
    }
}

public function insert($table, $params=array()){
    if($this->tableExits($table)){
        $table_Colums = implode(', ', array_keys($params));
        $table_value = implode("', ',", $params);
    print_r($params);
       echo  $sql = "INSERT INTO `student`(`$table_Colums`) VALUES ('$table_value')";
      if($this->mysqli->query($sql)){
          array_push($this->result,$this->mysqli->insert_id);
          return true;

      }else{
          array_push($this->result,$this->mysqli->error);
          return false;
      }
    }

}

private function tableExits($table){
echo $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
$tableinDb = $this->mysqli->query($sql);
if($table)
if($tableinDb->num_rows == 1){
    return true;
}else{
    array_push($this->result,$table."Table Doest Not Exits");
return false;
}

}
public function getresult(){
    $val = $this->result;
    $this->result = array();
    return $val;
}

}
?>