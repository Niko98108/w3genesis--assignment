<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model{

    protected $table = "events";
    protected $primaryKey = "eventID";
    protected $returnType = "array";

    protected $allowedFields = ['eventID', 'eventName', 'organizerID', 'eventDesc', 'image','thumb', 'userid', 'date'];

}