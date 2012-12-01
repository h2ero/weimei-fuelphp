<?php
return array(
    	'avatar/(\d+)'=>APP_NAME.'/avatar/content/$1',
	'(.+)/(.*)'=>APP_NAME.'/$1/$2',
	'(.+)'=>APP_NAME.'/$1',
	'_root_'  => APP_NAME.'/index',  // The default route
	'_404_'   => APP_NAME.'/error/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);