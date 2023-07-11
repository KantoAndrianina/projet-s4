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
        $data['listeActivite'] = $this->Model->getAllActivite();
        $data['listeRegime'] = $this->Model->getAllRegime();
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
	public function insertPlat()
	{
		$nom = $this->input->post("nom");
		$prix = $this->input->post("prix");
		$img = $this->input->post("img");
		// $this->Model->insertPlat($nom, $prix,$img);
		// $url=base_url().'index.php/admin/index';
		// redirect($url);
		echo $nom;
		echo $prix;
		echo $img;
	}
	public function insertActivite()
	{
		$descri = $this->input->post("descri");
		$dure = $this->input->post("dure");
		$poidsD = $this->input->post("poidsD");
		$poidsF = $this->input->post("poidsF");
		$NomActivite = $this->input->post("NomActivite");
		$augmenter = $this->input->post("Augmenter");

		if($augmenter=="option1"){
			$augmenter = 1;
		}
		elseif  ($augmenter=="option2"){
			$augmenter = 2;
		}
		else{
			return "erreur";
		}
			
		$this->Model->insertActivite($descri, $dure,$poidsD,$poidsF,$NomActivite,$augmenter);
		$url=base_url().'index.php/admin/index';
		redirect($url);
		
		// echo ($descri);
		// echo ($dure);
		// echo ($poidsD);
		// echo ($poidsF);
		// echo ($augmenter);
	}


}