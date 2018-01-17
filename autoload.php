<?php
spl_autoload_register('autoload');

function autoload ($classToLoad){
    
    require $classToLoad. '.class.php';
    
    
}



?>