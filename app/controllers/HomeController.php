<?php

namespace App\controllers 
{    
    class HomeController
    {
        public function pageHome($namePage)
        {   
            $arrayMap = [
                // variáveis da página home                                
            ];  

            $arrayMap = array_merge($arrayMap, PartialsController::partials());

            print ViewController::render($namePage, $arrayMap);
        }        
    }
}

?>