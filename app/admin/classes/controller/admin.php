<?php

namespace admin;

/**
 * @name user
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_Admin extends Controller_Template {

    public function before() {
        parent::before();
    }
    public function action_index(){
        echo "h2ero";
    }

}
