<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('view');
	}
	public function show()
	{
		$data = array(
			'email' =>$this->input->post('email'),
			'psw' =>$this->input->post('psw'),
			'name' =>$this->input->post('name'),
			'lname' =>$this->input->post('lname'), 
			'gender' =>$this->input->post('gender'), 
			'tel' =>$this->input->post('tel') 

		);
		$data['show'] = $data;
		$this->load->view('home_view',$data);





	}
}