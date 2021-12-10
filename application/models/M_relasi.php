<?php

class M_relasi extends CI_Model
{

  function tampil_data($limit,$start,$keyword = null)
  {
    if ($keyword) {
      $this->db->like('kd_jadwal',$keyword);
    }
    return $this->db->get('jadwal',$limit,$start);

  }
  function get_relasi($kd = null)
  {
     $this->db->select('jadwal.*, peserta.username as peserta_name, instruktur.username as instr_name');
     $this->db->from('jadwal');
     $this->db->join('peserta','peserta.id_peserta = jadwal.id_peserta','inner');
     $this->db->join('instruktur','instruktur.id_instr = jadwal.id_instr','inner');
     if ($kd != null) {
       $this->db->where('kd_jadwal',$kd);
     }
     return $this->db->get();
  }
  function countJadwal()
  {
    return $this->db->get('jadwal')->num_rows();
  }
  // public function userRelasi($id = null)
  // {
  //   $this->db->select('user.*,')
  // }


}
