<?php 
namespace app1;
use Fuel\Core\Config;

use Fuel\Core\Asset;

class Controller_Template extends \Controller_Template{
	public $template='template/default';
	public function before(){
		parent::before();
 		$this->template->header=\View::forge('template/header');
		$this->template->footer=\View::forge('template/footer');
		$site_config=Config::load('site');
		$this->template->css=$site_config['css'];
		$this->template->js=$site_config['js'];
	}
	public function action_index(){
	}
	
}


