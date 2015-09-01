<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends CI_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}
	
	/*function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true//still allows user in even afer cookies have been cleared so must be checked
			);
			
			$this->session->set_userdata($data);//append user data
			redirect('site/members_area');
		}
		else
		{
			$this->index();	
		}
	}*/
	
	/*function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template',$data);
	}*/
	
	
	function create_member()
	{
		$this->load->library('form_validation');
		//field name, error message, validation rules
		
		$this->form_validation->set_rules('first_name','Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email');
		
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
		
		if($this->form_validation->run()==FALSE)//if it didn't validate'
		{
			$this->index();//load the template not the view
		}
		else
			{
				$this->load->model('membership_model');
				if($query = $this->membership_model->create_member())
				{
					$this->load->view('include/header');
			        $this->load->view('signup_successful');
			        $this->load->view('include/footer');				
				
				}
				else 
				{
					$this->index();	
				}
			}
	}
	

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
