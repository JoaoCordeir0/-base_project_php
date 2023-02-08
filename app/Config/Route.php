<?php

namespace App\Config {

    class Route
    {

        public static function getRoute()
        {
            /**
             * Rota para rodar o projeto local e em produção->
             * 
             * @return route
             */

            $route = "http://localhost:8083/base_project_php/";                                            

            return $route;
        }
    }
}
    