<?php
return array(

    'weimei/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'mingxing/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'feizhuliu/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'katong/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'heibai/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'shanggan/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'dongtai/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'qita/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'qinglv/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'shantu/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'nansheng/(\d+)qq'=>APP_NAME.'/avatar/content/$1',
    'jiemei/(\d+)qq'=>APP_NAME.'/avatar/content/$1',

    'quntouxiang/qq(\d+)'=>APP_NAME.'/avatar/content/$1',
    'fabiao/qq(\d+)'=>APP_NAME.'/avatar/content/$1',

    //avatar
    'avatar'=>APP_NAME.'/avatar/list/1',
    'avatar/(.*)'=>APP_NAME.'/avatar/content/$1',
    '(.*)/alist'=>APP_NAME.'/avatar/alist/1/$1',
    '(.*)/alist/(\d+)'=>APP_NAME.'/avatar/alist/$2/$1',

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

    //default
    '_root_'  => APP_NAME.'/index',  // The default route
    '_404_'   => APP_NAME.'/error/404',    // The main 404 route
    
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
