<?php

namespace App\Models;

use CodeIgniter\Model;

class SMA extends Model
{
    protected $table            = 'sma';
    protected $primaryKey       = 'id_sma';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_sma', 'id_kabupaten'];
}
