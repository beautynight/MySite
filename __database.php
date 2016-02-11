<?php

class Database {
	private $db_host = "localhost";
	private $db_user = "test";
	private $db_pass = "";
	private $db_name = "test";
	
	var $con = false;
	var $result = array();
    var $myQuery = "";
    var $nums = "";
    function __construct() {
        if(!$this->con){
            $myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
            if($myconn){
                $select_db = @mysql_select_db($this->db_name, $myconn);
                if($select_db){
                    mysql_query("SET character_set_results='utf8'");
                    mysql_query("SET character_set_client='utf8'");
                    mysql_query("SET character_set_connection='utf8'"); 
                    mysql_query("SET AUTOCOMMIT=0"); 				
                    $this->con = true;
                    return true;
                }else{
                    array_push($this->result, mysql_error());
                    return false;
                }  
            }else{
                array_push($this->result, mysql_error());
                return false;
            }
        }else{
            return true; // Connection has already been made return TRUE 
        }
    }
	
	public function query($sql) {
		$this->result = array();
		$this->nums = 0;
		$query = @mysql_query($sql);
        //$this->myQuery = $sql;
		if($query){
			$this->nums = mysql_num_rows($query);
			for($i = 0; $i < $this->nums; $i++){
				$r = mysql_fetch_array($query);
				$key = array_keys($r);
				$count = count($key);
				for($x = 0; $x < $count; $x++){
					if(!is_int($key[$x])){
						$this->result[$i][$key[$x]] = $r[$key[$x]];
					}
				}
			}
		}
		return ($this->result);
	}
	
	public function select($table, $rows = '*', $where = null, $order = null, $limit = null) {
		$q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null){
        	$q .= ' WHERE '.$where;
		}
        if($order != null){
            $q .= ' ORDER BY '.$order;
		}
        if($limit != null){
            $q .= ' LIMIT '.$limit;
        }
        return ($this->query($q));
    }
	
    public function insert($table, $params=array()){
		@mysql_query('START TRANSACTION');
    	$sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
		//$this->myQuery = $sql;
		if(@mysql_query($sql)){					
			@mysql_query('COMMIT');
			return mysql_insert_id();
		}
		else{		
			@mysql_query('ROLLBACK');
			array_push($this->result, mysql_error());
			return -1;
		}
    }
	
	// Function to update row in database
    public function update($table, $params=array(), $where){
		@mysql_query('START TRANSACTION');
		$args=array();
		foreach($params as $field=>$value) {
			$args[]=$field.'="'.$value.'"';
		}
		$sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;
		//$this->myQuery = $sql;
		if(@mysql_query($sql)){			
			@mysql_query('COMMIT');
			return mysql_affected_rows();
		}else{
			@mysql_query('ROLLBACK');
			array_push($this->result, mysql_error());
			return -1;
		}
    }
}

$db = new Database();

?>