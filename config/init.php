<?php

require 'configure.php';


spl_autoload_register('myautoloader');
function myautoloader($className){
    require_once ('Controller/'.$className.'.php');
}