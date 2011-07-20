<?php
class Welcome extends System\Core\Controller 
{
	function Welcome()
	{
		parent::__construct();
	}
	
	function _beforeAction() 
	{
		/*
		| You can call before and after actions, sorta like mini hooks
		| They arent nessesary, but convenient not having to make a full hook
		| Since they are loaded in the main controller, you dont need to 
		| include these functions at all in your controller.
		*/
	}
	
	function index() 
	{	
		// Load a Welcome Model
		$this->load->model('Welcome_Model');
		
		/*
		| We will use this newly loaded model to return an array.
		| This array is the "No Contents In Body...." message you see 
		| when you load this page in the browser.
		*/
		$data = $this->Welcome_Model->return_default_array();
		$data['key'] = array( 0 => array( 'name' => 'steve' ), 1 => array( 'name' => 'bob' ), 2 => array( 'name' => 'david' ));
		
		// Load the page, and we are done :)
		$this->load->view('index', $data);
	}

	function _afterAction() 
	{
		// If you have a custom afterAction, you need
		// to do $this->output(); !
		// $this->output();
	}
}
// EOF