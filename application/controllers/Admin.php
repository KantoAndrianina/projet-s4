<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    // public function __construct()
    // {
    //     parent::__construct();
	// 	$this->load->model('Model');
    // }
    // public function index()
	// {
	// 	$data = array();
	// 	$data['listeObjet'] = $this->Model->listeObjet();
    //     $data['content'] = 'page/content';
	// 	$this->load->view('index',$data);
	// }
    public function index()
	{
		$data = array();
        $data['content'] = 'pages/admin';
		$this->load->view('index',$data);
	}
    
}