<?php namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model {
    protected $table      = 'log_email';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre_completo', 'telefono', 'email', 'comentario'
    ];
    
    protected $useTimestamps = true;
}