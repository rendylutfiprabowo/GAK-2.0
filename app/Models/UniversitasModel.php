<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversitasModel extends Model
{
    protected $table = "universitas";
    protected $primaryKey = "id_univ";
    protected $allowedFields = [
        'nama_univ', 
        'prodi', 
        'tahun_masuk',  
    ];
}

?>
