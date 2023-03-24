<?php

namespace App\controllers 
{    
    class HomeController
    {
        /**
         * Função responsável por renderizar a HomePage.
         * 
         * @return RenderViewHome
         */
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