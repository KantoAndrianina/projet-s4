<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function welcomeCI()
	{
		$this->load->view('welcome_message');
		
	}	
	
	public function index()
	{
        $data['content'] = 'pages/login';
		$this->load->view('index',$data);
		
	}

	public function login()
	{
		$mail = $this->input->post("email");
		$pass = $this->input->post("password");
		// var_dump($mail);
		// var_dump($pass);

		$this->load->model('Model');
		// var_dump($this->Model->checkLogin($mail,$pass));

		if($this->Model->checkLogin($mail,$pass))
		{
			$this->session->set_userdata('idUser',10);
			$idUser =  $this->session->userdata('idUser');
			$data['idUser'] = $idUser;
			// $this->session->set_userdata('Email', $mail);
			// $_SESSION['Email']=$mail;
			if($this->Model->checkAdmin($mail))
			{
				$url=base_url().'index.php/admin/index';
				redirect($url);
			}else{
				$url=base_url().'index.php/user/index';
				redirect($url);
			}
			
		}
	}
	public function inscription()
	{
        $data['content'] = 'pages/inscription';
		$this->load->view('index',$data);
		
	}
	public function inscri()
	{
        $data['content'] = 'pages/inscri_suite';
		$this->load->view('index',$data);
		
	}
}
