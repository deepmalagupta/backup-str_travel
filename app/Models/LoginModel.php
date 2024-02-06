<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fname', 
        'lname',
        'username',
        'password',
        'roleid',
        'created_at',
        'created_by',
        'status',];
    // Add any additional methods for user-related operations
    public function getUserByUsername($email)
    {
        return $this->where('username', $email)->first();
    }

    // public function updateUser($userId, $data)
    // {
    //     $this->update($userId, $data);
    // }

}
