<?php

namespace App\Classes {
    
    use DateTimeZone;
    use DateTime;

    class SystemLog
    {
        /**
         * GET datetime atual
         */
        public static function getDatetime()
        {
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $date = new DateTime('now', $timezone);
            
            return $date->format('d/m/Y H:i:s');            
        }

        /**
         * Função responsável por gravar os logs do sistema
         */        
        public static function writeLog($text)
        {                                        
            $fp = fopen("../log/system_log.txt", "a+");
            
            fwrite($fp, "\n\n" . SystemLog::getDatetime() . " - {" . $_SESSION['Client'] . "} - " . $text);
                
            fclose($fp);
        }
       
    }
}
