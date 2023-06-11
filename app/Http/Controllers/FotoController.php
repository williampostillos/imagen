<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{/*
        *@return void
        */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return 'Mostrando Fotos de Foto';
    }
    public function getCrear()
    {
        return 'Mostrando Formulario de Creacion de Foto';
    }
    public function postCrear()
    {
        return 'Almacenado Fotos de DB';
    }
    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualización de Foto';
    }
    public function postActualizar()
    {
        return 'Actualizando de Foto';
    }
    public function postEliminar()
    {
        return 'Eliminando foto';
    }
    public function missingMethod($oarameters=array())
    {
        abort(404);
    }
}

