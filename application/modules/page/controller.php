<?php

class Page extends Controller 
{
	function Page()
	{
		parent::__construct();
	}
	
	function index($uri) 
	{	
		$this->load->model('Page_Model');
		// $this->Page_Model->get_page_contents($uri);
	}
}
// EOF