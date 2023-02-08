<?php

$content_lang = array('key' => 'value');

if (isset($_POST['getTranslation']))
{
    echo json_encode($content_lang);
}

?>