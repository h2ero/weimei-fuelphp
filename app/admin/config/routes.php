<?php
return array(
    //'admin/(.*)'  => APP_NAME.'/admin/$1',  
    'admin/friend_link/(.*)'  => APP_NAME.'/link/$1',  
    'admin/friend_link'  => APP_NAME.'/link/index',  
    'admin/(.*)'  => APP_NAME.'/(.*)/index',  
    '_root_'  => APP_NAME.'/index',  // The default route
    '_404_'   => APP_NAME.'/error/404',    // The main 404 route
);
