<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      $tablaDulce = new \App\Models\tablaDulce;
      $dulces = $tablaDulce ->findAll();
      $datos = array(
        "dulces"=> $dulces,
        "numeroDulces" => sizeof($dulces),

      );

        return view("materialize/index",$datos);
    }
}
