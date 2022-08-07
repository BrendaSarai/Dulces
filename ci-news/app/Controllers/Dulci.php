<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dulci extends BaseController
{
    public function index()
    { $tablaDulce = new \App\Models\tablaDulce;
          $dulces = $tablaDulce ->findAll();
          $datos = array(
            "dulces"=> $dulces,
            "numeroDulces" => sizeof($dulces),

          );

          return view("materialize/pages/dulci",$datos);
    }
}
