<?php

namespace App\Classes {

    class View
    {

        public static function getContentView($path, $view)
        {
            $file = $path . $view . '.html';           
            return file_exists($file) ? file_get_contents($file) : '';
        }

        public static function getPath()
        {
            // Verifica se a renderização está sendo chamada da raiz do projeto ou da pasta Services
            if (strpos($_SERVER["REQUEST_URI"], 'Services') !== false || strpos($_SERVER["REQUEST_URI"], 'Requests') !== false)
            {
                return '../Views/';
            }            
            return 'Views/';            
        }

        public static function render($view, $vars = []){                        

            $contentView = self::getContentView(self::getPath(), $view);

            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';
            }, $keys);

            return str_replace($keys, array_values($vars), $contentView);
        }
    }
}
