<?php

namespace App\Models;

use CodeIgniter\Model;

class TablaUsuario extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields = true;
    protected $allowedFields    = ['fecha_creaction','fecha_actualizacion','fecha_eliminacion','nombre','paterno','materno','correo','contrasena'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'fecha_creaction';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'fecha_eliminacion';

    public function login($correo, $contrasena){
      $usuario =$this->select("CONCAT(nombre,' ',paterno,' ',materno)as nombre_completo, correo")
          ->where("correo",$correo)
          ->where("contrasena",hash("sha256",$contrasena))
          ->first();

      if($usuario != null){
          return $usuario;

      }
      else{
          return null;
      }

    }


}
