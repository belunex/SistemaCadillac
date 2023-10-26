<?php
//se puede tener como un reposotorio de funciones
function formatearFecha($fecha){
    /* 2023-06-22 23:40:13 */
    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anio=substr($fecha,0,4);

    $hora=substr($fecha,11,5);
    $fechaFormateada = $dia."-".$mes."-".$anio." ".$hora;
    return $fechaFormateada;
}

function mensajeEstado($estado){
    
    if($estado>=1){
        $mensajeEstado = "Activo";
    }
    else{
        $mensajeEstado = "Inactivo";
    }

    
    
    return $mensajeEstado;
}

?>