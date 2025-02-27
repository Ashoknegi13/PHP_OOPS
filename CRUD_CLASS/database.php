<?php
class database{
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "test";

        private $mysqli = "";
        private $conn = false;
        private $result = array();

    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host ,$this->db_user ,$this->db_pass ,$this->db_name );
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result ,$this->mysqli->connect_error);
                return false;
            }
        }else{
            return true;
        }
    }

    // insert into database
    public function insert($table , $params=array()){
        if($this->tableExists($table)){
       

            $columnInTable = implode(', ', array_keys($params));
            $dataInTable = implode("', '",$params); 
           
            $sql = "INSERT INTO $table ($columnInTable) VALUES ('$dataInTable') ";
            if($this->mysqli->query($sql)){
                array_push($this->result , $this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result , $this->mysqli_error);
                return false;
            }
        }
    }

    // update the data
    public function update($table , $params=array() , $where = null){
        if($this->tableExists($table)){
            print_r($params);

            $argu = array();
            foreach($params as $key => $value){
                $argu[] = "$key = '$value' ";
            }

            $sql = "UPDATE $table SET " . implode(", ",$argu);
            if($where != null){
                $sql .= "where $where ";
            }

            if($this->mysqli->query($sql)){
                array_push($this->result , $this->mysqli->affected_rows);
                return true;
            }else{
              array_push($this->result , $this->mysqli->error);
               return true;
            }
        }
    }

    // detete the data
    public function delete($table  , $where = null){
        if($this->tableExists($table)){
            $sql = "DELETE FROM $table";
            if($where != null){
                $sql .= " WHERE $where";
            }
            echo $sql;
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }
    }

    // fetch the data from database
    public function select($table, $row="*", $join = null ,$where= null , $order= null ,$limit =null){
            if($this->tableExists($table)){
                $sql =  "SELECT $row FROM $table ";
                if($join != null){
                    $sql .=" JOIN $join";
                }
                if($where != null){
                    $sql .=" WHERE $where";
                }
                if($order != null){
                    $sql .=" ORDER BY $order";
                }
                if($limit != null){
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page   = 1;
                    }

                    $start = ($page - 1)e $limit;
                 $sql .=" LIMIT $start,$limit ";
                }

               
                $query = $this->mysqli->query($sql);
                if($query){
                    $this->result = $query->fetch_all(MYSQLI_ASSOC);
                    return true; 
                }else{
                    array_push($this->result,$this->mysqli->error);
                    return false;
                }
            }else{
                return false;
            }      
    }


      // code for paginations
        public function pagination($table, $join = null ,$where= null , $limit =null){
                if($this->tableExists($table)){
                            ($limit != null){
                                $sql = "SELECT COUNT(*) FROM $table";
                                if($join  != null){
                                    $sql .= " JOIN $join";
                                }
                                if($where  != null){
                                    $sql .= " WHERE $where";
                                }

                                $query = $this->mysqli->query($sql);
                                $total_records = $query->fetch_array();   // fetch all data 
                                $total_records = $total_records[0];  // return total data : 9

                                $total_pages = ceil($total_records / $limit );

                                 $url = basename($_SERVER['PHP_SELF']);

                                 if(isset($_GET['page'])){
                                    $page = $_GET['page'];
                                 }else{
                                    $page = 1;
                                 }

                                 $output = "<ul >";

                                 if($page > 1 ){
                                    $output .= "<a href=$url?page=".($page-1).">pre<a>  ";
                                 }

                                 if($total_records >  $limit){
                                    for($i = 1; $i<= $total_pages ;$i++){
                                        if($page == $i){
                                            $cls = "class='active'";
                                        }else{
                                            $cls = "";
                                        }
                                        $output .="   <a style='text-decoration:none;' $cls href='$url?page=$i'>$i";
                                    }
                                 }

                                 if($total_pages > $page ){
                                    $output .= "  <a href=$url?page=".($page+1).">next<a>";
                                 }

                                 
            
                                 $output .= "</ul>";
                                 echo $output;



                        }else{
                            return false;
                        }
                }else {     
                    return false;
                }
            }

    public function sql($sql){
        $query = $this->mysqli->query($sql);
        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            array_push($this->result,$this->mysqli->error);
            return false;
        }
    }

    private function tableExists($table){
      $sql = "SHOW TABLES FROM $this->db_name LIKE '$table' ";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true ;
            }else{
                array_push($this->result , $table ."does't exists in database ");
                return false;
            }
        }else{
            array_push($this->result , "query failed ");
                return false;
        }
    }


    public function getMethod(){
        $var  = $this->result;
        $this->result = array();
        return $var;
    }



    // close the connection
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

}

?>