<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = "user";
    protected $primaryKey = "userID";
    protected $returnType = "array";

    protected $allowedFields = ['userID', 'firstName', 'lastName', 'phoneNo', 'districts', 'email', 'nic', 'address','eventID','city'];

}