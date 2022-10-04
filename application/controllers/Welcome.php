<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('queries');
		$records= $this->queries->getRecords();
		$this->load->view('register',['records'=>$records]);
    } 

	public function create()
	{
		$this->load->view('create');
	}
	public function save()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('office', 'Office', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');

		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addRecords($data)){
				$this->session->set_flashdata('msg','User Added Successfully!');
			}else{
				$this->session->set_flashdata('msg','Failed to Save!');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}	
	}
	public function update($id)
	{
		$this->load->model('queries');
		$records= $this->queries->getSingleRecords($id);
		$this->load->view('update',['records'=>$records]);
	}
	public function change($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('office', 'Office', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');

		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateRecords($data,$id)){
				$this->session->set_flashdata('msg','User Updated Successfully!');
			}else{
				$this->session->set_flashdata('msg','Failed to Update!');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}	
	}
	public function view($id)
	{
		$this->load->model('queries');
		$records= $this->queries->getSingleRecords($id);
		$this->load->view('view',['records'=>$records]);
	}
	public function delete($id)
	{
		$this->load->model('queries');
		if ($this->queries->deleteRecords($id)){
			$this->session->set_flashdata('msg','Record Deleted!');
		}else{
			$this->session->set_flashdata('msg','Failed to Delete!');
		}
		return redirect('welcome');
	}

	function registerNow()
	{
			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if ($this->form_validation->run()) {

				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
				'username'=>$username,
				'email'=>$email,
				'password'=>sha1($password),
				'status'=>'1'
				);

				unset($data['submit']);
				$this->load->model('queries');
				if ($this->queries->insertUser($data)) {
					$this->session->set_flashdata('msg', 'Failed to Save!');
				} else {
					$this->session->set_flashdata('msg','User Added Successfully!');
				}
				return redirect('welcome');
			} else {
				$this->load->view('home');
			}
		}

	function login()
	{
		$this->load->view('login');
	}

	function loginNow()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run())
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('queries');
				$status = $this->queries->checkPassword($password,$email);
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username'=>$username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('welcome/welcome_message'));
				}
				else
				{
					$this->session->set_flashdata('error','Email or Password is Wrong');
					redirect(base_url('welcome/login'));
				}

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('welcome/login'));
			}
	}

	public function construct() {
		parent::__construct();
		$this->queries->is_logged(); // can merge with below func, just make sure it is called first (!imp)
		$this->queries->is_allowed('dashboard');
	}
	function dashboard()
	{
		$this->load->view('welcome_message');
	}

	function logout()
	{
		session_destroy();
		redirect(base_url('welcome/login'));
	}
}