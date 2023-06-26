<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $returnType = "object";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'password', 'user'];

    public function getUser($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'user_id', 'id');
    }
}
