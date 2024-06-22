<?php
class Controller {
    public function view($view, $data = []) {
        if (file_exists("../app/views/" . $view . ".php")) {
            require_once "../app/views/" . $view . ".php";
        }
    }
    public function model($check){
        if(file_exists("../app/models/" . $check . ".php")){
            require_once "../app/models/" . $check . ".php";
            return new $check();
        }
    }

    // public function loadModel($model) {

	// 	if(file_exists("../app/models/". strtolower($model) . ".php"))
	// 	{

	// 		include "../app/models/". strtolower($model). ".php";
	// 		return $model = new $model();
	// 	}
	// }
    
}