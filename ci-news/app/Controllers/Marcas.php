<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Marcas extends BaseController
{
    public function index()
    {
      return view("materialize/pages/marcas");

    }
}
