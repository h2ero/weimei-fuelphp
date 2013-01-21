<?php
return array(
    'avatar/submit_upload'=>APP_NAME.'/avatar/submit_upload',
    'avatar/upload'=>APP_NAME.'/avatar/upload',
    'avatar/do_upload'=>APP_NAME.'/avatar/do_upload',
    'avatar/list/(.*)'=>APP_NAME.'/avatar/list/$1',
    'avatar/(.*)'=>APP_NAME.'/avatar/content/$1',
    'avatar'=>APP_NAME.'/avatar/list/1',
    //pic
    'pic/list/(.*)'=>APP_NAME.'/pic/list/$1',
    'pic/(.*)'=>APP_NAME.'/pic/content/$1',
    'pic'=>APP_NAME.'/pic/list/1',
    //article
    'article/list/(.*)'=>APP_NAME.'/article/list/$1',
    'article/(.*)'=>APP_NAME.'/article/content/$1',
    'article'=>APP_NAME.'/article/list/1',
    //tag
    'tag/(.*)'=>APP_NAME.'/tag/search/$1',
    //user
    'user/(.*)'=>APP_NAME.'/user/$1',

    '_root_'  => APP_NAME.'/index',  // The default route
    '_404_'   => APP_NAME.'/error/404',    // The main 404 route
    
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
