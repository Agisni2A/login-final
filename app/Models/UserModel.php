<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    public function get_data($email, $password)
    {
        return $this->db->table('users')
            ->where(array('email' => $email, 'password' => $password))
            ->get()->getRowArray();
    }
}
