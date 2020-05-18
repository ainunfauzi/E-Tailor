<?php
class M_pesanan extends CI_Model{
  function tampil_data(){
    return $this->db->get('tbl_pesanan');
  }
  function insert_data($data){
    $this->db->insert('tbl_pesanan',$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  } 
}
