<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Saham_model extends CI_Model{
  public function __construct(){
    $this->load->database();
    // $this->load->library('Excel');
  }

  public function getListClassifier()
  {
    $query = $this->db->get('classifier');
    return $query->result();
  }
  public function getSelectedClassifier($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('classifier',$where);
    return $query->row();
  }
  public function updateClassifier($id)
  {
    $where = array('id' => $id );
    $data = array(
      'kode' => $this->input->post('kode'),
      'nama' => $this->input->post('nama'),
    );
     $this->db->where($where);
     $this->db->update('classifier',$data);
  }
  public function deleteClassifier($where,$id)
  {
    $this->db->where($where);
    $this->db->delete('classifier',$where);
  }
  public function getListCompany()
  {
    $query = $this->db->get('view_company');
    return $query->result();
  }

  public function getSelectedCompany($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('company',$where);
    return $query->row();
  }
  public function updateCompany($id)
  {
    $where = array('id' => $id );
    $data = array(
      'kode' => $this->input->post('kode'),
      'nama' => $this->input->post('nama'),
      'id_subsektor' => $this->input->post('id_subsektor'),
      'alamat' => $this->input->post('alamat'),
      'website' => $this->input->post('website'),
      'deskripsi' => $this->input->post('deskripsi'),
    );
     $this->db->where($where);
     $this->db->update('company',$data);
  }
  public function deletecompany($id)
  {
    $where = array('id' => $id);
    $this->db->delete('company',$where);
  }
  public function createCompany()
  {
    $data = array(
      'kode' => $this->input->post('kode'),
      'nama' => $this->input->post('nama'),
      'id_subsektor' => $this->input->post('id_subsektor'),
      'alamat' => $this->input->post('alamat'),
      'website' => $this->input->post('website'),
      'deskripsi' => $this->input->post('deskripsi'),
     );
     $this->db->insert('company',$data);
  }

  public function getListSubsektor()
  {
    $query = $this->db->get('subsektor');
    return $query->result();
  }

  public function getSelectedSubsektor($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('subsektor',$where);
    return $query->row();
  }
}
