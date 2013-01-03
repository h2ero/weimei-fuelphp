<?php 
namespace app1;

class Controller_Template extends \Controller_Template{

    public $template='template/default';

    public function before(){
        parent::before();
        
        $this->template->header=\View::forge('template/header');
        $this->template->footer=\View::forge('template/footer');
        $site_config=\Config::load('site');
        $this->template->css=$site_config['css'];
        $this->template->js=$site_config['js'];

        $this->template->vars=array(
            'color'=>$site_config['theme']['color'],
        );
        
        $this->template->footer->site_name=$site_config['site_name'];
        $this->template->title='';
        $this->template->site_title=$site_config['title'];
        $this->template->keywords=$site_config['keywords'];
        $this->template->description=$site_config['description'];

        $this->template->link='';
        $this->template->slogan='';
        $this->template->nav_bar='';
        $this->template->pagelist='';
        $this->template->content='';
        $this->template->pagination='';
    }
    public function action_index(){
    }
    
}


