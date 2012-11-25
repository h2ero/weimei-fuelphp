<?php
namespace app1;
/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_H extends \Controller_Template
{

	public $template='app1::template/default';
	public function before(){
		parent::before();
	}
	public function after($response)
	{
		$response = parent::after($response); 
		return $response; 
	}
	
	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		echo "H";
	}

	public function action_hello()
	{
		echo 1;
	}
}
