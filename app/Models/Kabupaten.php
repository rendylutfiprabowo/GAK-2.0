<?php

namespace App\Models;

use CodeIgniter\Model;

class Kabupaten extends Model
{
    protected $table            = 'kabupaten';
    protected $primaryKey       = 'id_kabupaten';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_kabupaten'];
}
