<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Welcome extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
          $this->load->helper('url');
	}
	
	
	
	//////View//////
	
	public function view_message()
	{
		$result2['image'] = $this->Public_model->items_get();
		
		$this->load->view('view_message',$result2);
	}
	  
	  //////register//////
     public function register()
	{
		
		if($this->input->post('submit')) 
		{
		   $name= $this->input->post('name');
			$email= $this->input->post('email');
			$number= $this->input->post('number');
		    $password= $this->input->post('password');
			$insert_locaion = $this->Public_model->register_ticket($name,$email,$number,$password);
			$this->load->helper('url');
			redirect('login');
		 
		}
		$this->load->view('register');
	}
	
	
	
	//////login//////
	
	public function login()
	{
	
	 if($this->input->post('submit')) 
		{
		
			$number= $this->input->post('number');
			$password= $this->input->post('password');
			$result = $this->Public_model->loginn($number,$password);
			
			if($result =='true')
			{
				$sess_data = $this->session->all_userdata();
			    redirect('dashbord');
			}
			 else
            {
			
				redirect('login');
			}	
		} 
	 	
	
	$this->load->view('login',$result1);
	}
	
	
 
	
	
	///logout////
	
	function logout(){
		
		$user_session_items = array(
				'id'=>'',
				'name'=>'',
				'number'=>'',
				'password'=>'',
		);
		$sess_data = $this->session->all_userdata();
		$this->session->unset_userdata($user_session_items);
		$this->session->sess_destroy();
		redirect('/');
		
	}
	
	///add Proprity///
	public function addproprity()
	{
     $sess_data = $this->session->all_userdata();
	 if($sess_data['id'] == '' ){redirect('/');}
		
		if($this->input->post('submit')) 
		{
		    $pro_name= $this->input->post('pro_name');
			$pro_price= $this->input->post('pro_price');
			$pro_description= $this->input->post('pro_description');
		   // $file= $this->input->post('file');
			$bill= $this->input->post('bill');
			if(!empty($_FILES['bill']['name'])){
				
				$response = $this->image_upload_bill();
			}
			$file_name = $response['file_name'];
			$insert_locaion['bill']= $file_name;
			$insert_locaion = $this->Public_model->prodct_pro($pro_name,$pro_price,$pro_description,$bill);
			$this->load->helper('url');
			
			redirect('dashbord');
		 
		}
		
		
		$this->load->view('addproprity');
	}
	public function image_upload_bill() 
	{
		$response = array();
		$bill   = 'bill';
		$config['upload_path'] = 'upload/';
		
		chmod($config['upload_path'], 777);
		
		$config["allowed_types"] = 'gif|jpg|png|jpeg|pdf';
		$config["max_size"] = 1850;
		$config["max_width"] = 2000;
		$config["max_height"] = 2000;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload($bill)):
		$response = array('status' => FALSE , 'error' => $this->upload->display_errors());
		else:
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
		$image_path = $upload_data['full_path'];
		if(file_exists($image_path)):
		$response = array('status' => TRUE , 'path' => $image_path , 'file_name' => $file_name );
		else:
		unlink($image_path);
		$response = array('status' => FALSE, 'error' => 'Ooops!Error occured while file uploading..');
		endif;
		endif;
		return $response;
	}
	////Get////
	public function dashbord()
	{
     $sess_data = $this->session->all_userdata();
	 if($sess_data['id'] == '' ){redirect('/');}
	 
     $result1['newsup'] = $this->Public_model->items_get_products();
	 $result1['user_name'] = $this->Public_model->get_user_name($sess_data['id']);
	 
	 $this->load->view('dashbord',$result1);
	}
	///delet///
	function news_delet($id)/////Delete///
	{
			
		$this->Public_model->news_delet_updateeee($id);
		$this->load->helper('url');
		$this->session->set_flashdata('message','<h4 style="color:green;text-align:center;">Proprity Added Sucessfully</h4>');
	    redirect('dashbord');
			
	}
	////Edit////
	public function proedit($id)
	{
	 $sess_data = $this->session->all_userdata();
	 if($sess_data['id'] == '' ){redirect('/');}	
	 $data['details']=$this->Public_model->news_edit($id);
	 if($this->input->post('submit'))
	   {
			$id= $this->input->post('id');
			$pro_name= $this->input->post('pro_name');
			$pro_price= $this->input->post('pro_price');
			$pro_description= $this->input->post('pro_description');
			$bill= $this->input->post('bill');
			$insert_locaion = $this->Public_model->edit($id,$pro_name,$pro_price,$pro_description,$bill);
			$this->load->helper('url');
			redirect('dashbord');
			
	   }
	$this->load->view('proedit',$data);
	}
	
	///Proprity Buying///
	
	public function product_details($id)
	{
	 $data['detailss']=$this->Public_model->news_edit($id);
	 if($this->input->post('submit'))
	   {
			$id= $this->input->post('id');
			$pname= $this->input->post('pname');
			$pprice= $this->input->post('pprice');
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$number= $this->input->post('number');
			//$address= $this->input->post('address');
			$insert_locaion = $this->Public_model->order_details($pname,$pprice,$name,$email,$number);
			$this->load->helper('url');
			redirect('');
			
	   }
	$this->load->view('product_details',$data);
	}
	
}
