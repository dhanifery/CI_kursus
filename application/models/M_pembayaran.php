<?php

class M_pembayaran extends CI_Model
{
  public function get($id_pembayaran = null)
  {
    $this->db->from('pembayaran');
    if($id_pembayaran != null){
      $this->db->where('id_pembayaran',$id_pembayaran);
    }
    $query = $this->db->get();
    return $query;
  }
}
