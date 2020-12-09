<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Alunos_model');
		$this->load->library('session');
	}

	public function index() {
		$data['title'] = "Alunos";
		$data['alunos'] = $this->Alunos_model->index();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/alunos', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function inserir() {
		$data['title'] = "Cadastrar aluno";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/inserir-aluno', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	
	public function salvarAluno() {
		$aluno = $this->input->post();

		if ($this->Alunos_model->inserir($aluno)) {
			$this->session->set_flashdata('sucesso', true);
			redirect(base_url());
		} else {
			$this->session->set_flashdata('aluno', $aluno);
			redirect(base_url('aluno/inserir'));
		}
	}
}
