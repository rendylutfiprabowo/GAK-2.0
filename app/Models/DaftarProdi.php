<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarProdi extends Model
{
    protected $table            = 'daftarprodi';
    protected $primaryKey       = 'id_daftarprodi';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_daftarprodi'];
}

