<?php

class Membership_model extends  CI_Model{
	
	/*function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1)
		{
			return TRUE;
		}
	}*/
	
	function create_member()
	{
		$new_member_insert_data =array(
			'phone_no' => $this->input->post('phone_no'),
			'firstname' => $this->input->post('first_name'),
			'lastname' => $this->input->post('last_name'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),//password must be md5ed
			'email' => $this->input->post('email_address'),
			);
		
		$insert =$this->db->insert('user_info', $new_member_insert_data);
		return $insert;   
	}
}
