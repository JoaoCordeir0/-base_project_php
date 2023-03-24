<?php

namespace App\controllers 
{    
    class ContactController
    {
        /**
         * Função responsável por renderizar a página de contato
         * 
         * @return RenderViewContact
         */
        public function pageContact($namePage)
        {   
            $arrayMap = [
                // variáveis da página contact
            ];  

            $arrayMap = array_merge($arrayMap, PartialsController::partials());

            print ViewController::render($namePage, $arrayMap);
        }        
    }
}

?>