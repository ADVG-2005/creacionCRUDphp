<?php

namespace app\controller;
use app\models\viewsModels;

class viewsController extends viewsModels{
    public function obtenerVistaControlador($vistas){
        if($vistas != ""){
            $respuesta = $this->obtenerVistasModelo($vistas);
        }
        else{
            $respuesta = "login";
        }
        return $respuesta;
    }
}