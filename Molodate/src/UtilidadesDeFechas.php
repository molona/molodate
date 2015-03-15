<?php

namespace Molodate;

/**
 * Description of UtilidadesDeFechas
 *
 * @author molona
 */
class UtilidadesDeFechas
{


    private static function obtenerSeparadorExpresion ($separador){
        
        $separadorExpresion = $separador;

        if ($separadorExpresion == '/'){
            $separadorExpresion ='\/';
        }

        return $separadorExpresion;
    }

    /**
     * @param type $fecha
     * @return string
     */
    public static function ConvertirFechaMysqlADDMMYYYY($fecha,$separadorRetorno = '-')
    {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $fecha)) {
            $fecha = explode('-', $fecha);
            return $fecha[2].$separadorRetorno.$fecha[1].$separadorRetorno.$fecha[0];
        }

        return '';
    }


    public static function ConvertirFechaDDMMYYYYAMysql($fecha,$separador = '-')
    {
        
        $separadorExpresion = self::obtenerSeparadorExpresion($separador);

        if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])".$separadorExpresion."(0[1-9]|1[0-2])".$separadorExpresion."[0-9]{4}$/", $fecha)) {
            $fecha = explode($separador, $fecha);
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


    public static function comprobarSiFechaEsDDMMYYYY($fecha,$separador = '-')
    {

        if (empty(trim($fecha))) {
            return false;
        }

        $separadorExpresion = self::obtenerSeparadorExpresion($separador);

        if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])".$separadorExpresion."(0[1-9]|1[0-2])".$separadorExpresion."[0-9]{4}$/", $fecha)) {
            return true;
        }

        return false;
    }


    public static function obtenerAnioDeFecha ($fecha, $separador = '-'){

        $anio = explode ($separador,$fecha);

        if (self::comprobarSiFechaEsDDMMYYYY($fecha,$separador)){    
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
    

    public static function obtenerDiaDeFecha ($fecha, $separador = '-'){

        $dia = explode ($separador,$fecha);

        if (self::comprobarSiFechaEsDDMMYYYY($fecha,$separador)){
            return $dia[0];
        }
        else{
            return $dia[2];
        }

    }


}