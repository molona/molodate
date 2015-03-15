<?php

namespace Molodate;

/**
 * Description of UtilidadesDeFechas
 *
 * @author molona
 */
class UtilidadesDeFechas
{

    /**
     * @param type $fecha
     * @return string
     */
    public static function ConvertirFechaMysqlAHumano($fecha)
    {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $fecha)) {
            $fecha = explode('-', $fecha);
            return $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }

        return '';
    }


    public static function ConvertirFechaHumanoAMysql($fecha)
    {

        if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/", $fecha)) {
            $fecha = explode('-', $fecha);
            return $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }

        return '';
    }


    public static function comprobarSiFechaEsMysql($fecha)
    {
        if (empty(trim($fecha))) {
            return false;
        }

        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $fecha)) {
            return true;
        }

        return false;
    }


    public static function comprobarSiFechaEsHumano($fecha)
    {

        if (empty(trim($fecha))) {
            return false;
        }

        if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/", $fecha)) {
            return true;
        }

        return false;
    }


    public static function obtenerAnioDeFecha ($fecha){
        
        $anio = explode ('-',$fecha);
        
        if (self::comprobarSiFechaEsHumano($fecha)){
            return $anio[2];
        }
        else{
            return $anio[0];
        }

    }

    public static function obtenerMesDeFecha ($fecha){

        $mes = explode ('-',$fecha);
        return $mes[1];
    }

    public static function obtenerDiaDeFecha ($fecha){

        $dia = explode ('-',$fecha);

        if (self::comprobarSiFechaEsHumano($fecha)){
            return $dia[0];
        }
        else{
            return $dia[2];
        }

    }


}