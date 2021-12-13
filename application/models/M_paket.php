<?php

class M_paket extends CI_Model
{

  public function get($id = null)
  {
    $this->db->from('paket');
    if($id != null){
      $this->db->where('id',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('paket');
  }

  function tampil_data($limit,$start,$keyword = null)
  {
    if ($keyword) {
      $this->db->like('nama',$keyword);
    }
    return $this->db->get('paket',$limit,$start);

  }
  public function countPaket()
  {
    return $this->db->get('paket')->num_rows();
  }

  public function add($post)
  {
    $params = [
      'nama' =>  $post['nama'],
      'harga' => $post['harga'],
      'byk_pertemuan' => $post['byk_pertemuan']
    ];
    $this->db->insert('paket',$params);

  }

  public function edit($post)
  {
    $params = [
      'nama' =>  $post['nama'],
      'harga' => $post['harga'],
      'byk_pertemuan' => $post['byk_pertemuan'],
    ];
    $this->db->where('id', $post['id']);
    $this->db->update('paket',$params);
  }

}
