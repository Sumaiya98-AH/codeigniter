<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$records= $this->queries->getRecords();
		$this->load->view('welcome_message',['records'=>$records]);
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
}