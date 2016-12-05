<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

	public function action_robert() 
	{
		$test = orm::factory('user')->where('name', '=', 'robert')->find_all();

		$this->response->body('AAAAAAAAAA');
	}

} // End Welcome
