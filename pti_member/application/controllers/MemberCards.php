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
	
	function AutoCompleteSearch_Member()
	{
	    $MemberCNIC = trim($this->input->post('MemberCNIC', TRUE));

	    $this->db->select('id, cnic');
	    $this->db->from('member_detail');
	    $this->db->like('cnic', $MemberCNIC, 'after');
	    $this->db->limit('20');
	    $query = $this->db->get();

	    if ($query->num_rows() > 0)
	    {
		$MemberCNIC = array();

		foreach ($query->result() as $row)
		{
		  $bn = array(  	
                    'label' => $row->cnic,
                    'value' => $row->cnic,
                    'id'  => $row->id
		    );
		  $MemberCNIC[] = $bn;
		}    
	    } 
	    else
	    {
		$data['response'] = 'false';
	    }

	    echo json_encode($BrandNames);
	}
}
