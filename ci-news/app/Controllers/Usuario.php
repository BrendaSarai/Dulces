<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuario extends BaseController
{
    public function guardar()
    {
     $contrasena= $this->request-> getPost("contrasena");
     $contrasena_dos=hash("sha256",$contrasena);
     $rol = $this->request-> getPost("rol");

     if($rol != null){
      $datos = array(
        "nombre" => $this->request-> getPost("nombre"),
        "paterno" => $this->request-> getPost("paterno"),
        "materno" => $this->request-> getPost("materno"),
        "correo" => $this->request-> getPost("correo"),
        "rol" => $rol,
        "contrasena" => $contrasena_dos
      );
     }else{
      $datos = array(
        "nombre" => $this->request-> getPost("nombre"),
        "paterno" => $this->request-> getPost("paterno"),
        "materno" => $this->request-> getPost("materno"),
        "correo" => $this->request-> getPost("correo"),
        "rol" => 1,
        "contrasena" => $contrasena_dos
      );
     }
     
     $tablaUsuario = new \App\Models\TablaUsuario;
     if($tablaUsuario->insert($datos)){
       return redirect()->route("dashboard");

     }
    }

    public function actualizar()
    {
      $contrasena= $this->request-> getPost("contrasena");
      $contrasena_dos=hash("sha256",$contrasena);
      $id_usuario = $this->request->getPost("id_usuario");

     $datos = array(
       "nombre" => $this->request-> getPost("nombre"),
       "paterno" => $this->request-> getPost("paterno"),
       "materno" => $this->request-> getPost("materno"),
       "correo" => $this->request-> getPost("correo"),
       "rol" => $this->request-> getPost("rol"),
       "contrasena" => $contrasena_dos

     );
     $tablaUsuario = new \App\Models\TablaUsuario;
     if($tablaUsuario->update($id_usuario,$datos)){
       return redirect()->route("dashboard");

     }
    }

      public function eliminar(){
        $id_usuario = $this->request->getPost("id");
        $tablaUsuario = new \App\Models\TablaUsuario;
        if($tablaUsuario->delete($id_usuario)){
          return json_encode(array("resultado"=>true));
        }
        else{
          return json_encode(array("resultado"=>false));
        }
      }

}
