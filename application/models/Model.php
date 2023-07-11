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
            $row=$query->row_array();
            $poidsDiff = abs($row['PoidsInit'] - $row['PoidsObj']);
            return $poidsDiff;
        }

        public function getObjectifByUser($idUser)
        {   
            $sql = "select idObjectif from InfoUser where idUser = %s";
            $sql = sprintf($sql,$idUser);
            $query = $this->db->query($sql);
            $row=$query->row_array();
            return $row['idObjectif'];
        }

        public function getSuggestion($idUser)
        {   
            $poidsDiff= $this->Model->getPoidsDiff($idUser);
            $objectif= $this->Model->getObjectifByUser($idUser);
            $sql = "select idregime, DescriRegime, PoidsDeb, PoidsFin,sum(duree) total_duree,sum(PrixUnitaire*duree) total_prix from v_all_regime where idObjectif=%s and PoidsDeb <= %s and PoidsFin >= %s group by idregime, DescriRegime, PoidsDeb, PoidsFin";
            $sql = sprintf($sql,$objectif,$poidsDiff,$poidsDiff);
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
            $result[] = $row;
            }
            return $result;
        }

    }
?>