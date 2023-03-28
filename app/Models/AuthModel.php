<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';    
    
    public function createUser($data){
        return $this->db->table($this->table)->insert($data);
    }
    
}