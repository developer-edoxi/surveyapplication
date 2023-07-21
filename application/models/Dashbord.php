<?php

class Dashbord extends CI_Model
{

    public function getsinglesurvey($q)
	{


        
        $query=$this->db->query("select s.*,u.universityname from surveytb s,university u where s.uid=u.id and s.id='$q'");

        return $query->result();


	}




  public function gettotalresponse($q)
	{


        
    $query=$this->db->query("select '".$q."' as test,count(*) as totalresponse from surveytb");

        return $query->result();


	}

  public function gettotaluniversity($q)
	{


        
    $query=$this->db->query("select '".$q."' as test,count(*) as totaluniversity from university");

        return $query->result();


	}


  public function gettodayresponse($q)
	{


        
    $query=$this->db->query("select '".$q."' as test,count(*) as todayresponse from surveytb where cast(responsedate as date)=(select cast(sysdate() as date))");

        return $query->result();


	}


  public function getreview($q)
	{


        
    $query=$this->db->query("select '".$q."' as test,cast(s.responsedate as time) as taim,s.firstname,u.universityname from surveytb s,university u where s.uid=u.id order by s.responsedate DESC LIMIT 5");

        return $query->result();


	}

  public function getsalechart($q)
	{


        
    $query=$this->db->query("select '".$q."' as test,u.universityname as uname,count(s.uid) as y from surveytb s,university u where s.uid=u.id  GROUP by s.uid");

        return $query->result();


	}





    public function getothercharts($q)
	{


        
        $query=$this->db->query("select '".$q."' as test, question_".$q." as name,count(question_".$q.") as y from surveytb GROUP by question_".$q."");

        return $query->result();


	}

    




}


?>