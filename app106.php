<?php
//6. PHP closure
$anony = function() {
    return 'Lambda';
};
//Closure
echo get_class($anony). "<br />";
echo gettype($anony). "<br />";