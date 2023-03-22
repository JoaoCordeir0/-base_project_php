<?php

namespace App\controllers 
{
    use App\models\ContentsModel;

    class ContentsController 
    {
        public function pageContents($idContent)
        {   
            $content = new ContentsModel;            
            $result = $content->getContent($idContent);

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