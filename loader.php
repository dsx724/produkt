<?php
//define('DEBUG',false);

spl_autoload_register(function($class){
	$location = __DIR__.'/'.str_replace('\\','/',strtolower($class).'.php');
	//if (DEBUG) echo 'Loading '.$class.' from '.$location.PHP_EOL;
	require($location);
});
?>