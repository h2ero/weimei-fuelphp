<?php
return array(

    'mingxing/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'feizhuliu/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'katong/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'heibai/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'shanggan/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'dongtai/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'qita/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'qinglv/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'shantu/(.*)qq'=>APP_NAME.'/avatar/content/$1',
    'nansheng/(.*)qq'=>APP_NAME.'/avatar/content/$1',

    'quntouxiang/qq(.*)'=>APP_NAME.'/avatar/content/$1',
    'fabiao/qq(.*)'=>APP_NAME.'/avatar/content/$1',

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

    '_root_'  => APP_NAME.'/index',  // The default route
    '_404_'   => APP_NAME.'/error/404',    // The main 404 route
    
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
