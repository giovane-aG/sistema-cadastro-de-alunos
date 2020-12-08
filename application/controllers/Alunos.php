<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->load->model('Alunos_model');

		$data['title'] = "Dashboard";
		$data['alunos'] = $this->Alunos_model->index();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
		
	}

	public function new() {
		$data['title'] = "Cadastrar aluno";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/alunos', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
