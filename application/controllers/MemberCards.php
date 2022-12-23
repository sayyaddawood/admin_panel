<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberCards extends CI_Controller {
    
    public function __construct()
    {
	parent::__construct();
	//$this->check_isvalidated();
	$this->load->model('Members_model');
    }

	public function index()
	{	    
	    $data['MembersRecord']  = $this->Members_model->GetAllMembers();  
	    $this->load->view('member_cards',$data);
	}
	
	function PrintMemberCards()
	{
	    $MemberId = $this->input->get('MemberId');
	    
	    $data['MembersRecord']  = $this->Members_model->GetAllMembers(); 

	    //$data['MembersCard'] = $this->Members_model->MemberById($MemberId);	
	    $this->load->view('member_print_card',$data);
	}
}
