<?php
require_once 'src/UtilidadesDeFechas.php';
use Molodate\UtilidadesDeFechas;

echo "<br>Ejemplos de uso<br>";

var_dump (UtilidadesDeFechas::comprobarSiFechaEsMysql('2015-03-12'));
var_dump (UtilidadesDeFechas::comprobarSiFechaEsDDMMYYYY('12-03-2015'));


echo "<br>".UtilidadesDeFechas::ConvertirFechaMysqlADDMMYYYY('2015-01-01','/');
echo "<br>".UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01-01-2015');
echo "<br>".UtilidadesDeFechas::ConvertirFechaDDMMYYYYAMysql('01/01/2015','/');