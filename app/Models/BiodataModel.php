<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id_prestasi";
    protected $allowedFields = [
        'email', 
        'nama_lengkap', 
        'no_pkh', 
        'nama_pendamping', 
        'wilayah', 
        'asal_sekolah',
        'nama_ibu',
        'no_wa' 
    ];
}

?>
