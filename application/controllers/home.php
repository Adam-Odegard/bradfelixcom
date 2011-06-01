<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 *	main controller for project
 *	set in config/routes.php
 *	take careful notice of the templating pieces below
 *	
 *	template can be modified in views/template.php
 *	regions can be added, if regions are added you will also need to update config/template.php
 *
 */



class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index($data = "")
	{
		
		
		/***********************
			TEMPLATE STUFF
		************************/
			$this->template->set_template('default');
			//set template title
			$this->template->write('title', 'bradfelix.com');
			
			//load external scripts & css
			$this->template->add_css('css/main.css');
			$this->template->add_css('css/loginform.css');
			
			
			//load views into template regions
			//$this->template->write_view('header', 'auth', $data);
			$this->template->write_view('content', 'default', $data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */