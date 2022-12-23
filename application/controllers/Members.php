<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
    
    public function __construct()
    {
	parent::__construct();
	//$this->check_isvalidated();
	$this->load->model('Members_model');
    }

	public function index()
	{	    
	    $data['MembersRecord']  = $this->Members_model->GetAllMembers();  
	    $this->load->view('members',$data);
	}
}
