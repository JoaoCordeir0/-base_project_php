<?php

namespace App\models 
{
    use App\core\DataBase;
    use Exception;

    class ContentsModel
    {
        public function getContent($id)         
        {            
            try
            {
                $db = new DataBase;
            
                $getContent = $db->prepare("SELECT * FROM texts WHERE id = ?");
                $getContent->bindParam(1, $id, \PDO::PARAM_INT);
                $getContent->execute();
                           
                if ($result = $getContent->fetch())
                {
                    switch($_COOKIE['Language'])
                    {
                        case 'pt': return [$result['title_pt'], $result['body_pt']]; break;
                        case 'en': return [$result['title_en'], $result['body_en']]; break;
                    }                    
                }
                return [null, 'Not content for view'];        
            }
            catch (Exception $e)
            {
                print('Erro >_ ' . $e);
            }             
        }
    }
}

?>
