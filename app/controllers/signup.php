<?php 
class Signup extends Controller{
    public function __construct() {
        if($_POST) {
            $this->register();
        }
    }
    function index() {
        $this->view("register");
    }
    function register(){
        if($_POST) {
            $this->model("users")->register($_POST);        
        }
        
        // $errors = [];
        // if(empty($username) || empty($password) || empty($email) || empty($confirm_password)) {
        //     $errors[] = "Please fill all fields";
        // }
        // if(strlen($password) < 8){
        //     $errors[] = "Password must be at least 8 characters";
        // }
        // if($password != $confirm_password){
        //     $errors[] = "Passwords do not match";
        // }
        // if(count($errors) > 0){
        //     $this->view("register", ["errors" => $errors]);
        // } else {
        //     $user = new User();
        //     $user->username = $username;
        //     $user->password = password_hash($password, PASSWORD_DEFAULT);
        //     $user->email = $email;
        //     $user->save();
        //     header("Location: /login");
        // }

    }

}