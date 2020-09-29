<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
	public function index()
	{
		$this->load->view('form');
	}
    public function show()
	{
		$data = array(
		'adress' =>$this->input->post('adress'),
		'district' =>$this->input->post('district'),
        'city' =>$this->input->post('city'),
        'province' =>$this->input->post('province'),
        'pcode' =>$this->input->post('pcode'),
        'pnum' =>$this->input->post('pnum'),
        'email' =>$this->input->post('email')
		);
		$data['show'] = $data;
		$this->load->view('home_view',$data);
    }
}