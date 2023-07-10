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
                if($mail == $admin[0]['Email'])
                {
                    $valiny = true;
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

    }
?>