<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/login');
    }
    public function redireccionar()
    {
        return view('recuperar');
    }

    public function informacion()
    {
        return view('registro');
    }



    public function validar()
    {
        $correo= $this->request->getPost('correo');
        $contrasena= $this->request->getPost('contrasena');

        //estancias es modelo
        $TablaUsuario = new \App\Models\TablaUsuario;
        $usuario = $TablaUsuario -> login($correo,$contrasena);
        if($usuario != null){
              $session = session();
              $session->nombre= $usuario->nombre_completo;
              $session->correo = $usuario->correo;
              return redirect()->to("dulce");
          }else{
              return redirect()->route("inicio");
          }

    }

    public function logout(){
      session()->destroy();
      return redirect()->route("home");
    }


}
