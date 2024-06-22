<?php

Class Database {
	// public function db_connect() {
    //     try{
    //         $string = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';';
    //         return $db = mysqli_connect($string,DB_USER, DB_PASS);
            
    //     }
    //     catch(PDOException $e) {
    //         die($e->getMessage());
    //     }        
    // }
    public function db_connect() {
        try {
            $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$db) {
                throw new Exception('Connection failed: '. mysqli_connect_error());
            }
            return $db;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // public function query($str) {
    //     $db = $this->db_connect();
    //     $result = mysqli_query($db, $str);
    //     $final = mysqli_fetch_assoc($result);
    //     return $final;
    // }
    public function query($str) {
        $db = $this->db_connect();
        if (!$db) {
            throw new Exception('Database connection failed');
        }

        $result = mysqli_query($db, $str);

        if (!$result) {
            throw new Exception('Query failed: '. mysqli_error($db));
        }

        $final = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $final[] = $row;
        }
        mysqli_free_result($result);

        return $final;
    }
    // public function read($query,$data = []) {
    //     $DB  = $this->db_connect();
    //     $stm = $DB->prepare($query);
    
    //     if(count($data) > 0){
    //         $check = $stm->execute($data);
    //     }else{
    //         $stm = $DB->query($query);
    //         $check = 0;
    //         if($stm){
    //             $check = 1;
    //         }
    //     }
    
    //     if($check) {
    //         return $stm->fetchAll(PDO::FETCH_OBJ);
    //     }
    
    //     return false;
    // }
    public function write($sql) {
        $db = $this->db_connect();
        if ($db instanceof mysqli) {
            if ($db->query($sql) === TRUE) {
                return true;
            } else {
                return "Error: " . $sql . "<br>" . $db->error;
            }
        } else {
            return "Error: Invalid database connection";
        }
    }
    // public function write($query,$data = []) {
    //     $DB  = $this->db_connect();
    //     $stm = $DB->prepare($query);
    
    //     if(count($data) > 0){
    //         $check = $stm->execute($data);
    //     }else{
    //         $stm = $DB->query($query);
    //         $check = 0;
    //         if($stm){
    //             $check = 1;
    //         }
    //     }
    
    //     if($check){
    //         return true;
    //     }
    //     return false;
    // }
}


