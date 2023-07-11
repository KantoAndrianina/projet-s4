<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function getUser()
        {
            $sql = "select * from User ";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;

        }
       
        public function checkLogin($mail,$pass)
        {
            $listeUser=$this->Model->getUser();
            $valiny = false;
             for ($i=0;$i<count($listeUser);$i++){
                if($listeUser[$i]['Email'] == $mail && $listeUser[$i]['Mdp']== $pass)
                {
                    $valiny = true;
                }
             }
           
            return $valiny;
        }

        public function getAdmin()
        {
            $sql = "select * from User where isAdmin = 1";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;

        }

        public function checkAdmin($mail)
        {
            $admin=$this->Model->getAdmin();
            $valiny = false;
            for ($i=0;$i<count($admin);$i++){
                if($mail == $admin[$i]['Email'])
                {
                    $valiny = true;
                }
            }

           
            return $valiny;
        }
       
        public function getAllInfoUser()
        {   
            $sql = "select * from v_user_infoUser ";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }


        public function getPoidsDiff($idUser)
        {   
            $sql = "select PoidsObj, PoidsInit from InfoUser where idUser = %s";
            $sql = sprintf($sql,$idUser);
            $query = $this->db->query($sql);

        }
        //insert Activite
        public function insertActivite($idActivite, $DescriActivite, $Duree,$PoidsDeb,$PoidsFin,$NomActivite,$idObjectif)
        {
            $sql = "insert into Activite (idActivite, DescriActivite, Duree,PoidsDeb,PoidsFin,NomActivite,idObjectif) values (%s,'%s',%s,%s,%s,'%s',%s)";
            $sql = sprintf($sql, $this->db->escape($idActivite),$this->db->escape($DescriActivite),$this->db->escape($Duree),$this->db->escape($PoidsDeb),$this->db->escape($PoidsFin),$this->db->escape($NomActivite),$this->db->escape($idObjectif));
            $query = $this->db->query($sql);

        }
        //update plat
        public function updatePlat($Nomplat, $PrixUnitaire, $ImgPlat,$idPlat)
        {
            $sql = "update Plat set Nomplat = '%s', PrixUnitaire = %s, ImgPlat= '%s', where idPlat = %s";
            $sql = sprintf($sql, $this->db->escape($Nomplat),$this->db->escape($PrixUnitaire),$this->db->escape($ImgPlat),$this->db->escape($idPlat));
            $query = $this->db->query($sql);

        }
        //update regime
        public function updateRegime($idObjectif, $DescriRegime, $Durée,$PoidsDeb,$PoidsFin,$idPlat,$idRegime)
        {
            $sql = "update Regime set idObjectif = %s, DescriRegime = '%s', Durée= %s, PoidsDeb= %s, PoidsFin= %s, idPlat= %s ,where idRegime = %s";
            $sql = sprintf($sql, $this->db->escape($idObjectif),$this->db->escape($DescriRegime),$this->db->escape($Durée),$this->db->escape($PoidsDeb),$this->db->escape($PoidsFin),$this->db->escape($idPlat),$this->db->escape($idRegime));
            $query = $this->db->query($sql);

        }
        //update Activite
        public function updateActivite($DescriActivite, $Duree,$PoidsDeb,$PoidsFin,$NomActivite,$idObjectif,$idActivite)
        {
            $sql = "update Activite set DescriActivite = '%s', Duree = %s, PoidsDeb= %s, PoidsFin= %s, NomActivite= '%s' , idObjectif = %s ,where idActivite = %s";
            $sql = sprintf($sql, $this->db->escape($DescriActivite),$this->db->escape($Duree),$this->db->escape($PoidsDeb),$this->db->escape($PoidsFin),$this->db->escape($NomActivite),$this->db->escape($idObjectif),$this->db->escape($idActivite));
            $query = $this->db->query($sql);

        }

    }
?>