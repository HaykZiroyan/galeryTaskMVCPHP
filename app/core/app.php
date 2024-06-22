<?php
class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->splitURL();

        $this->controller = $this->getController($url);
        $this->method = $this->getMethod($url);
        $this->params = $this->getParams($url);

        $this->dispatch();
    }

    private function splitURL()
    {
        $url = $_GET['url'] ?? 'home';
        return explode('/', trim($url, '/'));
    }

    private function getController(array $url)
    {
        $controller = strtolower($url[0] ?? 'home');
        if (file_exists("../app/controllers/{$controller}.php")) {
            return $controller;
        }
        return 'home';
    }

    private function getMethod(array $url)
    {
        $method = $url[1] ?? 'index';
        if (method_exists($this->controller, $method)) {
            return $method;
        }
        return 'index';
    }

    private function getParams(array $url)
    {
        return array_values(array_slice($url, 2));
    }

    private function dispatch()
    {
        require "../app/controllers/{$this->controller}.php";
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
?>
<!-- class App {
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    public function __construct() {
        $url = $this->splitURL();
        
        if(file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method],$this->params);
    }
    private function splitURL() {
        $url = isset($_GET['url']) ? $url = $_GET['url']: "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
} --> 