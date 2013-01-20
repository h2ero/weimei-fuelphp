<?php

namespace app1;

/**
 * @name tag 
 * @package app1
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
class Controller_Tag extends Controller_Template {

    public function before() {
        parent::before();
    }
    public function action_index() {

    }
    public function action_search($tag_name){
        $tag_name = urldecode($tag_name);
        $title=$this->get_title($tag_name,'tag');
        $this->template->title = $title;
        $this->template->content=\View::forge('content/tag/search');
        $this->template->content->title = $title; 
        $this->template->content->result=Model_tag::search_tag($tag_name);
    }
    public function action_add_tag(){

    }

}

?>
