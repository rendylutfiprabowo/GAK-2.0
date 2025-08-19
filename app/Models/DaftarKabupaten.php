<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarKabupaten extends Model
{
    protected $table            = 'daftarkabupaten';
    protected $primaryKey       = 'id_kabupaten';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_kabupaten'];
}
