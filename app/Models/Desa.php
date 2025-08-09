<?php

namespace App\Models;

use CodeIgniter\Model;

class Desa extends Model
{
    protected $table            = 'desa';
    protected $primaryKey       = 'id_desa';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_desa', 'id_kecamatan', 'id_kabupaten'];
}
