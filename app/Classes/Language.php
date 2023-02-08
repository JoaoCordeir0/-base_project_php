<?php

namespace App\Classes {

    class Language
    {
        /**
         * Seleciona o idioma do sistema
         */
        public static function getLanguage()
        {
            /**             
             * Utiliza-se o _COOKIE para a aplicação visível ao usuário e a _SESSION para processar em segundo plano
             */                                 
            if (isset($_COOKIE['Language']) || isset($_SESSION['Language'])) 
            {
                if ($_COOKIE['Language'] == 'pt' || $_SESSION['Language'] == 'pt') 
                {
                    return "pt-br";
                } 
                else if ($_COOKIE['Language'] == 'en' || $_SESSION['Language'] == 'en') 
                {
                    return "en-us";
                }
            } 
            else 
            {
                return "pt-br";
            }
        }
    }
}
