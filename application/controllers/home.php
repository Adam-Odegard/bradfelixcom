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
		
		$data['rotator'] = $this->load->view('rotator', '', TRUE);
		$data['twitter'] = $this->load->view('twitter', '', TRUE);
		$data['facebook'] = $this->load->view('facebook', '', TRUE);
		$data['sidebar'] = $this->load->view('sidebar', '', TRUE);
		
		/***********************
			TEMPLATE STUFF
		************************/
			$this->template->set_template('default');
			//set template title
			$this->template->write('title', 'bradfelix.com');
			
			//load external scripts & css
			$this->template->add_css('css/site.css');
			$this->template->add_js('js/EqualHeights.js');
			$this->template->add_js('js/site.js');
			$this->template->add_js('js/prototype.js');
			$this->template->add_js('js/scriptaculous.js?load=effects,builder');
			$this->template->add_js('js/lightbox.js');
			
			//load views into template regions
			$this->template->write_view('header', 'sitehead', $data);
			$this->template->write_view('nav', 'nav', $data);
			$this->template->write_view('content', 'default', $data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
	
	function testtest(){
		$this->load->view('test');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */