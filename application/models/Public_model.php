<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_model extends CI_Model {



        function get_user_name($id){
		//print_r($id); 
		$query1=$this->db->where(array('id' =>$id))->get('register');
		$data= $query1->result_array();
		return $data[0]['name']; 
		
	}
	
	////Register////
	
	public function register_ticket($name,$email,$number,$password)
	
	{
		$fields=array(
				'name'=> $name,
				'email'=> $email,
			    'number'=> $number,
				'password'=> $password,
				'date_of_create'=>date("Y-m-d")
				);
		$res=$this->db->insert('register',$fields);
		return true;
	}
   ///login////
    function loginn($number,$password)
	{
		
		$query=$this->db->where(array('number'=>$number,'password'=>$password))->get('register');
		$result = $query->result_array();
	
		if(sizeof($result) == 1)
		
        {
            $row = $query->row();
            $data = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'email' => $row->email,
                    'number' => $row->number,
                    'password' => $row->password,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
		
		
		
	}
  ///add proprity///
 
   public function prodct_pro($pro_name,$pro_price,$pro_description,$bill)
	
	{
		$fields=array(
				'pro_name'=> $pro_name,
				'pro_price'=> $pro_price,
			    'pro_description'=>$pro_description,
				'bill'=> $bill,
				'sess_id'=>(int)$this->session->userdata['id'],
				'date_of_create'=>date("Y-m-d")
				);
		$res=$this->db->insert('properties',$fields);
		return true;
	}
	function items_get()//Get//
	{
		
		$query = $this -> db -> get('properties');
		$result1=$query->result_array();
		return $result1;
	}
	//Get in Dashbord//
	function items_get_products()
	{
		$chatid=$this->session->userdata['id'];
		$query = $this ->db->where(array ('sess_id' => $chatid ))->get('properties');
		$result1=$query->result_array();
		return $result1;
	}
	
	//get
	Public function news_edit($id)
	{
		$query=$this->db->where(array ('id' => $id ))->get('properties');
		$result = $query->result_array();
		return $result;
	}
	//Edit
	function edit($id,$pro_name,$pro_price,$pro_description,$bill)
	{
		
		$this->db->where(array('id' =>(int)$id))->set(array('pro_name'=>$pro_name,'pro_price'=>$pro_price,'pro_description'=>$pro_description,'bill'=>$bill))->update('properties');
		return true;
    }
	
	//delet//
	function news_delet_updateeee($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->delete('properties');
		if($query)
		{
	    return true;
		}else
		{
	    return false;
		}
	}
	
	////Proprity Buying/////
	
	 public function order_details($pname,$pprice,$name,$email,$number)
	
	{
		$fields=array(
				'pname'=> $pname,
				'pprice'=> $pprice,
			    'name'=> $name,
				'email'=> $email,
				'number'=> $number,
				//'address'=> $address,
				'date_of_create'=>date("Y-m-d")
				);
		$res=$this->db->insert('orders',$fields);
		return true;
	}


}