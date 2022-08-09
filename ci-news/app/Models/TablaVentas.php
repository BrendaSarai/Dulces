<?php

namespace App\Models;

use CodeIgniter\Model;

class TablaVentas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ventas';
    protected $primaryKey       = 'id_venta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_producto','id_usuario','producto','marca','cantidad','total','precio','estado','municipio'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'fecha_creaction';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'fecha_eliminacion';

    
}
