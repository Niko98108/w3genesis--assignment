<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganizerModel extends Model{

    protected $table = "organizer";
    protected $primaryKey = "orgID";
    protected $returnType = "array";

    protected $allowedFields = ['orgID', 'orgName', 'email', 'phoneNo', 'username', 'password'];

}