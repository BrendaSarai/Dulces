<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()

    {

        $tablaUsuario = new \App\Models\TablaUsuario;
        $usuarios = $tablaUsuario ->findAll();
        $roles = array(
          '1' => 'consumidor',
          '2' => 'administrador'
        );
        $datos = array(
          "Usuarios" => $usuarios,
          "numeroUsuarios" => sizeof($usuarios),
          "roles" => $roles

        );

        return view('dashboard/dashboard',$datos);
    }
}
