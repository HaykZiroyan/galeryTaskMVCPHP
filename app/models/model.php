<?php 
class Model {
    // private $db;
    // function __construct(){
    //     $this->db = new Database;
    // }
    // // function get_data(){
    // //     $this->db->query("SELECT * FROM users");
    // //     return $this->db->resultSet();
    // // }
    private $db;

    /**
     * Model constructor
     */
    function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Get data from the database
     *
     * @return mixed
     */
    public function getUsers() {
        // var_dump($this);
       return $this->db->query("SELECT * FROM users");
    }
    public function insertData($data = []) {
        if (empty($data)) {
            throw new InvalidArgumentException('No data provided');
        }
        $sql = "INSERT INTO users (name, email, password)
        VALUES ('John', 'john@example.com', '123456')";
        $this->db->write($sql);
    }
}