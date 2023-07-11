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
        $data['listePlat'] = $this->Model->getPlat();
        $data['listeActivite'] = $this->Model->getActivite();
        $data['listeRegime'] = $this->Model->getRegime();
        $data['content'] = 'crud/listes';
		$this->load->view('index',$data);
	}
	public function crud_activite()
	{
		$data = array();
        $data['listeActiv'] = $this->Model->getPlat();
        $data['content'] = 'crud/ajout_activites';
		$this->load->view('index',$data);
	}
	public function crud_regime()
	{
		$data = array();
        $data['content'] = 'crud/ajout_regimes';
		$this->load->view('index',$data);
	}
	public function modifier_plat()
	{
		$id = $_GET['idPlat'];
		$data = array();
        $data['id'] = $id;
        $data['content'] = 'crud/modif_plat';
		$this->load->view('index',$data);
	}
	public function modifier_activite()
	{
		$id = $_GET['idActivite'];
		$data = array();
        $data['id'] = $id;
        $data['content'] = 'crud/modif_activite';
		$this->load->view('index',$data);
	}
	public function modifier_regime()
	{
		$id = $_GET['idRegime'];
		$data = array();
        $data['id'] = $id;
        $data['content'] = 'crud/modif_regime';
		$this->load->view('index',$data);
	}
	// public function insert()
	// {
	// 	$produit = $this->input->post("Nomplat");
	// 	$quantite = $this->input->post("typePlat");
	// 	$produit = $this->input->post("PrixUnitaire");
	// 	$quantite = $this->input->post("ImgPlat");
	// 	$this->Model->insertAchat($Nomplat, $typePlat,$PrixUnitaire,$ImgPlat);
	// 	$url=base_url().'index.php/welcome/total';
	// 	redirect($url);
		
	// }	
}