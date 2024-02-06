<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table      = 'dokumen';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_dokumen', 'deskripsi_dokumen', 'link_dokumen', 'tanggal'];
}
