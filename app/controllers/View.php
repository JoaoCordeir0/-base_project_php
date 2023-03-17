<?php 

namespace App\controllers {
    
    class View 
    {
        public static function getContentView($view)
        {
            $file = './app/views/' . $view . '.html';      
                    
            return file_exists($file) ? file_get_contents($file) : '';
        }

        public static function render($view, $vars = []){                                    

            $contentView = self::getContentView($view);            

            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';
            }, $keys);

            return str_replace($keys, array_values($vars), $contentView);
        }
    }
}

?>