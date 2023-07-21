<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

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

	 function __construct() {
        parent::__construct();
        
		$this->load->library('session');

    }

	public function index()
	{

		

		$this->load->view('dashbord');



	}

	public function login()
	{
		$this->load->library('session');

		$this->load->view('login');



	}

	public function getdata()
	{

		$this->load->model("Dashbord");
		
		$fn=$this->input->get('fun');

		$q=$this->input->get('q');

		if($fn == 'singlesurvey'){

			

			$data['data']=$this->Dashbord->getsinglesurvey($q);
			
	
		}else if($fn == 'chart'){



			$data['data']=$this->Dashbord->getothercharts($q);
			
			

		}else{

			if($q==1){


				$data['data']=$this->Dashbord->gettotalresponse($q);
			
			}else if($q==2){

				$data['data']=$this->Dashbord->gettotaluniversity($q);

			}else if($q==3){

				$data['data']=$this->Dashbord->gettodayresponse($q);

			}else if($q==4){

				$data['data']=$this->Dashbord->getreview($q);

			}else{


			$data['data']=$this->Dashbord->getsalechart($q);
			
			}

		}
		
		$json = json_encode($data['data']);

		echo $json;
		


	}


    public function university()
	{

        $this->load->model("Universities");

        $data['university']=$this->Universities->getuniversities();

		$this->load->view('university',$data);


	}

	public function insertuniversity()
	{
		$this->load->model("Universities");

		$this->load->helper("url");

		if($this->input->post('submit')){

	
			$config['upload_path']="./images/";
			$config['allowed_types']="jpg|png|pdf";
			$config['max_size']=1024;

			$this->load->library('upload',$config);
			
			$this->upload->do_upload('logo');

			$filename=$this->upload->data('file_name');

			$filepath="images/".$filename;
			
			$data = array(  
				'universityname'     => $this->input->post('universityname'),  
				'description'  => $this->input->post('description'),  
				'logoupload'   => $filepath
				); 

			if(!$this->upload->display_errors()){

			$response=$this->Universities->adduniversities($data);
			
			if($response==true){

				$this->session->set_flashdata('msg','Success');

				redirect(base_url('university'));

				$this->session->unset_flashdata('msg');

			}else{

				$this->session->set_flashdata('msg','Success');

				redirect(base_url('university'));

				$this->session->unset_flashdata('msg');

			}
			}else{

			$msg=$this->upload->display_errors();

			$this->session->set_flashdata('msg',$msg);

			redirect(base_url('university'));

			$this->session->unset_flashdata('msg');

		}

		}


	}

	public function logincheck()
	{




		$this->load->model("Usercheck");

		$this->load->helper("url");

		if($this->input->post('submit')){


			
			$dt = array(  
				'username'     => $this->input->post('username'),  
				'password'  => $this->input->post('password'),  

				); 


			$r=$this->Usercheck->checkuser($dt);


			// echo $r;

			// $this->load->view('login',$data);

			if($r==0){

			?>

					<script type="text/javascript"> alert("Something Went wrong");</script>

			<?php



				redirect(base_url('backend/login'));


			}else{

				$res=$this->Usercheck->fetchuser($dt);

			

				// echo $res->name;

				if($res->usertype=="admin"){

					$this->session->set_flashdata('msg','Success');

					redirect(base_url('home'));

					$this->session->unset_flashdata('msg');

				}else{

					$this->session->set_flashdata('msg','Failed');

					redirect(base_url('backend/login'));

					$this->session->unset_flashdata('msg');

				}




			}

		}


	}




}
