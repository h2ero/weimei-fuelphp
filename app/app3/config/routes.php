<?php
return array(
	'_root_'  => APP_NAME.'/welcome/index',  // The default route
	'(.*)/(.*)'=> APP_NAME.'/$1/$2',
	'(.*)'=> APP_NAME.'/$1',
	'_404_'   => APP_NAME.'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);