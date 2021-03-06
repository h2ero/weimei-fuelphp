<?php
namespace app1;

class Controller_index extends Controller_Template
{

    public function before() 
    {
        parent::before();
    }
    public function action_index()
    {

        //link
        $site_config=\Config::load('site',false,true);
        $links=\DB::select('name','link')
            ->from('link')
            ->where('domain_id','=',$site_config['domain_id'])
            ->order_by('id')
            ->execute()
            ->as_array();
        $this->template->nav_bar=\View::forge('content/index/nav-bar');
        $this->template->slogan=\View::forge('content/index/slogan');
        $this->template->pagelist=\View::forge('content/index/pagelist');
        $this->template->link=\View::forge('content/index/link');
        $this->template->link->links=$links;
    }
}
