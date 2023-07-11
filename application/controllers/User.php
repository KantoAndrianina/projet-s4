<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Model');
		$this->load->library('session');
		
    }
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
		$idUser = $_GET['idUser'];
		$data['content'] = 'pages/user';
		$data['listInfoUser'] = $this->Model->getUserInfoById($idUser);
		$this->load->view('index',$data);
	}
    public function porte_monnaie()
	{
		$data = array();
        $data['content'] = 'pages/porte_monnaie';
		$this->load->view('index',$data);
	}
    public function detail_sugg()
	{
		$data = array();
        $data['content'] = 'pages/detail_suggestion';
		$this->load->view('index',$data);
	}
}