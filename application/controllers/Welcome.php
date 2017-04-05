<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu');
		$this->data['pagetitle'] = 'boop';
	}
	
	public function index()
	{
		$this->data['title'] = 'boop';
		$this->data['content'] = 'You should not be here';
		$this->data['pagebody'] = 'template';
		$this->render();
	}

}
