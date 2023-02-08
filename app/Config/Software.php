<?php

namespace App\Config {

    class Software
    {
        /**
         * Função responsável por retornar a versão do software e suas mudanças
         * 
         * Siglas: 
         * 
         * V < 1 = Beta
         * V >= 1 = Software estável e implantado
         * 
         * @return string
         */
        public static function getVersion()
        {
            /**
             * Versão no qual nasce o sistema.
             */
            $v = "0.1";           

            return $v;
        }
    }
}
    