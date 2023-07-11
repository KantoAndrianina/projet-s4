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
        $data['listeActivite'] = $this->Model->getPlat();
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
	public function insert()
	{
<<<<<<< HEAD
		$descri = $this->input->post("descri");
		$duree = $this->input->post("Duree");
		$poidsDeb = $this->input->post("PoidsDeb");
		$poidsFin = $this->input->post("PoidsFin");
		$nomActivite = $this->input->post("NomActivite");
		$augmenter = $this->input->post("Augmenter");
		$réduire = $this->input->post("Réduire");
		$this->Model->insertAchat($descri, $duree,$poidsDeb,$poidsFin,$nomActivite,$augmenter,$réduire);
		$url=base_url().'index.php/admin/index';
		redirect($url);
=======
		$id = $_GET['idPlat'];
		$data = array();
        $data['id'] = $id;
        $data['content'] = 'crud/modif_plat';
		$this->load->view('index',$data);
	}
	public function modifier_activites()
	{
		$id = $_GET['idPlat'];
		$data = array();
        $data['id'] = $id;
        $data['content'] = 'crud/modif_activite';
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
>>>>>>> parent of 28db2e9 (crud_modif_supp)
		
	}	
}