<?php

class M_relasi extends CI_Model
{

  public function get_relasi($kd = null)
  {
     $this->db->select('jadwal.*, peserta.username as peserta_name, instruktur.username as instr_name');
     $this->db->from('jadwal');
     $this->db->join('peserta','peserta.id_peserta = jadwal.id_peserta');
     $this->db->join('instruktur','instruktur.id_instr = jadwal.id_instr');
     if ($kd != null) {
       $this->db->where('kd_jadwal',$kd);
     }
     $query = $this->db->get();
     return $query;
  }
}
