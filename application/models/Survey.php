<?php

class Survey extends CI_Model
{

  

    public function addsurvey($data)
	{

        
        $response=$this->db->insert("surveytb",$data);

        return $response;
       


	}

    public function getsurvey()
	{

        
        $query=$this->db->query("select s.*,u.universityname from surveytb s,university u where s.uid=u.id");

        return $query->result();


	}




}


?>