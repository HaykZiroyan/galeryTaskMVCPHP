<?php
class Users extends Model{
    // public function __construct(){
    //     parent::__construct();
    // }
    public function getAllUsers(){

        // return $this->getData();
    }
    public function register($data = []) {
        $users = $this->getUsers();
        $userExist = false;
        foreach ($users as $user) {
            if ($user['email'] == $data['email']) {
                $userExist = true;
                break;
                }
            }
            if (!$userExist) {
                $this->insertData($data);
                return true;
            } else {
                return false;
            }
                
    }

}