<?php

class Alunos_model extends CI_MODEL {
  
  public function index() {
    return $this->db->get("alunos")->result_array();
  }

  public function inserir($data) {
    return $this->db->insert('alunos', $data);
  }

  	public function mostrar($id) {
		return $this->db->get_where('alunos', array('id' => $id))->row_array();
  }
  
  public function editar($id, $aluno) {
    $this->db->where('id', $id);
    return $this->db->update('alunos', $aluno);
  }
}


// standart class object
// $nome = new stdClass();
// $nome->nome = 'josvane';
// $nome->endereco = 'rua oito';