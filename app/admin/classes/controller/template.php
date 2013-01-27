<?php 
namespace admin;

class Controller_Template extends \Controller_Template{

    public $template = 'template/default';

    public function before(){
        parent::before();
        
        $this->template->header = \View::forge('template/header');
        $this->template->footer = \View::forge('template/footer');
        $this->template->side_bar = \View::forge('template/side_bar');
        $this->site_config = \Config::load('site');
        $site_config = $this->site_config;
        $this->template->css = $site_config['css'];
        $this->template->js = $site_config['js'];

        $this->template->vars = array(
            'color' => $site_config['theme']['color'], 
            'header_bgcolor' => $site_config['theme']['header_bgcolor'], 
        );
        
        //global variable they can use everywhere.
        $this->template->set_global('site_name', $site_config['site_name']);
        $this->template->set_global('domain_id', $site_config['domain_id']);

        $this->template->title = '';
        $this->template->site_title = $site_config['title'];
        $this->template->keywords = $site_config['keywords'];
        $this->template->description = $site_config['description'];


        $this->template->content = '';
    }
}


