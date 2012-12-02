<?php
return array(
	'avatar/(.*)'=>APP_NAME.'/avatar/content/$1',
	'avatar'=>APP_NAME.'/avatar/list/0',
	'pic/list/(.*)'=>APP_NAME.'/pic/list/$1',
	'pic/(.*)'=>APP_NAME.'/pic/content/$1',
	'pic'=>APP_NAME.'/pic/list/0',
	'(.+)/(.*)'=>APP_NAME.'/$1/$2',
	'(.+)'=>APP_NAME.'/$1',
	'_root_'  => APP_NAME.'/index',  // The default route
	'_404_'   => APP_NAME.'/error/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);