<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaPrestasi extends Model
{
    protected $table = "prestasi";
    protected $primaryKey = "id_prestasi";
    

    protected $allowedFields = [
        'prestasi', 
        'penyelenggara', 
        'tingkat', 
        'tahun', 
        'keterangan', 
        'image', 
    ];
  
}

?>
