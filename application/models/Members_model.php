<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_model extends CI_Model{
    
    function __construct(){
	
    parent::__construct();
   $this->tbl_member_detail = "member_detail";
    //$this->output->enable_profiler(true);
    }

/*    public function TotalMembers()
	{
	    $query = $this->db->query('SELECT M.id FROM member_detail AS M');
	    return $query->num_rows();
	} */
	
    function GetAllMembers()
    {
	$this->db->select('*');
        $this->db->from('member_detail');
	$this->db->order_by('member_detail.id', 'ASC');	
        $GetAllCustomers = $this->db->get();
        return ($GetAllCustomers->result_array());
    }
    
    function MemberById($MemberId)
	{
	    $this->db->select('*');
	    $this->db->from($this->tbl_member_detail);
	    $this->db->where('id', $MemberId);
	    $query = $this->db->get();
	    return $query->result_array();
        }
}
