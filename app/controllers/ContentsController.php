<?php

namespace App\controllers 
{
    use App\models\ContentsModel;

    class ContentsController 
    {
        /**
         * Função responsável por renderizar as páginas dinâmicas de conteúdo.
         * 
         * @return Render
         */
        public function pageContents($idContent)
        {           
            $result = (new ContentsModel)->getContent($idContent);

            $arrayMap = [
                'title' => $result[0],
                'body' => $result[1],
            ];  

            $arrayMap = array_merge($arrayMap, PartialsController::partials());

            print ViewController::render('ContentsView', $arrayMap);
        }               
    }
}

?>