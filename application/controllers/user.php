<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }
    
	public function index()
	{
		$this->login();
	}
    
    public function login()
    {
       $this->load->view('loginv');    
    }
    
    public function registrasi()
    {
        $this->load->view('registrationv');   
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */