<?php

namespace App\controllers 
{    
    use App\controllers\View;

    class Home 
    {
        public function pageHome($namePage)
        {
            print View::render($namePage);
        }        
    }
}

?>