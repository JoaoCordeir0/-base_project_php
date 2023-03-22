<?php

namespace App\controllers 
{    
    class PartialsController
    {
        public static function partials()
        {   
            $arrayMap = [
                // variáveis das partials
                'journalName' => 'Critical Care Science'                          
            ];  

            return [
                'head' => ViewController::render('partials/HeadPartials', $arrayMap),
                'header' => ViewController::render('partials/HeaderPartials', $arrayMap),
                'footer' => ViewController::render('partials/FooterPartials', $arrayMap)
            ];               
        }        
    }
}

?>