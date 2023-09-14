<?php
    namespace core;
    class Router{
        protected $routes = [];

        public function add($uri, $method, $controller){
            $this->routes[] = compact('uri','method','controller');
        }

        public function route($uri, $method){
            
            foreach($this->routes as $route){
                if($route['uri'] === $uri && $route['method'] === $method){
                    // dd($route);
                    return require $route['controller'];
                }
            };
            http_response_code(404);

            echo "Sorry Page Not Found.";
            die();
        }
    };
    
 



    // router using if-else

    // if($uri === '/'){
    //     require "controllers/index.php";
    // }else if($uri === '/about'){
    //     require "controllers/about.php";
    // }else if($uri === '/contact'){
    //     require "controllers/contact.php";
    // }

    //router using mapping array (associative array)

    //2 more simple things can be added to look it more good 
    //create a function for all if-else block & abort function with 404 file 
    // $routes = [
    //     '/' => basePath("controllers/index.php"),
    //     '/about' => basepath("controllers/about.php"),
    //     '/notes' => basePath("controllers/notes/index.php"),
    //     '/contact' => basePath("controllers/contact.php"),
    //     '/note' =>basePath("controllers/notes/show.php"),
    //     '/notes/create' => basePath("controllers/notes/create.php")
    // ];

    // if(array_key_exists($uri, $routes)){
    //     require $routes[$uri];
    // }else{
    //     http_response_code(404);

    //     echo "Sorry Page Not Found.";
    //     die();
    // }
?>