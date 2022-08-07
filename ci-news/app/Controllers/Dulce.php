<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dulce extends BaseController
{
  public function index()

  {

      $tablaDulce = new \App\Models\tablaDulce;
      $dulces = $tablaDulce ->findAll();
      $datos = array(
        "dulces"=> $dulces,
        "numeroDulces" => sizeof($dulces),

      );

      return view('dashboard/dulce',$datos);
  }
  public function guardar()
  {

   $datos = array(
     'fecha_creaction' => date("Y-m-d"),
     "nombre" => $this->request-> getPost("nombre"),
     "descripcion" => $this->request-> getPost("cantidad"),
     "marca" => $this->request-> getPost("marca"),


   );
   $tablaDulce = new \App\Models\tablaDulce;
   if($tablaDulce->insert($datos)){
     return redirect()->route("dulce");

   }
  }

  public function actualizar()
  {

    $id_Dulce = $this->request->getPost("id_Dulce");

   $datos = array(
     'fecha_actualizacion' => date("Y-m-d"),
     "nombre" => $this->request-> getPost("nombre"),
     "descripcion" => $this->request-> getPost("descripcion"),
     "marca" => $this->request-> getPost("marca"),


   );
   $tablaDulce = new \App\Models\tablaDulce;
   if($tablaDulce->update($id_Dulce,$datos)){
     return redirect()->route("dulce");

   }
  }

    public function eliminar(){
      $id_Dulce = $this->request->getPost("id");
      $tablaDulce = new \App\Models\tablaDulce;
      if($tablaDulce->delete($id_Dulce)){
        return json_encode(array("resultado"=>true));
      }
      else{
        return json_encode(array("resultado"=>false));
      }
    }

}
