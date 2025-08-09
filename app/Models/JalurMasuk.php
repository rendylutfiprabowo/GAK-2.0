<?php

namespace App\Models;

use CodeIgniter\Model;

class JalurMasuk extends Model
{
    protected $table            = 'jalurmasuk';
    protected $primaryKey       = 'id_jalurmasuk';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_jalurmasuk'];
}
