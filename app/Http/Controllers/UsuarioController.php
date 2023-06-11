<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class UsuarioController extends Controller

{

    /*
    *@return void
    */
    public function __contrust()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return 'Mostrando Perfil de Usuario';
    }
    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualización de Usuario';
    }
    public function postActualizar()
    {
        return 'Actualizando de Usuario';
    }
    public function missingMethod($oarameters=array())
    {
        abort(404);
    }
}
