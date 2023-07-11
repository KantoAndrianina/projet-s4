<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Model');
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
        $data['listeInfoUser'] = $this->Model->getAllInfoUser();
        $data['content'] = 'pages/admin';
		$this->load->view('index',$data);
	}
	public function crud_plat()
	{
		$data = array();
        $data['content'] = 'crud/ajout_plats';
		$this->load->view('index',$data);
	}
	public function crud_liste()
	{
		$data = array();
        $data['content'] = 'crud/listes';
		$this->load->view('index',$data);
	}
	public function crud_activite()
	{
		$data = array();
        $data['content'] = 'crud/ajout_activites';
		$this->load->view('index',$data);
	}
	public function crud_regime()
	{
		$data = array();
        $data['content'] = 'crud/ajout_regimes';
		$this->load->view('index',$data);
	}
}