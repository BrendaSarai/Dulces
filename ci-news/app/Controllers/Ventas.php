<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ventas extends BaseController
{
    public function guardar_venta()
    {
        $session = session();
        $datos = array(
            "producto" => $this->request-> getPost("producto"),
            "cantidad" => $this->request-> getPost("cantidad"),
            "marca" => $this->request-> getPost("marca"),
            "precio" => $this->request-> getPost("precio"),
            "total" => $this->request-> getPost("total"),
            "id_usuario" => $session->id_usuario,
            "estado" => $this->request-> getPost("estado"),
            "id_producto" => $this->request-> getPost("id_producto"),
            "municipio" => $this->request-> getPost("municipio"),

        );
        $tablaVentas = new \App\Models\TablaVentas;
        if($tablaVentas->insert($datos)){
            return redirect()->route("dulce");
       
        }
    }
}
