<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index($data = "")
	{
		
		$data['sidebar'] = $this->load->view('sidebar', '', TRUE);
		
		/***********************
			TEMPLATE STUFF
		************************/
			$this->template->set_template('default');
			//set template title
			$this->template->write('title', 'bradfelix.com');
			
			//load external scripts & css
			$this->template->add_css('css/site.css');
			$this->template->add_css('css/loginform.css');
			$this->template->add_js('js/EqualHeights.js');
			$this->template->add_js('js/site.js');
			$this->template->add_js('js/jquery161.js');
			$this->template->add_js('js/contact.js');
			
			//load views into template regions
			$this->template->write_view('header', 'sitehead', $data);
			$this->template->write_view('nav', 'nav', $data);
			$this->template->write_view('content', 'contact', $data);
			
			//render template
			$this->template->render();
			
		/***************************
			END OF TEMPLATE STUFF
		****************************/
	}
	
	function submit(){
	
			$content = "";
			foreach($_POST as $k=>$v) {
				$content .= "<p><b>" . str_replace("_"," ",strip_tags($k)) . "</b>: " . strip_tags($v) . "</p>";
			}
			$this->load->library('email');
			
			$config["mailtype"] = 'html';
			$this->email->initialize($config);
			
			
			$this->email->from('contact@bradfelix.com', 'Website Contact');
			$this->email->to('bfelix@bradfelix.com'); 
			
			$this->email->subject('Contact');
			$this->email->message($content);	
			
			if(!$this->email->send())
			{
				echo "Fail";
			}else{
				echo "Success";
			}
	
	}
	
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */