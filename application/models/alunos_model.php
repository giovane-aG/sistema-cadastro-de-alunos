<?php

class Alunos_model extends CI_MODEL {
  
  public function index() {
    return $this->db->get("alunos")->result_array();
  }
}