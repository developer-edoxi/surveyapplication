<?php

class Usercheck extends CI_Model
{

    public function checkuser($data)
	{

        $username=$data['username'];
    
        $query=$this->db->query("select *  from `user` where username='$username'");

        return $query->num_rows();


	}

    public function fetchuser($data)
	{

        $username=$data['username'];


        $password=$data['password'];


    
        $query=$this->db->query("select * from `user` where username='$username' and password='$password'");

        return $query->row();


	}

    


}


?>