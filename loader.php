<?php
define('DEBUG',false);

define('LIB',__DIR__.'/'/*.'/lib/'*/);
spl_autoload_register(function($class){
	$location = LIB.str_replace('\\','/',strtolower($class).'.php');
	//if (DEBUG) echo 'Loading '.$class.' from '.$location.PHP_EOL;
	require($location);
});
?>