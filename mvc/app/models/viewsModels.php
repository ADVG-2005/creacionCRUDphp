<?php

namespace app\models;

class viewsModels
{
    protected function obtenerVistasModelo($vistas){
        $listaPermitida = ["dashboard"];
        
        if(in_array($vistas,$listaPermitida)){
            if(is_file("./app/views/content/". $vistas."_view.php")){
                $contenido = "./app/views/content/". $vistas. "_view.php";
            }
            else{
                $contenido = "404";
            }
        }elseif($vistas == "login" || $vistas == "index"){
            $contenido = "login";
        }
        else{
            $contenido = "404";
        }
        return $contenido;
    }
}
