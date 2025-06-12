<?php

namespace App\Models;

use CodeIgniter\Model;

class Zavody extends Model
{
    protected $table         = 'race_year';
    protected $primaryKey 	 = 'id';
	protected $returnType    = 'object';
    protected $allowedFields = [];
    protected $useTimestamps = false;
    protected $useAutoIncrement = true;
}
