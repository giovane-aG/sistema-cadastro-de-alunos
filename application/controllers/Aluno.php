<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Alunos_model');
		$this->load->library('session');

		$config['upload_path'] = './uploads';
		$config['allowed_types'] = '*';
		$config['max_size']     = '512000';
		$config['max_width']  = '2440';
		$config['max_height']  = '1600';

		$this->load->library('upload', $config);

	}

	public function index() {
		$data['title'] = "Alunos";
		$data['alunos'] = $this->Alunos_model->index();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/alunos', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		/* <?=$aluno['foto']?>*/
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

		$this->upload->do_upload('foto');
		$imagem = $this->upload->data();
		$file_url = "uploads/{$imagem['file_name']}";
		print_r($file_url);
		$aluno['foto'] = $file_url;

		if ($this->Alunos_model->inserir($aluno)) {
			$this->session->set_flashdata('sucesso', true);
			redirect(base_url());
		} else {
			$this->session->set_flashdata('aluno', $aluno);
			redirect(base_url('aluno/inserir'));
		}
	}

	public function editar($id) {
		$data['aluno'] = $this->Alunos_model->mostrar($id);
		$data['title'] = 'Editar Aluno';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/inserir-aluno', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function atualizarAluno($id) {
		$aluno = $this->input->post();

		$this->upload->do_upload('foto');
		$imagem = $this->upload->data();
		$file_url = "uploads/{$imagem['file_name']}";
		$aluno['foto'] = $file_url;
		
		$this->Alunos_model->editar($id, $aluno);
		redirect(base_url());
	}

	public function deletar($id) {
		$aluno = $this->input->post();
		$this->Alunos_model->deletar($id);
		redirect(base_url());
	}
}
