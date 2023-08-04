<?php

namespace App\Models;

use CodeIgniter\Model;

class Operaciones_model extends Model
{
    protected $table = 'operaciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['numero1', 'numero2', 'operacion', 'resultado'];
}
