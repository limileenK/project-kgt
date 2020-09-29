<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->load->view('bt');
		// $this->load->model('showdata');
	}



    public function index()
    {
        $this->load->view('profile');
    }
    public function show()
    {
       $data = array(
        'name' => $this->input->post("name"),
        'lname' => $this->input->post("lname"),
        'email' => $this->input->post("email"),
        'phone' => $this->input->post("phone"),
        'addr' => $this->input->post("addr"),
       );
       $data['show'] = $data;
        $this->load->view('show',$data);
    }
  
}
