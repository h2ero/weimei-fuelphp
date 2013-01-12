<?php 
namespace app1;

class Controller_Template extends \Controller_Template{

    public $template='template/default';

    public function before(){
        parent::before();
        
        $this->template->header=\View::forge('template/header');
        $this->template->footer=\View::forge('template/footer');
        $this->site_config=\Config::load('site');
        $site_config=$this->site_config;
        $this->template->css=$site_config['css'];
        $this->template->js=$site_config['js'];

        $this->template->vars=array(
            'color'=>$site_config['theme']['color'],
            'header_bgcolor'=>$site_config['theme']['header_bgcolor'],
        );
        
        //global variable they can use everywhere.
        $this->template->set_global('site_name',$site_config['site_name']);
        $this->template->set_global('domain_id',$site_config['domain_id']);

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
    public function get_title($title,$catalog){
        $site_config=$this->site_config;
        $title_rule=$site_config['title_rules'][$catalog]['title'];
        return str_replace('title',$title,$title_rule);
    }
    
}


