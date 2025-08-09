<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarUniversitas extends Model
{
    protected $table            = 'daftaruniversitas';
    protected $primaryKey       = 'id_daftaruniversitas';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_daftaruniversitas'];
}
