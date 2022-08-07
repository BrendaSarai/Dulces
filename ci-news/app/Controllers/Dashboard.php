<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()

    {

        $tablaUsuario = new \App\Models\TablaUsuario;
        $usuarios = $tablaUsuario ->findAll();
        $datos = array(
          "Usuarios" => $usuarios,
          "numeroUsuarios" => sizeof($usuarios),

        );

        return view('dashboard/dashboard',$datos);
    }
}
