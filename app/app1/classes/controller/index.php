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
		$this->template->nav_bar=\View::forge('content/index/nav-bar');
		$this->template->slogan=\View::forge('content/index/slogan');
		$this->template->pagelist=\View::forge('content/index/pagelist');
		$this->template->link=\View::forge('content/index/link');
		
	}
}
