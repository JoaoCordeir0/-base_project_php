<?php

namespace App\controllers 
{        
    class RouteController
    {
        public function run(string $requestUri)
        {
            $route = substr($requestUri, 1);
    
            $route === '' ? $this->home() : $this->$route();            
        }

        protected function home()
        {
            $home = new HomeController;
            $home->pageHome('HomeView');            
        }
       
        protected function contact()
        {
            $contact = new ContactController;
            $contact->pageContact('ContactView');            
        }

        protected function about()
        {            
            $about = new ContentsController;
            $about->pageContents(1);            
        }
        
        protected function editorialBoard()
        {            
            $editorialBoard = new ContentsController;
            $editorialBoard->pageContents(2);            
        }
        
        public function __call($name, $arguments)
        {
            http_response_code(404);          
            print ViewController::render('notfound');
        }
    }
}

?>