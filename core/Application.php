<?php


namespace app\core;

class Application {
    
    public Router $router; // Only Router can be assigned to $router
    public Request $request;

    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }   

    public function run() {
        echo $this->router->resolve();
    }
}