<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /*
    *@return void
    */
    public function __contruct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return 'Mostrando Albumnes de usuario';
    }
    public function getCrear()
    {
        return 'Mostrando Formulario de Creación de Albúm';
    }
    public function postCrear()
    {
        return 'Almacenado Fotos de DB';
    }
    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualización de Album';
    }
    public function postActualizar()
    {
        return 'Actualizando de Album';
    }
    public function postEliminar()
    {
        return 'Eliminando Album';
    }
    public function missingMethod($oarameters=array())
    {
        abort(404);
    }
}
