<?php

namespace App\routes 
{   
    use App\controllers\{
        ViewController,
        HomeController,
        ContactController,
        ContentsController
    };
    use Exception;

    class Routes
    {
        /**
         * Controller das rotas.
         * 
         * Realiza o tratamento e execução das rotas
         * 
         * @return RoutesExecution
         */
        public function run(string $requestUri)
        {
            try
            {
                $route = explode("?", substr($requestUri, 1))[0];
            }
            catch (Exception) 
            {
                $route = substr($requestUri, 1);
            }
                        
            $route === '' ? $this->home() : $this->$route();            
        }


        /**
         * Rotas do sistema
         * 
         * @return View
         */
        protected function home()
        {            
            (new HomeController)->pageHome('HomeView');            
        }
       
        protected function contact()
        {            
            (new ContactController)->pageContact('ContactView');            
        }

        protected function about()
        {                        
            (new ContentsController)->pageContents(1); // Id do conteúdo que está no banco           
        }


        /**
         * Rotas de API
         * 
         * @return Requisition
         */
        protected function apiPOST()
        {
            print_r($_POST);
        }

        protected function apiGET()
        {
            print_r($_GET);
        }


        /**
         * Rotas de tratamento de exceção
         * 
         * @return Exception
         */        
        public function __call($name, $arguments)
        {
            http_response_code(404);          
            print ViewController::render('notfound');
        }
    }
}

?>