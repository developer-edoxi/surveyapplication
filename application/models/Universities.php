<?php

class Universities extends CI_Model
{

    public function getuniversities()
	{

        
        $query=$this->db->query("select * from university");

        return $query->result();


	}

    public function adduniversities($data)
	{

        
        $response=$this->db->insert("university",$data);

        return $response;
       


	}




}


?>