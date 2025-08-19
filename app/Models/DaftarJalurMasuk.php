<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarJalurMasuk extends Model
{
    protected $table            = 'daftarjalurmasuk';
    protected $primaryKey       = 'id_jalurmasuk';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_jalurmasuk'];
}
