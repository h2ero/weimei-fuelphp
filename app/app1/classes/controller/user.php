<?php

namespace app1;

/**
 * @name user
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_User extends Controller_Template {

    public function before() {
        parent::before();
    }

    public function action_reg(){
        $this->template->content=\View::forge('content/user/reg');
    }

    public function action_login(){
        $referrer=\Input::get('referrer')?\Input::get('referrer'):\Input::referrer();
        $this->template->content=\View::forge('content/user/login');
        $this->template->content->referrer=$referrer;
    }
    public function action_lost_pwd(){
        $this->template->content=\View::forge('content/user/lost_pwd');

    }

}

?>
