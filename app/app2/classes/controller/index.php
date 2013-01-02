<?php
namespace app2;

class Controller_index extends \app1\Controller_index
{

    public function before() 
    {
        parent::before();
    }
    public function action_index()
    {
        //$this->template->nav_bar=\View::forge('content/index/nav-bar');
        $avatar=Model_Avatar::get_list(0, 24);
        $this->template->content=\View::forge('content/avatar/list');
        $this->template->content->avatar= $avatar;
        $this->template->pagelist=\View::forge('content/index/pagelist');
        $this->template->link=\View::forge('content/index/link');

        //link
        $site_config=\Config::load('site',false,true);
        $links=\DB::select('name','link')
            ->from('link')
            ->where('domain_id','=',$site_config['domain_id'])
            ->order_by('id')
            ->execute()
            ->as_array();

        $this->template->link=\View::forge('content/index/link');
        $this->template->link->links=$links;
        
    }
}
