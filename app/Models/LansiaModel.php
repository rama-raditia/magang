<?php

namespace App\Models;

use CodeIgniter\Model;

class LansiaModel extends Model
{
  protected $table = 'data_warga_lansia';

  public function getLansia($id = false)
  {
    if ($id === false) {
      return $this->table('data_warga_lansia')
        ->get()
        ->getResultArray();
    } else {
      return $this->table('data_warga_lansia')
        ->where('id_lansia', $id)
        ->get()
        ->getRowArray();
    }
  }

  public function hapus_lansia($id)
  {
    return $this->db->table($this->table)->delete(['id_lansia' => $id]);
  }

  public function tambah_lansia($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function ubah_lansia($data, $id)
  {
    return $this->db->table($this->table)->update($data, ['id_lansia' => $id]);
  }

  public function search($keyword)
  {
    return $this->table('data_warga_lansia')->like('nama', $keyword);
  }
}
