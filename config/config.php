<?php
(isset($_SERVER['SERVER_NAME'])) ? define('ROOT', 'http://'.$_SERVER['SERVER_NAME'].'/leafphp') : '';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}