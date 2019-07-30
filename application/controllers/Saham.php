<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saham extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('saham_model');
				$this->load->helper('date');
				$this->load->helper('url');
		}
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
			public function dashboard()
			{
				$this->load->view('template/dashboard');
			}
			public function tanggal()
			{
				$data['view_name'] = 'tanggal';
				$this->load->view('data/template', $data);
			}
			public function classifier()
			{
				$data['classifier'] = $this->saham_model->getListClassifier();
				$data['view_name'] = 'classifier';
				$this->load->view('data/template', $data);
			}
			public function updateClassifier($id)
			{
				if($this->input->post('updateClassifier')) {
					$this->saham_model->updateClassifier($id);
					redirect(base_url('classifier'));
				} else if ($this->input->post('back')){
					redirect(base_url('classifier'));
				} else{
				$data['detail'] = $this->saham_model->getSelectedClassifier($id);
				$data['view_name'] = 'updateClassifier';
				$this->load->view('data/template', $data);
				}
			}
			public function deleteClassifier($id)
			{
				$where = array('id' => $id );
				$this->saham_model->deleteClassifier($where,'classifier');
				redirect(base_url('classifier'));
			}
			public function company()
			{
				$data['company'] = $this->saham_model->getListCompany();
				$data['view_name'] = 'company';
				$this->load->view('data/template', $data);
			}
			public function updateCompany($id)
			{
				if($this->input->post('updateCompany')) {
					$this->saham_model->updateCompany($id);
					redirect(base_url('company'));
				} else if ($this->input->post('back')){
					redirect(base_url('company'));
				} else{
				$data['sub'] = $this->saham_model->getListSubsektor();
				//$data['subsektor'] = $this->saham_model->getSelectedSubsektor($id);
				$data['detail'] = $this->saham_model->getSelectedCompany($id);
				$data['view_name'] = 'updateCompany';
				$this->load->view('data/template', $data);
				}
			}
			public function deleteCompany($id)
			{
				$this->saham_model->deleteCompany($id);
				redirect(base_url('company'));
			}
			public function createCompany()
			{
				if($this->input->post('createCompany')) {
					$this->saham_model->createCompany();
					redirect(base_url('company'));
				} else if ($this->input->post('cancel')){
					redirect(base_url('company'));
				} else{
				$data['sub'] = $this->saham_model->getListSubsektor();
				$data['view_name'] = 'createCompany';
				$this->load->view('data/template',$data);
				}
			}
	}

