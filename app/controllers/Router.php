<?php

namespace App\controllers 
{    
    use App\controllers\Home;

    class Router 
    {
        public function run(string $requestUri)
        {
            $route = substr($requestUri, 1);
    
            if ($route === '') {
                $this->home();                
            } else {
                $this->$route();
            }
        }

        protected function home()
        {
            $home = new Home;
            $home->pageHome('home');            
        }

        public function __call($name, $arguments)
        {
            http_response_code(404);
            print View::render('notfound');
        }
    }
}

?>