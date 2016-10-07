<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class m_pengguna extends CI_Model {

  	private $tabel = "pengguna";

    public function getall() {
      $start = $this->uri->segment(3);
      #echo $start;
      $q = $this->db->get($this->tabel);
   
      return $q->result();

    }
    public function getdata($start=0,$limit) {

      $q = $this->db->get($this->tabel,$limit,$start);
   
      return $q->result();

    }
    public function getcount() {

      return $this->db->get($this->tabel)->num_rows();

    }
    public function search($field,$value) {

      $this->db->where($field,$value);
      return $this->db->get($this->tabel)->result();

    }
    public function innerjoin_trxstatus($tabel1,$tabel2,$status,$userid) {
       $this->db->select('*');
      $this->db->from($tabel2);
      $comment = $tabel1.'.'.'id'. '=' . $tabel2.'.'.'trxid';
      $this->db->join($tabel1, $comment, 'inner');
       $where = array(
        'userid' => $userid,  
        'status' => $status
        );

      $this->db->where($where);

      $query = $this->db->get();
      #echo $this->db->last_query();
      return $query->result();

    }
   public function input_data($data,$table){
      $this->db->insert($table,$data);
      if ($this->db->affected_rows()>0) {
        if ($id = $this->db->insert_id()) {
          return $id;
        }
        return TRUE;
      } 
      else {
        return FALSE;
      }
    }
    public function ubah($field,$value) {

      return $this->db->get_where($value,$field);

    }
    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
      if ($this->db->affected_rows()>0) {
        return TRUE;
      } 
      else {
        return FALSE;
      }
    } 
    public function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
      if ($this->db->affected_rows()>0) {
        return TRUE;
      } 
      else {
        return FALSE;
      }
    }
    public function cek_login($username,$password)
    {
      $where = array (
        'username' => $username,
        'password' => $password
        );
      return $this->db->where($where)->get($this->tabel)->row();
    }
  }
