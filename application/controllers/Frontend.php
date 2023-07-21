<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function surveyresult()
	{

        $this->load->model("Survey");

        $data['survey']=$this->Survey->getsurvey();

		$this->load->view('list_result',$data);


	}


	public function insertsurvey()
	{
				$this->load->model("Survey");

				$this->load->helper("url");

		
			
			$data = array(  
				'uid'     => $this->input->post('uid'),  
				'firstname'  => $this->input->post('firstname'),  
				'email'     => $this->input->post('email'),  
				'gender'  => $this->input->post('gender'),  
				'discipline'     => $this->input->post('discipline'),  
				'course'  => $this->input->post('course'),  
				'batchyear'     => $this->input->post('batchyear'),  
				'terms'  => $this->input->post('terms'),  
				'question_1'     => $this->input->post('question_1'),  
				'question_2'  => $this->input->post('question_2'),  
				'question_2_tool'     => $this->input->post('question_2_tool'),  
				'question_3'  => $this->input->post('question_3'),  
				'question_4'     => $this->input->post('question_4'),  
				'question_5'  => $this->input->post('question_5'),  
				'question_6'     => $this->input->post('question_6'),  
				'question_7'  => $this->input->post('question_7'),  
				'question_8'     => $this->input->post('question_8'),  
				'question_9'  => $this->input->post('question_9'),  
				'question_10'     => $this->input->post('question_10'),  
				'question_11'  => $this->input->post('question_11'),
				'question_12'     => $this->input->post('question_12'),  
				'question_13'  => $this->input->post('question_13'),  
				'question_14'     => $this->input->post('question_14'),  
				'question_15'  => $this->input->post('question_15'),  
				'question_16'     => $this->input->post('question_16'),  
				'question_17'  => $this->input->post('question_17'),  
				'question_18'     => $this->input->post('question_18'),  
				'question_19'  => $this->input->post('question_19'),
				'question_20'  => $this->input->post('question_20') 
				
				); 

				$response=$this->Survey->addsurvey($data);
			if($response==true){

				// $data['success']='inserted successfully';

				redirect(base_url());

			}else{

				// $data['success']= "something went wrong";

				redirect(base_urlbase_url());

			}

	}


}





