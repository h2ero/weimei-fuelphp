<?php

namespace admin;

/**
 * @name user
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_link extends Controller_Template {

    public function before() {
        parent::before();
    }
    //list all
    public function action_index(){
        $this->template->content = \View::forge('content/link/index');
        $this->template->content->links = Model_Link::get_link();
    }
}
