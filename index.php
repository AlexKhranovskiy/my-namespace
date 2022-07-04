<?php 

function __autoload($classname)
{
     require_once(__DIR__ . '\\' . $classname . '.php');   
}


require_once(__DIR__ . '\Constants\constant.php');
require_once(__DIR__ . '\Functions\function.php');

$user = new \Classes\User(
        'alex@ukr.net',
        'qwerty',
        'Alex',
        'Alex'
    );
    echo $user->first_name, '<br />';
    echo 'Version: ', \Constants\VERSION, '<br />';
    echo 'dump: ', \Functions\debug($user);
